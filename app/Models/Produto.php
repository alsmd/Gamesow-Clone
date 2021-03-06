<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Produto extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable =[
        'nome',
        'valor',
        'descricao',
        'body',
        'slug',
        'foto'
    ];

    public function getSlugOptions() : SlugOptions{
        return SlugOptions::create()
        ->generateSlugsFrom('nome')
        ->saveSlugsTo('slug');
    }



    //pertence a varias categorias

    public function categorias(){
        return $this->belongsToMany(CategoriaParaProduto::class,'categoria_produto','fk_id_produto','fk_id_categoria_para_produto');
    }
}
