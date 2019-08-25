  

  @extends('layouts.appadm')
    
  @section('title','post | Dashboard')

  @section('content')

      <style type="text/css">
          
          td.button {
            padding: 12px 4px 10px;
          }

      </style>

      <div class="page-content">

        @if(Session::has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong>{{Session::get('success')}}
                <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true">X</span></button>
            </div>

        @endif
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Posts</li>
          </ul>
        </div>

        <!-- Tabela -->
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="top-table" style="display: flex;justify-content: space-between;">
                    <div class="title"><strong>Meus Posts</strong></div>
                    <a href="{{ route('post.create')}}">
                      <button class="btn btn-success" style="width: 90px;padding: 10px 0;"><i class="fas fa-plus-circle" style="margin-right: 5px;"></i>Novo</button>
                    </a>
                  </div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <!-- <th>Id</th> -->
                          <th>Título</th>
                          <th>Texto</th>
                          <th>Categorias</th>
                          <th>Imagem</th>
                          <th>Autor</th>
                          <th colspan="3">Ações</th>
                        </tr>
                      </thead>

                      <tbody>
                        
                        @foreach($posts as $post)

                          <tr>
                            <!-- <th scope="row">{{$post->id}}</th> -->
                            <td style="padding: 10px;">{{ substr($post->title, 0, 50) }}{{ strlen($post->title) > 50 ? " ..." : "" }}</td>
                            
                            <td style="padding: 10px 7px;">
                              {{substr(strip_tags($post->body), 0, 40) . '...'}}
                            
                            </td>
                         
                            <td style="padding: 10px;">@foreach($post->categories as $category) - {{$category->name}}@endforeach</td>
                            
                            <td style="width: 95px;"><img src="{{ $post->image }}" alt="" style="width: 100%;"></td>

                             <td style="width: 50px;"><img src="{{ $post->author->image }}" alt="" style="width: 100%;"></td>

                            <td class="button">
                              <a href="{{route('post.show', ['id' => $post->id])}}" style="width: 100%;">
                                <button class="btn btn-primary btn-sm" style="width: 47px;padding: 7px 0;"><i class="far fa-eye" style="font-size: 18px;"></i></button>
                              </a>
                            </td>

                            <td class="button">
                              <a href="{{route('post.edit', ['id' => $post->id])}}" style="width: 100%;">
                                <button class="btn btn-warning btn-sm" style="width: 47px;padding: 7px 0;"><i class="fas fa-pencil-alt" style="font-size: 16px;color: #fff;"></i></button>
                              </a>
                            </td>

                            <td class="button">
                              <div>
                                <form action="{{route('post.delete', ['id' => $post->id])}}" method="POST" id="delete">
                                   {{ method_field('POST') }}
                                   @csrf
                                  <button type="input" class="btn btn-danger btn-sm" style="width: 47px;padding: 7px 0;" onclick="return myFunction();"><i class="fas fa-trash-alt" style="font-size: 15px;"></i>
                                  </button>
                                </form>           
                              </div>
                            </td>

                          </tr>

                        @endforeach
                      
                      </tbody>

                    </table>

                  </div>
                  
                </div>

                 {{ $posts->links() }}

              </div>

        </section>


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

        