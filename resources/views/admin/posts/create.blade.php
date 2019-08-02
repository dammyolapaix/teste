

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
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Criar novo post</li>
          </ul>
        </div>

        <section class="no-padding-top">

          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Criar novo post</strong></div>
                  <div class="block-body">

                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">

                      @csrf
                      {{ method_field('POST') }}

                      <div class="form-group">
                        <label class="form-control-label">Titulo</label>
                        <input type="text" placeholder="Descreva o título do post" class="form-control" name="title" value="{{ old('title') }}" />
                      </div>

                      <div class="form-group">
                        <input type="hidden" class="form-control" name="slug" />
                      </div>     

                      <div class="form-group">       
                        <label class="form-control-label">Texto</label>
                        <main>
                          <textarea name="body" id="editor">{{ old('body') }}</textarea>
                        </main>
                      </div>

                      <div class="form-group">       
                        <label class="form-control-label">Categoria</label>
                        <div class="col-sm-8" style="padding-left: 0;">
                          <select name="category" class="form-control mb-3 mb-3">
                            <option selected="true" value="0" disabled="">Selecione uma categoria</option>
                            <option value="Atualidades">Atualidades</option>
                            <option value="Direito Bancário">Direito Bancário</option>
                            <option value="Direito Civil">Direito Civil</option>
                            <option value="Direito Criminal">Direito Criminal</option>
                            <option value="Direito Família">Direito de Família</option>
                            <option value="Direito Imobiliário">Direito Imobiliário</option>
                            <option value="Direito Médico">Direito Médico</option>
                            <option value="Direito Previdenciário">Direito Previdenciário</option>
                            <option value="Direito Trabalhista">Direito Trabalhista</option>
                            <option value="Direito Tributário">Direito Tributário</option>
                          </select>
                        </div>
                      </div>
                    
                      <div class="input-group" style="margin-bottom: 20px;">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"  id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" name="image" value="{{ old('image') }}" />
                            <label class="custom-file-label" for="validatedCustomFile">Selecione uma imagem</label>
                          </div>
                      </div>

                      <div class="form-group">       
                        <input type="submit" value="Postar" class="btn btn-primary" style="width: 100px;height: 50px;" />
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

   <!--  Ckeditor -->
    <script>
      ClassicEditor
        .create( document.querySelector( '#editor' ), {
          // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        } )
        .then( editor => {
          window.editor = editor;
        } )
        .catch( err => {
          console.error( err.stack );
        } );
    </script>


  @endsection


