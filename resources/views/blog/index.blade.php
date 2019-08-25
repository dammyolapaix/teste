
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
                                <img src="{{ $post->author->image }}" alt="VLT Advogados" style="border-radius: 50%;">
                              </div>
                              <div class="data">
                                  <h6>Por <span style="color: #008fd5;font-weight: bold;">{{ $post->author->name }}</span></h6>
                                  <h6>{{date('j M, Y', strtotime($post->created_at))}}</h6>
                              </div>
                          </div>

                          <div class="image-wrapper" style="width: 100%;overflow: hidden;">
                                <a href="{{route('blog.single', ['slug' => $post->slug])}}"><img src="{{ $post->image }}" alt="VLT Advogados" style="width: 100%;"></a>
                           </div>
                          <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{substr(strip_tags($post->body), 0, 140) . '...'}}</p>
                            <div class="more-info">
                              <a href="{{route('blog.single', ['slug' => $post->slug])}}" class="btn btn-primary" style="position: absolute;bottom: 15px;">Leia mais</a>
                              <p class="card-text02">@foreach($post->categories as $category) <i class="far fa-heart"></i> <a href="#" class="link-tags">{{$category->name}}</a>@endforeach</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- end row -->
                  
                <div class="col-sm-6"v style="margin-left: 8%;">
                  
                </div>

              </div><!-- end container -->

              <div class="clear"></div>

       </div><!-- end container geral -->

  @endsection

  
 