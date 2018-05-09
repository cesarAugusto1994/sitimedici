@extends('layouts.layout')

@section('pagina', $noticia->titulo)

@section('content')

  <h2 itemprop="headline">{{ $noticia->titulo }}</h2>

  <hr/>

  @if($noticia->subtitulo)
      <q>{{ $noticia->subtitulo }}</q>
  @endif

  <div class="divider"></div>

  {!! $noticia->conteudo_html !!}

  <div class="divider"></div>
  <hr/>

@endsection
