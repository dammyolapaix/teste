
    @extends('layouts.main')

    @section('title','VLT Advogados | Notícias')

    @section('content')
      
         <!-- Pesquisa de posts por categoria e keywords-->
        <div class="container wrapper-all" style="max-width: 1920px;">
            
            @include('blog/includes/_search-topo')
  

            <!-- Seçao Posts -->
            <div class="container-fluid noticias-wrapper" style="background:#f9f9f9;width: 100%;">
              <h1 style="padding-top: 25px;">Notícias</h1>
              <hr style="max-width: 1160px;">
              <div class="row noticias-content">

                 @foreach($posts as $post)
                 
                    <div class="col-md-4">
                        <div class="card" style="margin-bottom: 25px;min-height: 540px;max-height: 540px;">
                          <div class="author" style="padding: 15px 0 15px 3%;">
                              <div class="round-logo">
                                <img src="{{ $user->image }}" alt="VLT Advogados" style="border-radius: 50%;">
                              </div>
                              <div class="data">
                                  <h6 style="font-weight: bold;">VLT Advogados</h6>
                                  <h6>{{date('j M, Y', strtotime($post->created_at))}}</h6>
                              </div>
                          </div>

                          <div class="image-wrapper" style="width: 100%;overflow: hidden;">
                                <img src="{{ $post->image }}" alt="VLT Advogados" style="width: 100%;">
                           </div>
                          <div class="card-body" style="min-height: 290px;">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{substr(strip_tags($post->body), 0, 140) . '...'}}</p>
                            <div class="more-info">
                              <a href="{{route('blog.single', ['slug' => $post->slug])}}" class="btn btn-primary" style="position: absolute;bottom: 15px;">Leia mais</a>
                              <p class="card-text"><i class="far fa-heart"></i><i>{{ $post->category }}</i></p>
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- end row -->
                  
                <div class="col-sm-6"v style="margin-left: 8%;">
                   {{ $posts->links() }}
                </div>

              </div><!-- end container -->

              <div class="clear"></div>

       </div><!-- end container geral -->



  @endsection

  
 