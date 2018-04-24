@extends('layouts.layout')

@section('pagina', $noticia->titulo)

@section('content')

  <h1 itemprop="headline">{{ $noticia->titulo }}</h1>

  <div class="divider"></div>

  {!! $noticia->conteudo_html !!}

@endsection
