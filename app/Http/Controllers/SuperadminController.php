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

            return view('superadmin')->with('user',$user)->with('categorias',$categorias);
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
}
