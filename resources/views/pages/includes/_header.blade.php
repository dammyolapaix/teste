<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="author" content="VLT Advogados" />

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}" />
    <!-- Slick-theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    
    <title>@yield('title')</title>

     <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
   </script>

  </head>

  <body>


    <style type="text/css">
    
    .active {
        border-bottom: 2px solid #fff;
    }
   
  </style>

  	<nav class="navbar navbar-expand-lg navbar-light bg-light" id="topo">
      <div class="nav-wrapper">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/brand/logo02.png') }}" alt="" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars" style="font-size: 30px;color: #fff;"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="{{ Request::is('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">Sobre Nós</a>
            </li>
            <li class="{{ Request::is('profissionais') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('profissionais') }}">Profissionais</a>
            </li>

            <li class="nav-item dropdown {{ Request::is('direito_bancario') || Request::is('direito_civil') || Request::is('direito_criminal') || Request::is('direito_familia') || Request::is('direito_imobiliario') || Request::is('direito_medico') || Request::is('direito_previdenciario') || Request::is('direito_trabalhista') || Request::is('direito_tributario') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Áreas de Atuação
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('direitobancario') }}">Direito Bancário</a>
                    <a class="dropdown-item" href="{{ route('direitocivil') }}">Direito Civil</a>
                    <a class="dropdown-item" href="{{ route('direitocriminal') }}">Direito Criminal</a>
                    <a class="dropdown-item" href="{{ route('direitofamilia') }}">Direito de Família e Sucessões</a>
                    <a class="dropdown-item" href="{{ route('direitoimobiliario') }}">Direito Imobiliário</a>
                    <a class="dropdown-item" href="{{ route('direitomedico') }}">Direito Médico</a>
                    <a class="dropdown-item" href="{{ route('direitoprevidenciario') }}">Direito Previdenciário</a>
                    <a class="dropdown-item" href="{{ route('direitotrabalhista') }}">Direito Trabalhista</a>
                    <a class="dropdown-item" href="{{ route('direitotributario') }}">Direito Tributário</a>               
              </div>
            </li>
            <li class="{{ Request::is('posts') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blog.index') }}">Notícias</a>
            </li>
            <li class="{{ Request::is('contato') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('contato') }}">Contato</a>
            </li>
          </ul>
        </div>
    </div> <!-- end nav wrapper -->
</nav>

