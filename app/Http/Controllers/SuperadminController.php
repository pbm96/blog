<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('superadmin');
    }

    public function panel($id){
        $user = User::find($id);

        if ($user == auth()->user()){

            $categorias = self::crear_post();

            $posts = self::obtener_posts($user->id);

             self::fecha_post($posts);

            return view('superadmin')->with('user',$user)->with('categorias',$categorias)->with('posts',$posts);
        }
    }

    public function crear_post(){

        $categorias = Categoria::orderBy('nombre_categoria', 'ASC')->pluck('nombre_categoria', 'id');

        return $categorias;

    }
    public function guardar_post(Request $request){
        $user = auth()->user();

        $entrada = new Post( $request->all());

        $entrada->user_id = $user->id;

        $entrada->save();

        return redirect()->route('perfil_superadmin',$user->id);

    }

    public function obtener_posts($id){
        $posts = Post::posts_user($id)->paginate(9);

        return $posts;
    }

    public function fecha_post($posts){
        foreach ($posts as $post){
            $mes = $post->created_at->month;
            $año = $post->created_at->year;
            $dia = $post->created_at->day;

            $post->fecha = $dia.'/'.$mes.'/'.$año;
        }

        return ($posts);
    }



        /*public function posts_ajax(){
        $user = auth()->user();
        $posts = Post::posts_user($user->id)->paginate(3);

        $categorias = self::crear_post();


        return view('superadmin')->with('posts',$posts)->with('user',$user)->with('categorias',$categorias);
    }*/
}
