  

  @extends('layouts.appadm')
    
  @section('title','post | Dashboard')

  @section('content')

      <style type="text/css">
          
          td.button {
            width: 50px;
            padding: 12px 5px 10px;
          }

      </style>

      <div class="page-content">

        @if(Session::has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong>{{Session::get('success')}}
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
            <li class="breadcrumb-item active">Categorias</li>
          </ul>
        </div>

        <!-- Tabela -->
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="top-table" style="display: flex;justify-content: space-between;">
                    <div class="title"><strong>Todas as Categorias</strong></div>
                    <a href="{{ route('categoria.create') }}">
                      <button class="btn btn-success" style="width: 90px;padding: 10px 0;"><i class="fas fa-plus-circle" style="margin-right: 5px;"></i>Novo</button>
                    </a>
                  </div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nome da categoria</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th colspan="3">Ações</th>
                        </tr>
                      </thead>

                      <tbody>
                        
                        @foreach($categories as $category)

                          <tr>
                            <td style="padding: 10px;">{{ $category->name }}</td>

                            <td style="width: 50px;"></td>
                            <td style="width: 50px;"></td>
                            <td style="width: 50px;"></td>
                            <td style="width: 50px;"></td>

                            <td class="button">
                              <a href="{{route('categoria.edit', ['id' => $category->id])}}" style="width: 100%;">
                                <button class="btn btn-warning btn-sm" style="width: 47px;padding: 7px 0;"><i class="fas fa-pencil-alt" style="font-size: 16px;color: #fff;"></i></button>
                              </a>
                            </td>

                            <td class="button">
                              <div>
                                <form action="{{route('categoria.delete', ['id' => $category->id])}}" method="POST" id="delete">
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

              </div>

        </section>


        <!-- Script JS -->
        <script type="text/javascript">

          function myFunction() {
              if (confirm("Deseja realmente deletar essa categoria?")) {
                 return true;
              } else {
                return false;
              }
          }

      </script>

  @stop

        