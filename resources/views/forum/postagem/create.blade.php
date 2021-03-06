@extends('layouts.layout2')
@section('content')
<!-- TABS -->
<div class="container text-info">
    <a href=""class="text-info">FÓRUM</a> » <a href="{{route('forum.index')}}" class="text-info">Página inicial</a> »<a href="{{route('forum.jogo.show',[$slug_forum])}}"class="text-info"> {{$forum_nome}}</a> » <a href="{{route('forum.jogo.categoria.postagem.index',[$slug_forum,$slug_categoria])}}" class="text-info"> {{$categoria_nome}}</a> » <span>Postagem</span>
</div>


<main class="container bg-black text-light rounded mt-3">
    <h3>Novo Poste</h3>   
    <form action="{{route('forum.jogo.categoria.postagem.store',[$slug_forum,$slug_categoria])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control bg-black text-light @error('titulo') is-invalid @enderror" id="titulo" name="titulo"  placeholder="Min 5 Caracteres">
            @error('titulo')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        <div class="form-conteudo">
            <div class="form-conteudo-header">
                conteudo
            </div>
            <div class="form-group">
                <textarea name="conteudo" id="" cols="30" rows="10" class="form-control bg-black text-light @error('conteudo') is-invalid @enderror"  placeholder="Min 5 Caracteres"></textarea>
                @error('conteudo')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>

        <button class="btn btn-outline-warning">Postar</button>
    </form>

</main>
@endsection
