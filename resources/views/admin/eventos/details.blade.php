{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Pagina</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Pagina</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('pagina_edit', ['id' => $pagina->id]) }}" class="btn btn-xs btn-success">Editar</a>
          </div>
        </div>

        <div class="box-body">

            <h2>{{ $pagina->titulo }}</h2>

            {!! $pagina->conteudo !!}

        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>  </script>
@stop
