@extends('layouts.layout')

@section('content')

  <h3>{{ $noticia->titulo }}</h3>

  {!! $noticia->conteudo_html !!}

@endsection
