
    @extends('layouts.main')

    @section('title','Vlt Advogados | Escritório de Advocacia em Pouso Alegre')

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

      }

    </style>

      <!-- Slide Topo -->

        <section id="slide-topo">
          <div class="container-fluid" style="overflow: hidden;padding-right: 0; padding-left: 0;">
            <div class="row">
              <div class="col-md-12 banner-home" style="padding-right: 0; padding-left: 0;text-align: center;overflow: hidden;max-height: 460px;">
               
              </div>
            </div>
          </div>
        </section>

        <!--   ////////////////////////////////////////// -->

        <!-- Seçao Últimas Notícias -->

        <section id="ultimas-noticias">
        
            <div class="container">
              <h1>Últimas Notícias</h1>
              <div class="row-noticias">
                
                @foreach($posts as $post)
                    <div class="col-md-4">
                      <div class="card" style="border-top: 10px solid #d03f3f;min-height: 520px;max-height: 520px;">
                        <div class="image-wrapper" style="width: 100%;height: 200px;overflow: hidden;">
                              <a href="{{route('blog.single', ['slug' => $post->slug])}}"><img src="{{ $post->image }}" alt="VLT Advogados" style="width: 100%;"></a>
                         </div>
                        <div class="card-body" style="text-align: left;min-height: 290px;">
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

        </section><!-- end ultimas-noticias -->

        <div class="divisao"></div>

    <!--   ////////////////////////////////////////// -->

    <!-- Seçao Mídias Sociais -->

     <section id="social-media">
      
      <div class="container">
        
        <div class="row-media">
          <div class="col-media">
            <h1>Acompanhe nas mídias sociais</h1>
            <div class="media-face" id="media-face"></div>
          </div>

          <div class="col-media">
            <h1 class="withMargin">Entre em contato conosco</h1>
            <a href="{{ route('contato') }}"><div class="media-face" id="media-face02"></div></a>
          </div>
          
          <div class="col-media">
            <h1 class="withMargin">Cadastre-se e receba nossas notícias exclusivas</h1>

            <form action="#" method="POST">

                <input type="text" name="nome" class="form-control mb-4" placeholder="Nome*" />

                <input type="email" name="email" class="form-control mb-4" placeholder="E-mail*" />

                <input type="tel" name="whatsapp" class="form-control mb-4" placeholder="Whatsapp*" />

                <input type="text" name="cidade" class="form-control mb-4" placeholder="Cidade*" />

                <!-- Sign in button -->
                <button class="btn btn-unique" type="submit">Cadastrar</button>

            </form>
          </div>

        </div><!-- end row -->

      </div><!-- end container -->

     </section><!-- end social-media -->

 <!--   ////////////////////////////////////////// -->

  @endsection

 
 