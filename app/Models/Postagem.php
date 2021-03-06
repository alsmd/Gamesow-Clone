<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    use HasFactory;
    protected $table = 'postagens';
    protected $fillable = ['titulo','conteudo','autor','fk_id_categoria','fk_id_forum'];






    //***********RELAÇÕES***********//



    //Postagem pertence a um usuario e a um forum

    public function user(){
        return $this->belongsTo(User::class,'fk_id_user');
    }

    public function forum(){
        return $this->belongsTo(Forum::class,'fk_id_forum');
    }

    //possui uma categoria
    public function categoria(){
        return $this->belongsTo(Categoria::class,'fk_id_categoria');
    }

    //possui comentarios
    public function comentarios(){
        return $this->hasMany(Comentario::class,'fk_id_postagem');
    }
}
