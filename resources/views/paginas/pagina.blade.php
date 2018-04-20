@extends('layouts.layout')

@section('content')

  <h3>{{ $pagina->titulo }}</h3>

  <hr/>

  {!! $pagina->conteudo !!}

  <br/>

@endsection
