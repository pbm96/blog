<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo_post','subtitulo_post','descripcion_post', 'categoria_id','user_id','visitas_semanales'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    public function comentario()
    {
        return $this->hasMany('App\Comentario');
    }

    static function posts_user($id){

        return Post::where('user_id',$id);
    }

}
