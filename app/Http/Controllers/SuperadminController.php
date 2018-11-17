<?php

namespace App\Http\Controllers;

use App\Categoria;
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

            return view('superadmin')->with('user',$user);
        }
    }

    public function crear_post(){
        $categorias = Categoria::all();

        return view('crear_post')->with('categorias',$categorias);

    }
}
