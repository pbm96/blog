<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;

class ComentariosController extends Controller
{


    public function escribir_comentario(Request $request){

        try {
            $comentario = new Comentario($request->all());
            $comentario->save();

            if ($comentario->exists) {
                $respuesta = true;
            } else {
                $respuesta = false;
            }
        }catch (Exception $exception){
            $respuesta = false;
        }
        self::sacar_fecha_hora_simple($comentario);
        return response()->json(['respuesta'=>$respuesta,'comentario'=>$comentario]);

    }

    public function sacar_fecha_hora_simple($item){
        $dia = $item->created_at->day;
        $mes = $item->created_at->month;
        $año = $item->created_at->year;

        $item->fecha = $dia.'/'.$mes.'/'.$año;

        $hora = $item->created_at->hour;
        $hora = $hora < 10 ? '0' . $hora : $hora;

        $minutos = $item->created_at->minute;
        $minutos = $minutos < 10 ? '0' . $minutos : $minutos;

        $item->hora = $hora . ':' . $minutos;
    }
}
