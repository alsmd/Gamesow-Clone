@extends('layouts.layout2')
@section('head')
<link rel="stylesheet" href="src/css/configuracao.css">
@endsection
@section('content')

<div class="container">
    <a href="{{route('forum.index')}}"class="text-info">FÓRUM</a> <span class="text-info">» Configurações</span>
</div>

<main class="container bg-black text-light rounded p-0 ">
    
   
   <div class="row m-0 flex-column ">
      <!--  Menu Horizontal -->
       <div class="col-12 sidebar mb-2">
            <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action  list-group-item-secondary active  flex-grow-1 d-flex align-items-center text-center justify-content-center" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                <a class="list-group-item list-group-item-action list-group-item-secondary flex-grow-1 d-flex align-items-center text-center justify-content-center" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">profile</a>
                <a class="list-group-item list-group-item-action list-group-item-secondary flex-grow-1 d-flex align-items-center text-center justify-content-center" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Mensagens</a>
                <a class="list-group-item list-group-item-action list-group-item-secondary flex-grow-1 d-flex align-items-center text-center justify-content-center" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">settings</a>
            </div>
       </div>
       <div class="col-12" >
           <!-- Conteudo -->
            <div class="tab-content" id="nav-tabContent">
                <!-- Home -->
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="row ">
                        <!-- Postagens -->
                        <div class="col-lg-6 postagens">
                            <h3 class="text-center my-4 text-warning">Postagens</h3>
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Jogo</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Ultimo Comentario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>Titulo</td>
                                      <td>Jogo</td>
                                      <td>Categoria</td>
                                      <td>Ultimo Comentario</td>
                                    </tr>
                                    <tr>
                                        <td>Titulo</td>
                                        <td>Jogo</td>
                                        <td>Categoria</td>
                                        <td>Ultimo Comentario</td>
                                    </tr>
                                    <tr>
                                        <td>Titulo</td>
                                        <td>Jogo</td>
                                        <td>Categoria</td>
                                        <td>Ultimo Comentario</td>
                                    </tr>
                                    <tr>
                                        <td>Titulo</td>
                                        <td>Jogo</td>
                                        <td>Categoria</td>
                                        <td>Ultimo Comentario</td>
                                    </tr>
                                  </tbody>
                            </table>
                        </div>
                        <!-- Comentarios -->
                        <div class="col-lg-6 comentarios">
                            <h3 class="text-center my-4 text-warning">Comentarios</h3>
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Jogo</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Ultimo Comentario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>Titulo</td>
                                      <td>Jogo</td>
                                      <td>Categoria</td>
                                      <td>Ultimo Comentario</td>
                                    </tr>
                                    <tr>
                                        <td>Titulo</td>
                                        <td>Jogo</td>
                                        <td>Categoria</td>
                                        <td>Ultimo Comentario</td>
                                    </tr>
                                    <tr>
                                        <td>Titulo</td>
                                        <td>Jogo</td>
                                        <td>Categoria</td>
                                        <td>Ultimo Comentario</td>
                                    </tr>
                                    <tr>
                                        <td>Titulo</td>
                                        <td>Jogo</td>
                                        <td>Categoria</td>
                                        <td>Ultimo Comentario</td>
                                    </tr>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                <!-- Profile -->
                <div class="tab-pane fade conteudo" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <!-- Informações opcionais -->
                    <form action="" class="">
                        <div class="d-flex justify-content-center mb-2">
                            <label for="foto" id="foto-perfil-background"><img src="{{auth()->user()->foto}}" alt="" width="150" height="150" style="border-radius: 50%;" class="border border-secondary foto-perfil"> <i class="fas fa-camera "></i></label>
                        </div>
                        <div class="custom-file mb-2 d-none">
                            <input type="file" class="custom-file-input" id="foto" required>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder="utilize http://">
                        </div>
                        <div class="form-group">
                            <label for="name">Biografia</label>
                            <textarea id=""rows="5" class="form-control" name="name" id="name" placeholder="Mostre para o mundo quem você é!"></textarea>
                        </div>
                        <button class="btn btn-success btn-lg btn-block">Salvar</button>
                    </form>
                </div> 
                <!-- Messages --> 
                <div class="tab-pane fade  p-sm-4" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <!-- header -->
                    <div class="d-flex justify-content-between">
                        <h1 class="logo-pm">PM</h1>
                        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                            <div class="input-group">
                                <input class="form-control form-control-sm " type="text" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="input-group-text btn-info" type="button"><i class="fas fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Menu -->
                    <ul class="nav justify-content-center mensagens-nav">
                        <li class="nav-item">
                          <a class="nav-link active  text-warning" href="#">Não lidas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link  text-warning" href="#">Lidas</a>
                        </li>
                    </ul>

                   <!--  Area de PM's -->
                   <div class="pms row m-0">
                        <!-- PM -->
                        <div class="col-12 pm px-0 py-2 d-flex align-items-start justify-content-between my-2">
                            <div class="d-flex ">
                                <img src="{{auth()->user()->foto}}" alt="" height="100" style="border-radius: 50%;" class="mr-3 foto-perfil ">
                                <div class="pm-informacoes-user">
                                    <h3>nome</h3>
                                    <p class="text-truncate m-0 p-0 ">Previa do conteudo Previa do conteudo Previa do conteudo</p>
                                    <small class="text-secondary">01/01/2021 13:59</small>
                                    <a href="#" class="text-info" onclick="document.querySelector('#pm').submit()">vizualizar</a>
                                    <form action="{{route('pm')}}" class="d-none" method="post" id="pm">
                                        @csrf
                                        <input type="text" name="chat" id="" value="chat">
                                    </form>
                                </div>
                            </div>
                            <button class="btn btn-dark rounded"><i class="fas fa-times"></i></button>
                        </div>
                   </div>
                </div>  
                <!-- Settings -->
                <div class="tab-pane fade conteudo" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    conteudo settings
                </div>  
            </div>
       </div>
   </div>
   
    
</main>
<script>
   
</script>
@endsection
