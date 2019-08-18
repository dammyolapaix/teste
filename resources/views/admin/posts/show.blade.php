  

  @extends('layouts.appadm')
    
  @section('title','Admin | Dashboard')

  @section('content')

  <style type="text/css">
    
    @media only screen and (max-width: 400px) {

      .img-show {
        width: 90%!important;
      }

      .dl-horizontal {
        width: 100%;
      }

      .button {
        margin-bottom: 10px;
        width: 80px;
      }
    }

  </style>


  <div class="page-content">

    @if(Session::has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-check-circle"></i> </strong>{{Session::get('success')}}
        </div>

    @endif

    <div class="container-fluid">

      <div class="row">
        <div class="col-md-8" style="background: #2d3035;margin: 20px 2% 20px;height: auto;">

          <img src="{{ $post->image }}" alt="" style="width: 40%;margin-bottom: 15px;" class="img-show">
          <h1 style="font-size: 30px;">{{$post->title}}</h1>
          <p class="lead" style="font-size: 16px;height: auto;"> {{ strip_tags($post->body) }}</p>

        </div>

        <div class="col-md-3" style="background: #2d3035;margin: 20px 0 20px;">
          <div class="breadcrumb">
            
            <!-- // Definition list -->

            <dl class="dl-horizontal">
              <dt>Data de criação:</dt>
              <dd>{{date('j M, Y', strtotime($post->created_at))}}</dd>
            </dl>

            <dl class="dl-horizontal">
              <dt>Última atualização:</dt>
              <dd>{{date('j M, Y', strtotime($post->updated_at))}}</dd>
            </dl><br />

            <hr style="width: 100%;margin-top: -15px;">

            <div class="row">
              <div class="col-sm-4 button">  
                <a href="{{route('post.edit', ['id' => $post->id])}}" class="btn btn-warning btn-sm"
                  style="width: 70px;padding: 9px 0;">Editar</a>
              </div>

              <div class="col-sm-4 button">
                <form action="{{route('post.delete', ['id' => $post->id])}}" method="POST" id="delete">
                   {{ method_field('POST') }}
                   @csrf
                  <input type="submit" value="Deletar" class="btn btn-primary btn-sm" onclick="return myFunction();" style="width: 70px;padding: 9px 0;" />
                </form>           
              </div>

              <div class="col-sm-4 button">  
                <a href="{{ route('post.index') }}" class="btn btn-light btn-sm" style="width: 70px;padding: 9px 0;">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end row -->

    </div> <!-- end container -->


      <!-- Script JS -->
      <script type="text/javascript">

          function myFunction() {
              if (confirm("Deseja realmente deletar esse post?")) {
                 return true;
              } else {
                return false;
              }
          }

      </script>
         
  @stop

        