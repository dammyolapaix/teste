  

  @extends('layouts.appadm')
    
  @section('title','Admin | Dashboard')

  @section('content')


  <div class="page-content">

      @if(Session::has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-check-circle"></i> </strong>{{Session::get('success')}}
        </div>

      @endif

    <div class="container-fluid">

      <div class="row">
        <div class="col-md-8" style="background: #2d3035;margin: 20px 2% 0;">

          <img src="{{ $user->image }}" alt="" style="width: 40%;margin-bottom: 15px;">
          <h1 style="font-size: 30px;">{{$user->name}}</h1>
          <h5>{{$user->email}}</h5>

        </div>

        <div class="col-md-3" style="background: #2d3035;margin: 20px 0 0;">
          <div class="breadcrumb">
            
            <!-- // Definition list -->
          

            <dl class="dl-horizontal">
              <dt>Data de criação:</dt>
              <dd>{{date('j M, Y', strtotime($user->created_at))}}</dd>
            </dl>

            <dl class="dl-horizontal">
              <dt>Última atualização:</dt>
              <dd>{{date('j M, Y', strtotime($user->updated_at))}}</dd>
            </dl><br />

            <hr style="width: 100%;margin-top: -15px;">

            <div class="row">
              <div class="col-sm-6">  
                <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-warning btn-sm" style="width: 70px;padding: 9px 0;margin-right: -42px;">Editar</a>
              </div>

              <div class="col-sm-6">  
                <a href="{{ route('user.index',['id' => $user->id]) }}" class="btn btn-light btn-sm" style="width: 70px;padding: 9px 0;">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end row -->

    </div> <!-- end container -->
         
  @stop

        