<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comentario extends Model
{
    use Notifiable;

    protected $fillable = [
        'nombre_usuario','post_id','comentario'
    ];


    public function post()
    {
        return $this->belongsTo('App\Post');
    }


}
