@extends('layouts.layout')

@section('pagina', $evento->nome)

@section('content')

  <h1 itemprop="headline">{{ $evento->nome }} - {{ $evento->data->format('d/m/Y') }}</h1>

  <div class="divider"></div>

  {!! $evento->conteudo !!}

  <br/>

@endsection
