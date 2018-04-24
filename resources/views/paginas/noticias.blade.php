@extends('layouts.layout')

@section('pagina', 'Noticias')

@section('content')

<div class="row content_container"><section id="aq-block-3" class="aq-block aq-block-aq_viceversa_block col-md-12 cat-widget wdg-cat-opposite clearfix aq-first clearfix"><div class="widget-title">
  <h3><a href="#" title="">Noticias</a></h3><div class="sep-widget"></div></div>
    <style>
        #aq-template-wrapper-50 #aq-block-3.wdg-cat-opposite [class^="color-"] .btn-srp,
        #aq-template-wrapper-50 #aq-block-3.wdg-cat-opposite [class*="color-"] .btn-srp {
            background-color: #cc0044 !important;
        }

        #aq-template-wrapper-50 #aq-block-3.wdg-cat-opposite [class^="color-"] .btn-srp > a,
        #aq-template-wrapper-50 #aq-block-3.wdg-cat-opposite [class*="color-"] .btn-srp > a {
            color: #FFF !important;
        }
    </style>
        <div class="widget-content color-theme clearfix"><div>

        @foreach($noticias as $noticia)
            <article class="odd-item {{ $loop->iteration % 2 == 0 ? 'odd-item' : 'even-item' }} clearfix">

                <figure class="sec-image">
                    <a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'titulo' => str_slug($noticia->titulo)]) }}" class="post-thumbnail">
                        <img src="{{ $noticia->imagem_1 }}" alt="How to make a Seafood with shrimps">
                    </a>

                    <div class="bottom-bar">
                        <span class="btn-srp"><a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'titulo' => str_slug($noticia->titulo)]) }}">Saber mais...</a></span>
                    </div>

                </figure>

                <div class="sec-desc">
                    <header class="title">
                        <h4 class="post-title"><a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'titulo' => str_slug($noticia->titulo)]) }}">{{ $noticia->titulo }}</a></h4>
                    </header>

                    <div class="meta-info">
                        <span class="author"><i class="icon-user3"></i>
                            <a href="#" title="View serpentsoft's posts">{{ $noticia->user->name }}</a></span>
                        <span class="date-time"><i class="icon-alarm2"></i>{{ $noticia->created_at->format('d M Y, H:i') }}</span>                        </div>

                    <div class="post-desc">
                        Mag4u &nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum blandit sem vitae posuere. Donec metus purus, dignissim et hendrerit vel, vestibulum a lectus. Vivamus porta commodo tristique. Sed non magna porta arcu sodales sollicitudin in vel turpis. Aenean porttitor nisi id dolor…                    </div>

                </div>

            </article>
            <div class="divider"></div>
        @endforeach

          <div class="text-center">{{ $noticias->links() }}</div>

        </div>
      </div><!-- widget-content -->

    </section>
  </div>


@endsection
