<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Comentario;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Self_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct( SuperadminController $superadminController)
    {
        $this->superadminController = $superadminController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at','DESC')->paginate(30);


            //self::sacar_mes_post($posts);
        $categorias = Categoria::all();


         $posts_categorias = Post::groupBy('categoria_id')->select('categoria_id', DB::raw('count(*) as total'))->pluck('total','categoria_id')->all();

         foreach ($categorias as  $categoria){
             foreach ($posts_categorias as $key => $count){
                if ($key == $categoria->id){
                    $categoria->count = $count;
                }
             }

         }

        $this->superadminController->fecha_post($posts);

        //posts populares
        $posts_populares = self::post_populares($posts);

        $ultimo_post = $posts->first();

        // borro el ultimo post del array de posts
        unset($posts[0]);


        return view('welcome')->with('posts',$posts)->with('ultimo_post',$ultimo_post)->with('categorias',$categorias)->with('post_populares', $posts_populares);
    }

    public function vista_post($categoria,$slug){
        $post = Post::where('slug',$slug)->get();

        $post[0]->visitas_semanales = $post[0]->visitas_semanales +1;

        $post[0]->save();

        $comentarios = Comentario::where('post_id',$post[0]->id)->orderBy('created_at','DESC')->get();

        $this->superadminController->fecha_post($comentarios);

        $this->superadminController->hora_post($comentarios);

        $ultimas_noticias = Post::orderBy('created_at','DESC')->take(9)->get();

         $this->superadminController->fecha_post($post);

        $this->superadminController->hora_post($post);

        $this->superadminController->fecha_post($ultimas_noticias);


        return view('vista_post')->with('post', $post)->with('ultimas_noticias',$ultimas_noticias)->with('comentarios',$comentarios);
    }

    public function post_populares($posts){

        return $posts->sortByDesc('visitas_semanales')->take(5);
    }

    public function categoria($categoria){

        $categoria_completa = Categoria::where('nombre_categoria',$categoria)->first();

        $posts = Post::where('categoria_id',$categoria_completa->id)->orderBy('created_at','DESC')->paginate(30);

        $this->superadminController->fecha_post($posts);


        return view('vista_categorias')->with('posts',$posts)->with('categoria_completa',$categoria_completa);
    }

    public function buscar(){
        $buscar = Input::get('buscar');
        $posts = Post::where('titulo_post', 'like', '%'.$buscar.'%')
            ->orWhere('descripcion_post', 'like', '%'.$buscar.'%')
            ->orderBy('created_at', 'desc')->paginate(30);

        if (sizeof($posts)> 0){
            return view('vista_categorias')->with('posts',$posts)->with('buscar',$buscar);

        }else{
            Session::flash('mensaje', 'No se ha encontrado ningun resultado de '.$buscar);
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('home');
        }


    }

    public function pintar_categorias_nav(){

        $categorias = Categoria::all();

        return response()->json($categorias);
    }

 /*   public function sacar_mes_post($posts){
        $meses= [];
        $mes_incluido = false;
        foreach ($posts as $post){
            $mes = $post->created_at->month;

            if (empty($meses)){
                array_push($meses,$mes);
            }else {

                for ($i = 0; $i < sizeof($meses); $i++) {
                    if ($mes != $meses[$i]) {
                        $mes_incluido = true;
                    }
                }
                if ($mes_incluido == true){
                    array_push($meses, $mes);
                }
            }

        }
        dd($meses);
    }*/
}
