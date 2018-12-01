<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class Registro
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {

        $users = User::all();
        if (sizeof($users)== 0){

            return $next($request);

        }elseif ( Auth::check() && auth()->user()->superadmin==1){
            return $next($request);

        }else {
            return redirect('/');
        }

    }
}
