

  @extends('layouts.appadm')
    
  @section('title','Admin | Dashboard')

  @section('content')

        <style>
        .custom-file-label{
          position: absolute;
          top: 0;
          right: 0;
          left: 0;
          z-index: 1;
          height: 2.375rem;
          padding: 0.375rem 0.75rem;
          line-height: 1.5;
          color: #979a9f;
          background-color: transparent;
          border: 1px solid rgba(0, 40, 100, 0.12);
          border-radius: 3px;
          border: 1px solid #444951;
        }
        .custom-file-label::after {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          z-index: 3;
          display: block;
          height: calc(2.375rem - 1px * 2);
          padding: 0.375rem 0.75rem;
          line-height: 1.5;
          color: #ffffff;
          content: "Enviar arquivo";
          background-color: #db6574;
          border-left: 1px solid rgba(0, 40, 100, 0.12);
          border-radius: 0 3px 3px 0;
        }

        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
          background: transparent;
        }

        .ck.ck-editor__editable_inline>:last-child {
          min-height: 200px;
        }

      </style>

      <div class="page-content">

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
         @endif

         <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Criar nova categoria</li>
          </ul>
        </div>

        <section class="no-padding-top">

          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Criar nova categoria</strong></div>
                  <div class="block-body">

                    <form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">

                      @csrf
                      {{ method_field('POST') }}

                      <div class="form-group">
                        <label class="form-control-label">Nome da categoria</label>
                        <input type="text" placeholder="Ex: Direito Bancário" class="form-control" name="name" value="{{ old('title') }}" />
                      </div>

                      <div class="form-group">       
                        <input type="submit" value="Salvar" class="btn btn-primary" style="width: 90px;padding: 10px 0;" />
                        <a href="{{ route('categoria.index') }}" class="btn btn-light" style="width: 90px;padding: 10px 0;">Cancelar</a>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
         
  @stop

 @section('scripts')

    <script>
      $('#validatedCustomFile').on('change',function(){
          //get the file name
          var fileName = $(this).val();
          //replace the "Choose a file" label
          $(this).next('.custom-file-label').html(fileName);
      })
    </script>


  @endsection


