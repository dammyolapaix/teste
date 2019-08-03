  

  @extends('layouts.appadm')
    
  @section('title','Admin | Dashboard')

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
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Meu Perfil</li>
          </ul>
        </div>

        <!-- Tabela -->
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="top-table" style="display: flex;justify-content: space-between;">
                    <div class="title"><strong>Meu Perfil</strong></div>
                  </div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Imagem</th>
                          <th colspan="2">Ações</th>
                        </tr>
                      </thead>

                      <tbody>

                          <tr>
                        
                            <td style="padding: 10px;">{{ $user->name }}</td> 
                            <td style="padding: 10px 7px;">{{ $user->email }}</td>
                            <td style="width: 50px;"><img src="{{ $user->image }}" alt="" style="width: 80%;"></td>

                            <td class="button">
                              <a href="{{route('user.show', ['id' => $user->id])}}" style="width: 100%;">
                                <button class="btn btn-primary btn-sm" style="width: 50px;padding: 5px 0;"><i class="far fa-eye" style="font-size: 18px;"></i></button>
                              </a>
                            </td>

                             <td class="button">
                              <a href="{{route('user.edit', ['id' => $user->id])}}" style="width: 100%;">
                                <button class="btn btn-warning btn-sm" style="width: 50px;padding: 5px 0;margin-left: -90px;"><i class="fas fa-pencil-alt" style="font-size: 16px;color: #fff;"></i></button>
                              </a>
                            </td>

                          </tr>
                      
                      </tbody>

                    </table>

                  </div>
                  
                </div>

              </div>

        </section>

  @stop

        