@extends('layouts.layout')

@section('pagina', $pagina->titulo)

@section('content')

  <h1 itemprop="headline">{{ $pagina->titulo }}</h1>

  <div class="divider"></div>

  {!! $pagina->conteudo !!}

  <br/>

@endsection
