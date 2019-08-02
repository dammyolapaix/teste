

<div class="container posts-topo">
    <div class="row login">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <ul style="padding-left: 0;width: 300px;">
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>1]) }}" id="01">Todos os posts</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>2]) }}">Atualidades</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>3]) }}">Direito Bancário</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>4]) }}">Direito Civil</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>5]) }}">Direito Criminal</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>6]) }}">Direito Família</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>7]) }}">Direito Imobiliário</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>8]) }}">Direito Médico</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>9]) }}">Direito Previdenciário</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>10]) }}">Direito Trabalhista</a></li>
                  <li class="list-group-item list-group-item-action list-group-item-light"><a href="{{ route('blog.search', ['id'=>11]) }}">Direito Tributário</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>

        <div class="col-md-4">
            <form action="#" method="">
              <input type="text" name="search" placeholder="pesquisar..." class="form-control" id="search"  style="border: 1px solid #8b0000;" />
              <button type="submit" name="pesquisar" class="btn btn-outline-secondary"><i class="fas fa-search" style="font-size: 15px;"></i></button>
            </form>
        </div>
    </div><!-- end row -->
</div><!-- end container -->