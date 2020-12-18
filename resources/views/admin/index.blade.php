@extends('layouts.layout2')
@section('content')


<main class="container bg-black text-light rounded mt-3">
    <h3 class="text-center">Area Administrativa</h3>   

    <div class="row mt-3">
        <div class=" d-flex flex-column col-md-3">
            <!-- CRUD JOGO -->
            <div class="jogo_crud">
                <h3 class="text-center">Jogo</h3>
                <div>
                <!-- CRIAR JOGO -->
                    <a href="{{route('admin.jogo.create')}}" class="btn btn-warning active d-block">Criar Jogo</a>
                </div>
                <!--  EDITAR JOGO -->
                <form action="{{route('admin.jogo.edit',['0'])}}" class="form-group d-flex mb-0">
                    @csrf
                    <select name="id" id="" class="form-control "style="border-top-right-radius: 0;border-bottom-right-radius: 0;" required>
                        @foreach($jogos as $jogo)
                            <option value="{{$jogo->id}}">{{$jogo->nome}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-warning" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Editar</button>
                </form>
                <!-- REMOVER JOGO -->
                <form action="{{route('admin.jogo.destroy',['0'])}} mt-0" class="form-group d-flex" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="delete" />
                    <select name="id" id="" class="form-control "style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                        @foreach($jogos as $jogo)
                            <option value="{{$jogo->id}}">{{$jogo->nome}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-warning" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Remover</button>
                </form>
            </div>
            
            <!-- CRUD Categoria -->
            <div class="categoria_crud">
                <h3 class="text-center">Categoria</h3>
                <div>
                <!-- CRIAR Categoria -->
                    <a href="{{route('admin.categoria.create')}}" class="btn btn-warning active d-block">Criar Categoria</a>
                </div>
                <!--  EDITAR Categoria -->
                <form action="{{route('admin.categoria.edit',['0'])}}" class="form-group d-flex mb-0">
                    @csrf
                    <select name="id" id="" class="form-control "style="border-top-right-radius: 0;border-bottom-right-radius: 0;" required>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-warning" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Editar</button>
                </form>
                <!-- REMOVER Categoria -->
                <form action="{{route('admin.categoria.destroy',['0'])}} mt-0" class="form-group d-flex" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="delete" />
                    <select name="id" id="" class="form-control "style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-warning" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Remover</button>
                </form>
            </div>

            <!-- CRUD Produtos -->
            <div class="produto_crud">
                <h3 class="text-center">Produtos</h3>
                <div>
                <!-- CRIAR produto -->
                    <a href="{{route('admin.produto.create')}}" class="btn btn-warning active d-block">Criar Produto</a>
                </div>
                <!--  EDITAR produto -->
                <form action="{{route('admin.produto.edit',['0'])}}" class="form-group d-flex mb-0">
                    @csrf
                    <select name="id" id="" class="form-control "style="border-top-right-radius: 0;border-bottom-right-radius: 0;" required>
                        @foreach($produtos as $produto)
                            <option value="{{$produto->id}}">{{$produto->nome}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-warning" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Editar</button>
                </form>
                <!-- REMOVER produto -->
                <form action="{{route('admin.produto.destroy',['0'])}} mt-0" class="form-group d-flex" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="delete" />
                    <select name="id" id="" class="form-control "style="border-top-right-radius: 0;border-bottom-right-radius: 0;">
                        @foreach($produtos as $produto)
                            <option value="{{$produto->id}}">{{$produto->nome}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-warning" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Remover</button>
                </form>
            </div>
        </div>
        
        <div class="col-md-9">
                <!-- INFORMAÇÕES DO ADMIN -->
                <?php $user = auth()->user(); ?>
            <div class="row">
                <div class="col-md-9">
                    <div class="cabecalho border-bottom py-2 pl-2">
                        <h5 class="display-4">{{$user->name}}</h5>
                        <p class="text-warning">Gênero:	<span class="text-info">Masculino</span></p>
                        <p class="text-warning">Aniversário:	<span class="text-info">18-10-1989</span></p>
                        <p class="text-warning">Linkedin: <span class="text-info"><a href="{{$user->linkedin}}"class="text-info" target="_blank">{{$user->name}}</a></span></p>
                    </div>
                    <div class="body border-bottom py-2 pl-2">
                        <h4 class="">Grupo de Usuário:<span class="text-info"> Novato Rank: 1</span></h4> 
                        <div class="row">
                            <div class="col-md-6  d-flex flex-column justify-content-center  p-4">
                                <p class="text-warning">Postar classificação:<span class="text-info"> Iniciante Rank: 1</span></p>
                                <p class="text-warning">Tópico: <span class="text-info">20 pedaço(de todos os posts 0.01%)</span> </p>
                                <p class="text-warning">Tempo Online: <span class="text-info">Total online 19.83 Horas, e este mês 0  Horas Rank:  1 (Atualização após 1 horas) </span></p>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                                <p class="text-warning">Data de Registro: <span class="text-info">{{$user->created_at}}</span></p>
                                <p class="text-warning">Ultima Visita: <span class="text-info">Ante Ontem 00:38</span></p>
                                <p class="text-warning">Últma postagem: <span class="text-info">6 DiaAntes 05:48</span></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6 class="display-4 mb-2">Biografia</h6>
                            <div class="p-4 bg-dark text-light rounded">{{$user->biografia}}</div>
                        </div>
                    </div>
                    <div class="footer py-2 pl-2">
                        <h4>Creditos: 0</h4>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    
</main>
@endsection