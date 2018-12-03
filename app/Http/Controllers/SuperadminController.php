<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuperadminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('superadmin');
    }

    public function panel($id)
    {
        $user = User::find($id);

        if ($user == auth()->user()) {

            $categorias_select = Categoria::orderBy('nombre_categoria', 'ASC')->pluck('nombre_categoria', 'id');

            $categorias = Categoria::all();

            $posts = self::obtener_posts($user->id);

            $users = User::all();

            self::fecha_post($posts);

            return view('superadmin')->with('user', $user)->with('categorias_select', $categorias_select)->with('posts', $posts)->with('categorias', $categorias)->with('users', $users);
        }
    }


    public function guardar_post(Request $request)
    {
        /*$this->validate($request, [
            'imagen.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nombre' => 'string|required|max:191',
            'precio' => 'numeric|required',
            'descripcion'=> 'string|required|max:500'
        ]);*/

        $user = auth()->user();

        $entrada = new Post($request->all());

        $entrada->user_id = $user->id;

        $entrada->slug = str_slug($request->titulo_post, '-');

        $entrada->save();

        return redirect()->route('perfil_superadmin', $user->id);

    }

    public function nueva_categoria(Request $request)
    {
        $categoria = New Categoria($request->all());

        $categoria->save();

        return redirect()->route('perfil_superadmin', auth()->user()->id);

    }

    public function editar_categoria(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        $categoria->nombre_categoria = $request->nombre_categoria;

        $categoria->save();

        return redirect()->route('perfil_superadmin', auth()->user()->id);
    }

    public function eliminar_categoria($id)
    {
        $categoria = Categoria::find($id);
        dd($categoria);

        $categoria->delete();

        return redirect()->route('perfil_superadmin', auth()->user()->id);

    }

    public function eliminar_usuario($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('perfil_superadmin', auth()->user()->id);


    }

    public function editar_user_admin(Request $request, $id)
    {

        $user = User::find($id);

        if (isset($request->superadmin)) {

            $user->superadmin = 1;
        } else {
            $user->superadmin = 0;
        }

        if (isset($request->admin)) {

            $user->admin = 1;
        } else {
            $user->admin = 0;
        }


        $user->save();
        return redirect()->route('perfil_superadmin', auth()->user()->id);


    }

    public function editar_perfil(Request $request, $id)
    {

    }

    public function obtener_posts($id)
    {
        $posts = Post::posts_user($id)->paginate(9);

        return $posts;
    }

    public function fecha_post($posts)
    {
        foreach ($posts as $post) {
            $mes = $post->created_at->month;
            $año = $post->created_at->year;
            $dia = $post->created_at->day;

            $post->fecha = $dia . '/' . $mes . '/' . $año;
        }

        return ($posts);
    }

    public function hora_post($posts)
    {
        foreach ($posts as $post) {
            $hora = $post->created_at->hour;
            $hora = $hora < 10 ? '0' . $hora : $hora;
            $minutos = $post->created_at->minute;
            $minutos = $minutos < 10 ? '0' . $minutos : $minutos;
            $post->hora = $hora . ':' . $minutos;
        }
    }


    /*public function posts_ajax(){
    $user = auth()->user();
    $posts = Post::posts_user($user->id)->paginate(3);

    $categorias = self::crear_post();


    return view('superadmin')->with('posts',$posts)->with('user',$user)->with('categorias',$categorias);
}*/
}
