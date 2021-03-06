<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamesow-Clone</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <script
    src="{{asset('js/app.js')}}"
    ></script>
    <!--FontAwesome -->
    <link rel="stylesheet" href="http://localhost:8080/src/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <!--Icone na aba -->
    <link rel="shortcut icon" href="http://localhost:8080/src/image/icon.jpg" id="aba_icone">
    <!--Estilo costumizado -->
    <link rel="stylesheet" href="http://localhost:8080/src/css/forum.css">
    @yield('head')
</head>
<body class="bg-dark" >
    <!-- Navbar -->
    <header class="bg-black">
        <div class="container ">
            <nav class="navbar navbar-dark  navbar-expand-md">
            <!-- Navbar logo -->
            <a href="/" class="navbar-brand "><img src="https://static.gamesow.com/br/images/logo.png" alt=""></a>
            
            <!-- Navbar button -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal"><span class="navbar-toggler-icon"></span></button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{route('forum.index')}}" class="nav-link">Principal</a></li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(count(auth()->user()->administrador) > 0)
                                <a class="dropdown-item" href="{{route('admin.index')}}">Admin</a>
                            @endif                            
                            <a class="dropdown-item" href="{{route('user.show',[auth()->user()->id])}}">Perfil</a>
                            <a class="dropdown-item" href="{{route('configuracao')}}">Configuração</a>
                            <a href="#" class="dropdown-item dropdown-toggle"id="navbarDropdownProdutos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produtos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownProdutos">
                                @foreach($categoriasParaProdutos as $categoria)
                                    <a href="{{route('categoria.show',[$categoria->slug])}}" class="dropdown-item @if(request()->is('categorias/'.$categoria->slug)) active @endif">{{$categoria->nome}}</a>
                                @endforeach
                            </div>
                            <a class="dropdown-item" href="{{route('carrinho.index')}}">
                                Carrinho
                                <i class="fa fa-shopping-cart"></i>
                                @if(@session()->has('carrinho'))
                                    <span class="badge badge-danger ml-2">{{count(session()->get('carrinho'))}}</span>
                                @endif
                            </a>
                            <a class="dropdown-item" href="#">Recarga</a>
                        </div>
                    </li>
                    @endauth
                    <li class="nav-item"><a href="{{route('forum.index')}}" class="nav-link">Forúm</a></li>
                            
                    <li class="nav-item"><a href="" class="nav-link">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="document.querySelector('.sair-forum').submit();">Sair</a></li>
                    <form action="{{route('logout')}}" method="post" class="sair-forum d-none">
                        @csrf
                    </form>
                </ul>
            </div>
            </nav>
        </div>
    </header>
    @include('flash::message')

    @yield('content')
    
    <!-- FOOTER -->
    <footer class=" p-4 border border-dark bg-black text-light mt-4 rounded">
            <div class="container-lg">
                <div class="row ">
                    <div class="col-md-3 col-6 text-truncate">
                        <a href="" class="text-info ">Sobre nós</a>
    
                    </div>
                    <div class="col-md-3 col-6 text-truncate">
                    <a href="" class="text-info ">Política de Privacidade</a>
                        
                    </div>
                    <div class="col-md-3 col-6 text-truncate">
                        <a href="" class="text-info ">Termos de Serviço</a>
                        
                    </div>
                    <div class="col-md-3 col-6 text-truncate">
                        <a href="" class="text-info ">Política de Reembolso</a>
                    </div>
                </div>
            </div>
    </footer>
    @yield('scripts')

</body>
</html>