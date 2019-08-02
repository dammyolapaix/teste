  

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
        <div class="col-md-8" style="background: #2d3035;margin: 20px 2% 20px;height: auto;">

          <img src="{{ $post->image }}" alt="" style="width: 40%;margin-bottom: 15px;">
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
              <div class="col-sm-4">  
                <a href="{{route('admin.edit', ['id' => $post->id])}}" class="btn btn-warning btn-sm"
                  style="width: 60px;padding: 7px 0;">Editar</a>
              </div>

              <div class="col-sm-4">
                <form action="{{route('admin.delete', ['id' => $post->id])}}" method="POST" id="delete">
                   {{ method_field('POST') }}
                   @csrf
                  <input type="submit" value="Deletar" class="btn btn-primary btn-sm" onclick="return myFunction();" style="width: 60px;padding: 7px 0;" />
                </form>           
              </div>

              <div class="col-sm-4">  
                <a href="{{ route('admin.index') }}" class="btn btn-light btn-sm" style="width: 60px;padding: 7px 0;">Voltar</a>
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

        