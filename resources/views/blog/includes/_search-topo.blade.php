

<style type="text/css">
  .list-group-item:last-child {
    margin-bottom: -.1em!important;
  }

  .dropdown-menu {
    padding: 0;
  }
</style>

<div class="container posts-topo">
    <div class="row login">
        <div class="col-md-4" style="padding-top: 7px;"><a href="#">Todos os posts</a></div>
        <div class="col-md-4">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <ul style="padding-left: 0;width: 300px;">
                   @foreach($categories as $category)
                      <a href="{{ route('blog.search', ['id' => $category->id]) }}" id=""><li class="list-group-item list-group-item-action list-group-item-light">{{ $category->name }}</li></a>
                  @endforeach
                  
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