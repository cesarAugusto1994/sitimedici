{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Noticias')

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de noticias</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('noticia_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Titulo</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($noticias as $noticia)
                        <tr>
                            <td>{{ $noticia->created_at->format('d/m/Y') }}</td>
                            <td><a href="{{ route('noticia', ['id' => $noticia->id]) }}">{{ $noticia->titulo }}</a></td>
                        </tr>
                    @endforeach
                </tbody>

            <table>

        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>  </script>
@stop
