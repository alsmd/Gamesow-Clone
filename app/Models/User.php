<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\StoreReceiveNewOrder;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'foto',
        'linkedin',
        'biografia'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];
    
    
    //pode comprar varios produtos

    public function produtos(){
        return $this->belongsToMany(Produto::class,'produto_usuario','fk_id_user','fk_id_produto');
    }

    //Usuario tem muitas postagens

    public function postagens(){
        return $this->hasMany(Postagem::class,'fk_id_user');
    }

    //Pode realizar varios comentarios
    public function comentarios(){
        return $this->hasMany(Comentario::class,'fk_id_user');
    }
    //Tem varias mensagens
    public function mensagens(){
        return $this->hasMany(Mensagem::class,'fk_id_user');
    }
    public function administrador(){
        return $this->hasMany(Administrador::class,'fk_id_user');
    }
    //Um usuario pode realizar diversos pedidos
    public function orders(){
        return $this->hasMany(UserOrder::class,'fk_id_user');
    }

    public function notifyAboutStore(){
        $this->notify(new StoreReceiveNewOrder());
    }
}


