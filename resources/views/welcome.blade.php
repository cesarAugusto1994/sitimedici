@extends('layouts.layout-home')

@section('content')

<div class="col-md-9">

    <!-- Horizontal Category (2 Columns) -->
    <section class="cat-widget wdg-cat-horiz-2col-sm clearfix">

        <div class="widget-title">
            <h3><a href="#">Acontecimentos</a></h3>
            <span class="sub-title">Fique informado</span>

            <div class="sep-widget"></div>
        </div>

        <div class="widget-content color-theme clearfix">
            <div>
                @if(\App\Http\Controllers\HomeController::getNoticiaPrincipal())
                <article class="first-post clearfix" data-showonscroll="true" data-animation="fadeIn">
                    <figure class="sec-image">

                        <a class="post-thumbnail">
                            <img src="{{ \App\Http\Controllers\HomeController::getNoticiaPrincipal()->imagem_1 }}" data-src="{{ \App\Http\Controllers\HomeController::getNoticiaPrincipal()->imagem_1 }}"/></a>

                        <div class="bottom-bar">
                            <span class="btn-srp"><a href="{{ route('noticia_exibir', ['id' => \App\Http\Controllers\HomeController::getNoticiaPrincipal()->id, 'titulo' => str_slug(\App\Http\Controllers\HomeController::getNoticiaPrincipal()->titulo)]) }}">Leia mais...</a></span>
                        </div>

                    </figure>

                    <div class="sec-desc">

                        <header class="title">
                            <h4 class="post-title"><a href="{{ route('noticia_exibir', ['id' => \App\Http\Controllers\HomeController::getNoticiaPrincipal()->id, 'titulo' => str_slug(\App\Http\Controllers\HomeController::getNoticiaPrincipal()->titulo)]) }}">{{ \App\Http\Controllers\HomeController::getNoticiaPrincipal()->titulo }}</a></h4>
                        </header>

                        <div class="meta-info">
                            <span class="author"><i class="icon-user3"></i><a href="#">{{ \App\Http\Controllers\HomeController::getNoticiaPrincipal()->user->name }}</a></span>
                            <span class="date-time"><i class="icon-alarm2"></i>{{ \App\Http\Controllers\HomeController::getNoticiaPrincipal()->created_at->format('d M Y, H:i') }}</span>
                        </div>


                        <div class="post-desc">
                            <p>{{ substr(strip_tags(\App\Http\Controllers\HomeController::getNoticiaPrincipal()->conteudo_html), 0, 250) }}...</p>
                        </div>

                    </div>
                </article>
                @endif

                <div class="related-posts">
                    <div class="posts clearfix">

                        @foreach(\App\Http\Controllers\HomeController::listaNoticias() as $noticia)

                            @if($loop->index % 2 == 0)

                            <div class="post-item odd-item" data-showonscroll="true" data-animation="fadeIn">
                                <article class="post-box clearfix">
                                    <figure class="wdg-col-4 sec-image">

                                        <div class="mask-background white"></div>

                                        <div class="post-type anim"><i class="icon-location"></i></div>

                                        <div class="post-thumbnail border-radius-2px">
                                            <img class="border-radius-2px" src="{{ $noticia->imagem_1 }}" data-src="{{ $noticia->imagem_1 }}" />
                                        </div>

                                        <a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'titulo' => str_slug($noticia->titulo)]) }}" class="mais..."></a>
                                    </figure>

                                    <header class="wdg-col-8 sec-title">

                                        <h5><a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'titulo' => str_slug($noticia->titulo)]) }}" title="">{{ substr($noticia->titulo, 0, 50) }}</a></h5>

                                        <div class="meta-info">

                                            <span class="author"><i class="icon-user3"></i><a href="#">{{ $noticia->user->name }}</a></span>
                                            <span class="date"><i class="icon-alarm2"></i>{{ $noticia->created_at->format('d M Y, H:i') }}</span>

                                        </div>

                                    </header>
                                </article>
                            </div>

                            @else

                            <div class="post-item even-item" data-showonscroll="true" data-animation="fadeIn">
                                <article class="post-box clearfix">
                                    <figure class="wdg-col-4 sec-image">

                                        <div class="mask-background white"></div>

                                        <div class="post-type anim"><i class="icon-feed"></i></div>

                                        <div class="post-thumbnail border-radius-2px">
                                            <img class="border-radius-2px" src="{{ $noticia->imagem_1 }}" data-src="{{ $noticia->imagem_1 }}"  @if($noticia->imagem_1) src="{{ $noticia->imagem_1 }}"  @endif />
                                        </div>

                                        <a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'titulo' => $noticia->titulo]) }}" class="mais..."></a>
                                    </figure>

                                    <header class="wdg-col-8 sec-title">

                                        <h5><a href="{{ route('noticia_exibir', ['id' => $noticia->id, 'titulo' => $noticia->titulo]) }}" title="">{{ substr($noticia->titulo, 0, 50) }}</a></h5>

                                        <div class="meta-info">

                                            <span class="author"><i class="icon-user3"></i><a href="#">{{ $noticia->user->name }}</a></span>
                                            <span class="date"><i class="icon-alarm2"></i>{{ $noticia->created_at->format('d M Y, H:i') }}</span>

                                        </div>

                                    </header>
                                </article>
                            </div>

                            <div class="divider"></div>


                            @endif

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slides Category -->
    <section id="divCatScrollBox_1" class="cat-widget wdg-cat-scrollbox cat-scroll-box clearfix" data-showonscroll="true" data-animation="fadeIn">

        <div class="widget-title">
            <h3><a href="#">Eventos</a></h3>
            <span class="sub-title">Eventos</span>

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
                                <h4 class="post-title"><a href="#">{{ $evento->nome }}</a></h4>

                                <div class="meta-info">
                                    <span class="date"><i class="icon-calendar"></i>{{ $evento->data->format('d M Y') }}</span>
                                </div>

                            </header>

                            <div class="bottom-bar">
                                <span class="btn-srp"><a href="#">Leia mais...</a></span>

                            </div>
                        </article>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </section>

</div>

<section class="col-md-3">
    <h2 class="hidden">Sidebar</h2>

    <aside class="widget" data-showonscroll="true" data-animation="fadeIn">
        <div class="widget-title clearfix">
            <h3>Serviços</h3>
            <div class="sep-widget"></div>
        </div>

        <div class="widget-content clearfix">
            <div class="wdg-classic-posts color-theme clearfix">
                <ul class="list-unstyled ">

                  @foreach(\App\Http\Controllers\HomeController::servicos() as $servico)

                    @if($servico->is_link)
                    <li class="post-item">
                        <article class="post-box clearfix">
                            <div class="wdg-col-8 sec-title">
                                <h5><a target="_blank" href="{{ $servico->url }}" title="">{{ $servico->nome }}</a></h5>
                            </div>
                        </article>
                    </li>
                    @elseif($servico->is_file)
                    <li class="post-item">
                        <article class="post-box clearfix">
                            <div class="wdg-col-8 sec-title">
                                <h5><a target="_blank" href="{{ $servico->url }}" title="">{{ $servico->nome }}</a></h5>
                            </div>
                        </article>
                    </li>
                    @else
                    <li class="post-item">
                        <article class="post-box clearfix">
                            <div class="wdg-col-8 sec-title">
                                <h5><a target="_blank" href="{{ $servico->url ? $servico->url : '#' }}" title="">{{ $servico->nome }}</a></h5>
                            </div>
                        </article>
                    </li>
                    @endif

                  @endforeach


                </ul>
            </div>
        </div>
    </aside>

    <aside id="divWidgetSlides_1" class="widget wdg-scroll-box" data-showonscroll="true" data-animation="fadeIn">
        <div class="widget-title clearfix">
            <h3>Outras Noticias</h3>
            <div class="sep-widget"></div>
        </div>

        <div class="widget-content clearfix">
            <div>
                <ul class="nav-arrows list-inline">
                    <li><a href="#" class="backward"><i class="icon-arrow-left6"></i></a></li>
                    <li><a href="#" class="forward"><i class="icon-arrow-right6"></i></a></li>
                </ul>

                <div class="scroll-box color-theme">

                    <div class="post-item">
                        <article class="post-box clearfix">
                            <a class="post-thumbnail">
                                <img src="images/inline.jpg" data-src="images/inline.jpg" /></a>

                            <div class="title-bar">
                                <h4 class="post-title"><a href="#">Imagens</a></h4>
                            </div>

                            <div class="bottom-bar">
                                <span class="btn-srp"><a href="#">visualizar...</a></span>
                            </div>
                        </article>
                    </div>

                    <div class="post-item">
                        <article class="post-box clearfix">
                            <a class="post-thumbnail">
                                <img src="" data-src="holder.js/308x210" /></a>

                            <div class="title-bar">
                                <h4 class="post-title"><a href="#">Outro Post</a></h4>
                            </div>

                            <div class="bottom-bar">
                                <span class="btn-srp"><a href="#">Leia mais...</a></span>

                            </div>
                        </article>
                    </div>

                    <div class="post-item">
                        <article class="post-box clearfix">
                            <a class="post-thumbnail">
                                <img src="" data-src="holder.js/308x210" /></a>

                            <div class="title-bar">
                                <h4 class="post-title"><a href="#">Mais um post</a></h4>
                            </div>

                            <div class="bottom-bar">
                                <span class="btn-srp"><a href="#">Leia mais...</a></span>



                            </div>
                        </article>
                    </div>

                    <div class="post-item">
                        <article class="post-box clearfix">
                            <a class="post-thumbnail">
                                <img src="" data-src="holder.js/308x210" /></a>

                            <div class="title-bar">
                                <h4 class="post-title"><a href="#">Outro Post</a></h4>
                            </div>

                            <div class="bottom-bar">
                                <span class="btn-srp"><a href="#">Leia mais...</a></span>



                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </aside>

    <aside class="widget" data-showonscroll="true" data-animation="fadeIn">
        <div class="widget-title clearfix">
            <h3>Video</h3>
            <div class="sep-widget"></div>
        </div>

        <div class="widget-content clearfix">
            <div class="wdg-video clearfix">
                <!--<iframe itemprop="contentURL" class="youtube-player" type="text/html" width="100%" height="200" src="http://www.youtube.com/embed/P5_Msrdg3Hk?wmode=transparent&amp;wmode=opaque" allowfullscreen="" frameborder="0"></iframe>-->
                <img src="" data-src="holder.js/308x210" />
            </div>
        </div>
    </aside>

</section>

@endsection
