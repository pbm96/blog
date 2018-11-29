<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $posts = Post::orderBy('created_at','DESC')->paginate(5);

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

        $ultimo_post = $posts->first();
        // borro el ultimo post del array de posts
        unset($posts[0]);



        return view('welcome')->with('posts',$posts)->with('ultimo_post',$ultimo_post)->with('categorias',$categorias);
    }

    public function vista_post($slug){
        $post = Post::where('slug',$slug)->get();

        $ultimas_noticias = Post::orderBy('created_at','DESC')->take(9)->get();


         $this->superadminController->fecha_post($post);
        $this->superadminController->hora_post($post);

        $this->superadminController->fecha_post($ultimas_noticias);

        return view('vista_post')->with('post', $post)->with('ultimas_noticias',$ultimas_noticias);
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
