
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/darkadmin/vendor/bootstrap/css/bootstrap.min.css') }}" />
  
    <!-- CSS--> 
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" />
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet" />
    <!-- Favicon--> 
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
   
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Fechar <i class="fas fa-times"></i></div>

           <!--  // Search form -->
            <form id="searchForm" action="{{ route('post.search02') }}">
              <div class="form-group">
                <input type="search" name="search" placeholder="Digite o que você está procurando...">
                <button type="submit" class="submit">Buscar</button>
              </div>
            </form>

          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="#" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fas fa-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="fas fa-search"></i></a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">1</span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="{{ asset('img/avatar-3.jpg') }}" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   <strong class="d-block">VLT Advogados</strong><span class="d-block">Bem-vindo ao seu sistema. Poste algo incrível!</span><small class="date d-block">Admin</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">

                  </a><a href="#" class="dropdown-item text-center message"> <strong>Logout <i class="fa fa-angle-right"></i></strong></a></div>
            </div>

            <!-- Log out -->
            <div class="list-inline-item logout"> 

              <div>
                <a id="logout" href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span class="d-none d-sm-inline">Logout </span><i class="fas fa-door-open"></i></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                </form>
            </div>

          </div>
        </div>
      </nav>
    </header>