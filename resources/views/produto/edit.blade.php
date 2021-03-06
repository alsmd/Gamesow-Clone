@extends('layouts.layout2')
@section('content')


<main class="container bg-black text-light rounded mt-3">
    <h3>Editar Produto</h3>   
    <form action="{{route('admin.produto.update',[$dados->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control bg-black text-light @error('nome') is-invalid @enderror" id="nome" name="nome"  placeholder="Min 5 Caracteres" value="{{$dados->nome}}">
            @error('nome')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        <div class="form-descricao">
            <div class="form-descricao-header">
                descricao
            </div>
            <div class="form-group">
                <textarea name="descricao" id="" cols="15" rows="4" class="form-control bg-black text-light @error('descricao') is-invalid @enderror"  placeholder="Min 5 Caracteres"  >{{$dados->descricao}}</textarea>
                @error('descricao')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-valor">
            <div class="form-valor-header">
                Valor
            </div>
            <div class="form-group">
                <input name="valor" type="number"  class="form-control bg-black text-light @error('valor') is-invalid @enderror"  placeholder="Valor do produto" value="{{$dados->valor}}"></input>
                @error('valor')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-valor">
            <div class="form-valor-header">
                Categorias
            </div>
            <div class="form-group">
                <div class="row">
                    @foreach($categorias_para_produtos as $categoria_para_produtos)
                        <div class="col-md-4">
                            <div class="custom-control custom-checkbox">
                                
                                <input type="checkbox" class="custom-control-input" id="{{$categoria_para_produtos->nome}}}" name="categorias_para_produtos[]" value="{{$categoria_para_produtos->id}}" @if(in_array($categoria_para_produtos->id,$categorias_selecionadas)) checked  @endif >
                                <label class="custom-control-label" for="{{$categoria_para_produtos->nome}}}" name='teste'>{{$categoria_para_produtos->nome}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
                @error('categorias_para_produtos')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>
        <p>Foto Para o Jogo</p>
        <div class="custom-file mb-4">
            <input type="file" class="custom-file-input" id="customFile" name="foto">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>

        <button class="btn btn-outline-warning">Postar</button>
    </form>

</main>
@endsection
