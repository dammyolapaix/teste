
    @extends('layouts.main')

    @section('title','VLT Advogados | Notícias')

    @section('content')

    <style type="text/css">
      
      p {
        margin-bottom: 0;
      }

      p.card-text02 {
        max-width: 65%;
        text-align: right;
        font-size: 14px;
        margin-bottom: 57px!important;
      }

      .link-tags {
          color: #747373;
      }

      @media only screen and (max-width: 400px) {

         p.card-text02 {
          text-align: left;
          margin-top: 23px;
         }

      }

    </style>
      
        <!-- Pesquisa de posts por categoria e keywords-->
        <div class="container wrapper-all" id="wrapper-single">
            
            @include('blog/includes/_search-topo')

            <!-- Seçao Post -->
            <div class="container-fluid noticias-wrapper">
              <h5 class="link-topo">
                <a href="{{ route('index') }}" id="onde-esta01">Home / </a>
                <a href="{{ route('blog.index') }}" id="onde-esta02">Notícias</a>
              </h5>

              <div class="row noticias-content">
                   <div class="col-md-12" id="noticias-content">

                      <div class="round-logo">
                        <img src="{{ $post->author->image }}" alt="VLT Advogados">
                      </div>

                      <div class="data">
                          <h6>Por <span>{{ $post->author->name }}</span></h6>
                          <h6>{{date('j M, Y', strtotime($post->created_at))}}</h6>
                        </div>

                        <div class="post-wrapper">
                            <div class="post">
                              <div class="img-banner">
                                <img src="{{ $post->image }}" alt="VLT Advogados">
                              </div>
                              <div class="post-texto">
                                <h3>{{ $post->title }}</h3>
                                <p>{!! $post->body !!}</p>
                              </div>
                            </div>
                            <hr>

                            <p class="tags">@foreach($post->categories as $category) <i class="far fa-heart"></i> <a href="" class="link-tags">{{$category->name}}</a>@endforeach</p>

                        </div>

                        <!-- Your like button code -->
                        <div style="margin-left: 15%;max-width: 100px;margin-top: 20px;">
                          <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        </div>

                   </div><!-- end post -->

                </div><!-- end row -->

              </div><!-- end container -->

              <div class="clear"></div>

              <!-- Posts Recentes -->
              <div class="container-leia-mais">
                <h2>Posts Recentes</h2>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4" id="col-post-recente">
                          <div class="card card-leia-mais">
                            <div class="image-wrapper">
                                  <a href="{{route('blog.single', ['slug' => $post->slug])}}"><img src="{{ $post->image }}" alt="VLT Advogados"></a>
                             </div>

                             <div class="card-body" id="black">
                              <h5 class="card-title">{{ $post->title }}</h5>
                              <p class="card-text">{{substr(strip_tags($post->body), 0, 90) . '...'}}</p>
                              <div class="more-info">
                                <a href="{{route('blog.single', ['slug' => $post->slug])}}" class="btn btn-primary bt-leia">Leia mais</a>
                                <p class="card-text02"> <i class="far fa-heart"></i> {{date('j M, Y', strtotime($post->created_at))}}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                     @endforeach
                </div>
              
              </div><!-- end container -->

       </div><!-- end container geral -->

  @endsection

  
 