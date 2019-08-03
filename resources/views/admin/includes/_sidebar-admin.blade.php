

<script src="https://kit.fontawesome.com/b59ac68c80.js"></script>

  <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
              
            <div class="avatar"><img src="{{ $currentUser->image }}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h5">{{ $currentUser->name }}</h1>

              <p class="no-margin-bottom">Admin</p>
            </div>
          </div>
          
             <!-- Sidebar Navidation Menus--><span class="heading">Navegação</span>
             <ul class="list-unstyled">
              <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}"><i class="fas fa-blog"></i>Posts</a>
              </li>
              <li class="{{ Request::is('admin/create') ? 'active' : '' }}">
                <a href="{{ route('admin.create') }}"><i class="fas fa-file"></i>Novo post</a>
              </li>
              <li class="{{ Request::is('admin/search') ? 'active' : '' }}">
                <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="fas fa-window-restore"></i>Tags 
                </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                     <li><a href="{{ route('admin.search', ['id'=>1]) }}" id="01">Todos os posts</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>2]) }}">Atualidades</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>3]) }}">Direito Bancário</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>4]) }}">Direito Civil</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>5]) }}">Direito Criminal</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>6]) }}">Direito Família</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>7]) }}">Direito Imobiliário</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>8]) }}">Direito Médico</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>9]) }}">Direito Previdenciário</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>10]) }}">Direito Trabalhista</a></li>
                    <li><a href="{{ route('admin.search', ['id'=>11]) }}">Direito Tributário</a></li>
                  </ul>
              </li>
           
              <li class="teste">
                <a href="{{ route('user.index', ['id'=>$currentUser->id]) }}"><i class="fas fa-user"></i>Meu perfil</a>
              </li>
            </ul>
        </nav>
       
        <!-- Sidebar Navigation end-->