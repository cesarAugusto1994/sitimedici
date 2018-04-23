@extends('layouts.layout')

@section('content')

  <h3>{{ $evento->nome }} - {{ $evento->data->format('d/m/Y') }}</h3>

  <hr/>

  {!! $evento->conteudo !!}

  <br/>

@endsection
