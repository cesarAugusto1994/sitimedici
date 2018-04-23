@extends('layouts.layout')

@section('content')

  <h2>Resultado</h2>
  <p>Parametro de pesquisa: {{ $parametro }}</p>
  <hr/>

  <section id="divCatScrollBox_1" class="cat-widget wdg-cat-scrollbox cat-scroll-box clearfix" data-showonscroll="true" data-animation="fadeIn">

      <div class="widget-title">
          <h3><a>Noticias</a></h3>

          <div class="sep-widget"></div>
      </div>

      <div class="widget-content color-theme clearfix">
          <div>
              <ul class="nav-arrows list-inline">
                  <li><a href="#" class="backward"><i class="icon-arrow-left6"></i></a></li>
                  <li><a href="#" class="forward"><i class="icon-arrow-right6"></i></a></li>
              </ul>

              <div class="scroll-box">
                @foreach($noticias as $noticia)
                  <div class="post-item">
                      <article class="post-box clearfix">
                          <a class="post-thumbnail">
                              <img src="{{ $noticia->imagem_1 }}" data-src="{{ $noticia->imagem_1 }}" /></a>

                          <header class="title-bar">
                              <h4 class="post-title"><a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'nome' => $noticia->titulo]) }}">{{ $noticia->titulo }}</a></h4>

                              <div class="meta-info">
                                  <span class="date"><i class="icon-calendar"></i>{{ $noticia->created_at->format('d M Y') }}</span>
                              </div>

                          </header>

                          <div class="bottom-bar">
                              <span class="btn-srp"><a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'nome' => $noticia->titulo]) }}">Leia mais...</a></span>

                          </div>
                      </article>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
  </section>

  <section id="divCatScrollBox_1" class="cat-widget wdg-cat-scrollbox cat-scroll-box clearfix" data-showonscroll="true" data-animation="fadeIn">

      <div class="widget-title">
          <h3><a href="#">Eventos</a></h3>

          <div class="sep-widget"></div>
      </div>

      <div class="widget-content color-theme clearfix">
          <div>
              <ul class="nav-arrows list-inline">
                  <li><a href="#" class="backward"><i class="icon-arrow-left6"></i></a></li>
                  <li><a href="#" class="forward"><i class="icon-arrow-right6"></i></a></li>
              </ul>

              <div class="scroll-box">
                @foreach(\App\Http\Controllers\HomeController::eventos() as $evento)
                  <div class="post-item">
                      <article class="post-box clearfix">
                          <a class="post-thumbnail">
                              <img src="{{ $evento->imagem }}" data-src="{{ $evento->imagem }}" /></a>

                          <header class="title-bar">
                              <h4 class="post-title"><a href="{{ route('evento_exibir', ['id' => $evento->id, 'nome' => $evento->nome]) }}">{{ $evento->nome }}</a></h4>

                              <div class="meta-info">
                                  <span class="date"><i class="icon-calendar"></i>{{ $evento->data->format('d M Y') }}</span>
                              </div>

                          </header>

                          <div class="bottom-bar">
                              <span class="btn-srp"><a href="{{ route('evento_exibir', ['id' => $evento->id, 'nome' => $evento->nome]) }}">Leia mais...</a></span>

                          </div>
                      </article>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
  </section>

@endsection
