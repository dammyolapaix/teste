
    @extends('layouts.main')

    @section('title','VLT Advogados | Notícias')

    @section('content')

    <style type="text/css">
      
      p {
        margin-bottom: 0;
      }

    </style>
      
        <!-- Pesquisa de posts por categoria e keywords-->
        <div class="container wrapper-all" id="wrapper-single" style="max-width: 1920px;">
            
            @include('blog/includes/_search-topo')

            <!-- Seçao Post -->
            <div class="container-fluid noticias-wrapper" style="background:#f9f9f9;width: 100%;">
              <h5 style="padding-top: 20px;">
                <a href="{{ route('index') }}" style="color: #949494; margin-left: 6%;font-size: 14px;" class="onde-esta">Home / </a>
                <a href="{{ route('blog.index') }}" style="color: #949494; font-size: 14px;" class="onde-esta">Notícias</a>
              </h5>

              <div class="row noticias-content">
                   <div class="col-md-12" style="background: #fff;padding: 25px 0;">
                      <div class="round-logo"></div>
                      <div class="data">
                          <h6>VLT Advogados</h6>
                          <h6>Jun/2019</h6>
                        </div>

                        <div class="post-wrapper" style="margin: 25px 0 20px;">
                            <div class="post">
                              <div class="img-banner">
                                <img src="{{ $post->image }}" alt="VLT Advogados">
                              </div>
                              <div class="post-texto" style="max-width: 860px;margin: 0 auto;">
                                <h3 style="font-weight: 400;text-transform: uppercase;">{{ $post->title }}</h3>
                                <p>{!! $post->body !!}</p>
                              </div>
                            </div>
                            <hr style="padding: 5px 0;margin-top: 35px;">
                        </div>
                   </div><!-- end post -->

                </div><!-- end row -->

              </div><!-- end container -->

              <div class="clear"></div>

              <div class="container-leia-mais" style="background:#f9f9f9;width: 100%;">
                <h2 style="color: #171717;">Posts Recentes</h2>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4">
                          <div class="card" style="border-top: 10px solid #f5a623;min-height: 480px;max-height: 480px;">
                            <div class="image-wrapper" style="width: 100%;height: 200px;overflow: hidden;">
                                  <img src="{{ $post->image }}" alt="VLT Advogados" style="width: 100%;height: 100%;">
                             </div>

                             <div class="card-body">
                              <h5 class="card-title">{{ $post->title }}</h5>
                              <p class="card-text">{{substr(strip_tags($post->body), 0, 90) . '...'}}</p>
                              <div class="more-info">
                                <a href="{{route('blog.single', ['slug' => $post->slug])}}" class="btn btn-primary" style="position: absolute;bottom: 15px;">Leia mais</a>
                                <p class="card-text"><i class="far fa-heart"></i><i>{{ $post->category }}</i></p>
                              </div>
                            </div>
                          </div>
                        </div>
                     @endforeach
                </div>
              </div><!-- end container -->

              <div class="container">
                
              </div>

       </div><!-- end container geral -->

  @endsection

  
 