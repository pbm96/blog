<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perfil($id)
    {
        $user = User::find($id);

        return view('perfil_users')->with('user', $user);
    }

    public function editar_perfil(Request $request, $id)
    {
        $user = User::find($id);

        $user->fill($request->all());

        $user->save();

        if ($user->superadmin != 1 && $user->admin != 1) {
            return redirect()->route('perfil_user', $user->id);

        } else {
            return redirect()->route('perfil_superadmin', $user->id);

        }

    }

    public function editar_foto_perfil(Request $request, $id)
    {
        if ($request->hasFile('imagen')) {
            $user = User::find($id);

            $user->imagen = self::imagen_base_64($request->imagen);

            $user->save();
        }

        if ($user->superadmin != 1 && $user->admin != 1) {
            return redirect()->route('perfil_user', $user->id);

        } else {
            return redirect()->route('perfil_superadmin', $user->id);

        }

    }

    public function eliminar_foto_perfil($id)
    {
        $user = User::find($id);
        if ($user->imagen != null) {
            $user->imagen = null;
            $user->save();

        }

        if ($user->superadmin != 1 && $user->admin != 1) {
            return redirect()->route('perfil_user', $user->id);

        } else {
            return redirect()->route('perfil_superadmin', $user->id);

        }
    }

    public function imagen_base_64($imagen)
    {

        $path = $imagen->path();
        $tipo = $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $imagen_base64 = 'data:image/' . $tipo . ';base64,' . base64_encode($data);

        return $imagen_base64;
    }
}
