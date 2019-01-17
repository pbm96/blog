<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comentario extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_id','post_id','comentario'
    ];


    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
