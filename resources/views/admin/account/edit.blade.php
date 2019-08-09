  

  @extends('layouts.appadm')
    
  @section('title','Admin | Dashboard')

  @section('content')

      <div class="page-content">

         <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Editar o Perfil</li>
          </ul>
        </div>

        <section class="no-padding-top">

          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Editar o Perfil</strong></div>
                  <div class="block-body">

                    <form action="{{route('user.update', ['id' => $user->id])}}" method="POST" enctype="multipart/form-data">

                      @csrf
                      {{ method_field('POST') }}

                      <div class="form-group">
                        <label class="form-control-label">Nome</label>
                        <input type="text" value="{{ $user->name }}" class="form-control" name="name" required />
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">E-mail</label>
                        <input type="text" value="{{ $user->email }}" class="form-control" name="email" required />
                      </div>

                      <div class="form-group">       
                        <label class="form-control-label">Imagem</label>
                        <div class="col-sm-8" style="padding-left: 0;">
                          <input type="file" name="image" class="form-control" value="{{ $user->image }}" />
                        </div>
                      </div>

                      <div class="form-group">       
                        <input type="submit" value="Salvar" class="btn btn-primary" />
                        <a href="{{ route('user.index',['id' => $user->id]) }}" class="btn btn-primary" style="margin-left: 1%;">Cancelar</a>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
         
  @stop

        