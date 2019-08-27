
    @extends('layouts.main')

    @section('title','VLT Advogados | Notícias')

    @section('content')

    <style type="text/css">
      
      p.card-text02 {
        max-width: 65%;
        text-align: right;
        font-size: 13px;
        margin-bottom: 50px!important;
      }

      .link-tags {
          color: #747373;
      }


       @media only screen and (max-width: 400px) {

         p.card-text02 {
          text-align: left;
         }

         .card-body {
          min-height: 310px;
         }  

      }

    </style>
      
         <!-- Pesquisa de posts por categoria e keywords-->
        <div class="container wrapper-all">
            
            @include('blog/includes/_search-topo')
  
            <!-- Seçao Posts -->
            <div class="container-fluid noticias-wrapper">
              <h1>Notícias</h1>
              <hr>
              <div class="row noticias-content" id="noticias-geral">

                 @foreach($posts as $post)

                    <div class="col-md-4">
                        <div class="card">
                          <div class="author">
                              <div class="round-logo">
                                <img src="{{ $post->author->image }}" alt="VLT Advogados">
                              </div>
                              <div class="data">
                                  <h6>Por <span>{{ $post->author->name }}</span></h6>
                                  <h6>{{date('j M, Y', strtotime($post->created_at))}}</h6>
                              </div>
                          </div>

                          <div class="image-wrapper">
                                <a href="{{route('blog.single', ['slug' => $post->slug])}}"><img src="{{ $post->image }}" alt="VLT Advogados"></a>
                           </div>
                          <div class="card-body" id="black">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{substr(strip_tags($post->body), 0, 140) . '...'}}</p>
                            <div class="more-info">
                              <a href="{{route('blog.single', ['slug' => $post->slug])}}" class="btn btn-primary bt-leia">Leia mais</a>
                              <p class="card-text02"> <i class="far fa-heart"></i> {{date('j M, Y', strtotime($post->created_at))}}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- end row -->
                
              </div><!-- end container -->

              <div class="clear"></div>

              <div class="col-md-4" id="blog-links">
                  {{ $posts->links() }}
              </div>
              

       </div><!-- end container geral -->

  @endsection

  
 