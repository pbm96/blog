<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;

class ComentariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function escribir_comentario(Request $request){

        try {
            if ($request->comentario == null){
                $respuesta = 'comentario_blanco';

                return response()->json(['respuesta'=>$respuesta]);

            }
            $comentario = new Comentario($request->all());
            $comentario->user_id = auth()->user()->id;
            $comentario->save();

            if ($comentario->exists) {
                $respuesta = true;
            } else {
                $respuesta = false;
            }
        }catch (Exception $exception){
            $respuesta = false;
        }
        $nombre = auth()->user()->nombre.' '.auth()->user()->apellidos;

        self::sacar_fecha_hora_simple($comentario);

        $count_comentarios = Comentario::where('post_id',$comentario->post_id)->get();
        $count_comentarios = count($count_comentarios);


        return response()->json(['respuesta'=>$respuesta,'comentario'=>$comentario,'nombre'=>$nombre,'count_comentarios',$count_comentarios]);

    }

    public function eliminar_comentario($id){
        try {
            $comentario = Comentario::find($id);

            $comentario->delete();

            $respuesta = true;

            $count_comentarios = count(Comentario::where('post_id',$comentario->post_id)->get());

            return response()->json(['respuesta' => $respuesta,'count_comentarios',$count_comentarios]);
        }catch (Exception $exception){
            $respuesta = false;

            return response()->json(['respuesta' => $respuesta]);

        }
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
