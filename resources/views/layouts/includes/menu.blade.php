<!-- Main Menu -->
<nav class="main-menu navbar visible-lg visible-md" data-sticky-header="true">
    <h2 class="hidden">Main Navigation</h2>

    <div class="container">
        <div class="row">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="main-menu-navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">

                  <li class="color-theme active">
                      <a href="{{ url('/') }}">Inicio <span class="nav-line"></span></a>
                  </li>

                    @foreach(\App\Http\Controllers\HomeController::categorias() as $categoria)
                        <li class="dropdown color-2">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown">{{ $categoria->nome }}<span class="nav-line"></span></a>
                            <ul class="dropdown-menu animated fadeInLeft">
                              @foreach($categoria->paginas as $pagina)
                                <li><a href="{{ route('pagina_exibir', ['id' => $pagina->id, 'titulo' => str_slug($pagina->titulo)]) }}">{{ $pagina->titulo }}</a></li>
                              @endforeach
                            </ul>
                        </li>
                    @endforeach

                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>

</nav>


<!-- Mobile Menu (Pushy Menu) -->
<nav class="mobile-menu pushy pushy-left  animated fadeInLeft">
    <h2 class="hidden">Mobile Navigation</h2>

    <div class="close-button"><i class="icon-close"></i>Close</div>

    <ul class="menu-block">
      <li class="color-theme active">
          <a href="{{ url('/') }}">Inicio <span class="nav-line"></span></a>
      </li>

        @foreach(\App\Http\Controllers\HomeController::categorias() as $categoria)
            <li class="dropdown color-2">
                <a href="#" class="dropdown-toggle" data-hover="dropdown">{{ $categoria->nome }}<span class="nav-line"></span></a>
                <ul class="dropdown-menu animated fadeInLeft">
                  @foreach($categoria->paginas as $pagina)
                    <li><a href="{{ route('pagina_exibir', ['id' => $pagina->id, 'titulo' => str_slug($pagina->titulo)]) }}">{{ $pagina->titulo }}</a></li>
                  @endforeach
                </ul>
            </li>
        @endforeach

    </ul>

    <ul class="menu-block">

        <li class="active color-theme"><a href="#">Home <span class="nav-line"></span></a>
            <ul class="dropdown-menu animated fadeInLeft">
                <li><a href="#">Right Sidebar (Default)</a></li>
                <li><a href="#">Left Sidebar</a></li>
                <li><a href="#">Full Width</a></li>
            </ul>
        </li>

        <li class="color-theme"><a href="#">Menu Item <span class="nav-line"></span></a></li>

        <li class="dropdown color-theme">
            <a href="#" class="dropdown-toggle">Dropdown Menu<span class="nav-line"></span></a>

            <ul class="dropdown-menu animated fadeInLeft">
                <li class="dropdown-submenu">
                    <a href="#">Sub Menu</a>

                    <ul class="dropdown-menu animated fadeInLeft">
                        <li><a href="#">Style 1</a></li>
                        <li><a href="#">Style 2</a></li>
                        <li><a href="#">Style 3</a></li>
                    </ul>
                </li>

                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">One more link</a></li>
            </ul>
        </li>
    </ul>

</nav>
