@extends('layouts.layout')

@section('content')

  <h3 itemprop="headline">{{ $noticia->titulo }}</h3>
  <hr/>

  {!! $noticia->conteudo_html !!}

@endsection
