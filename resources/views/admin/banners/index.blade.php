{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Banners</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de noticias</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('banner_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Titulo</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td>{{ $banner->created_at->format('d/m/Y') }}</td>
                            <td><a href="{{ route('banner_edit', ['id' => $banner->id]) }}">{{ $banner->titulo }}</a></td>
                            <td><a class="btn btn-sm btn-danger" href="{{ route('banner_destroy', ['id' => $banner->id]) }}">Remover</a></td>
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
