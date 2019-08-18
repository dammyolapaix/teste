  

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
          content: "Enviar outro arquivo";
          background-color: #db6574;
          border-left: 1px solid rgba(0, 40, 100, 0.12);
          border-radius: 0 3px 3px 0;
        }

        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
          background: transparent;
        }
        
        .select2-container--default .select2-search--inline .select2-search__field {
          width: 100%!important;
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
            <li class="breadcrumb-item active">Editar o post</li>
          </ul>
        </div>

        <section class="no-padding-top">

          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Editar o post</strong></div>
                  <div class="block-body">

                    <form action="{{route('post.update', ['id' => $post->id])}}" method="POST" enctype="multipart/form-data">

                      @csrf
                      {{ method_field('POST') }}

                      <div class="form-group">
                        <label class="form-control-label">Titulo</label>
                        <input type="text" value="{{ $post->title }}" class="form-control" name="title" />
                      </div>

                      <div class="form-group">
                        <input type="hidden" class="form-control" name="slug" />
                      </div>

                      <div class="form-group">       
                        <label class="form-control-label">Texto</label>
                        <main>
                          <textarea name="body" id="editor" value="{{ $post->body }}">{{ $post->body }}</textarea>
                        </main>
                      </div>

                      <div class="form-group">       
                        <label class="form-control-label">Selecione a Categoria</label>
                        <div class="col-sm-8" style="padding-left: 0;">
                         <select class="js-example-basic-multiple-limit js-states form-control select2-hidden-accessible" multiple="" data-select2-id="3" tabindex="-1" aria-hidden="true" name="categoria[]" style="width: 100%;" >
                           @foreach($categories as $category)
                               <option value="{{ $category->id }}">{{ $category->name }}</option>
                           @endforeach
                          </select>
                        </div>
                      </div>
                      
                      <label class="form-control-label">Imagem</label><br />
                       <div class="input-group" style="margin-bottom: 20px;">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" name="image" />
                             @php
                                  $image = $post->image;
                                  $image = explode("/", $image);
                                  $image = end($image);
                              @endphp 
                            <label class="custom-file-label" for="validatedCustomFile">{{ $image }}</label>
                          </div>
                      </div>

                      <div class="form-group">       
                        <input type="submit" value="Salvar" class="btn btn-primary"  style="width: 90px;padding: 10px 0;"/>
                        <a href="{{ route('post.index') }}" class="btn btn-light" style="width: 90px;padding: 10px 0;margin-left: 4px;">Cancelar</a>
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

    <!--  Multi select-->
     <script>
       
          $(".js-example-basic-multiple-limit").select2({
            maximumSelectionLength: 3
          });
    </script> 

@endsection

        