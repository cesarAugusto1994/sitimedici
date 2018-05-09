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
              @foreach($galerias as $galeria)
                  <a href="{{ route('galeria_item_index', ['id' => $galeria->id]) }}">{{ $galeria->titulo }}</a>
                  <small><i class="fa fa-clock"></i> {{ $galeria->created_at->format('d/m/Y') }}</small>
                  <hr/>
              @endforeach
        </div>

        <div class="text-center">{{ $galerias->links() }}</div>

    </div>
</aside>

@endsection
