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
                                @if($pagina->is_link)
                                    <li><a href="{{ $pagina->url }}">{{ $pagina->titulo }}</a></li>
                                @else
                                    <li><a href="{{ route('pagina_exibir', ['id' => $pagina->id, 'titulo' => str_slug($pagina->titulo)]) }}">{{ $pagina->titulo }}</a></li>
                                @endif
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

</nav>
