@extends('layouts.layout')

@section('pagina', 'Galeria de Fotos')

@section('content')

<aside class="widget animated fast fadeIn" data-showonscroll="true" data-animation="fadeIn">
    <div class="widget-title clearfix">
        <h1 itemprop="headline">Galeria de Fotos</h1>

        <div class="divider"></div>
        <div class="sep-widget"></div>
    </div>

    <div class="widget-content clearfix">
        <div class="wdg-news-in-pictures clearfix">
            <ul class="clearfix">

              @foreach($galeria as $foto)
                <li class="tooltip_item post-thumbnail" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $foto->titulo }}">
                    <a data-lightbox="example-set" href="/{{ $foto->link }}" data-title="{{ $foto->titulo }}">
                        <img src="/{{ $foto->link }}" alt="{{ $loop->index }}">
                    </a>
                </li>
              @endforeach
            </ul>
        </div>

        <div class="text-center">{{ $galeria->links() }}</div>

    </div>
</aside>

@endsection
