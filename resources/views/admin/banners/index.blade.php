{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Banners</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Banners </h3>
          <div class="box-tools pull-right">
            <a href="{{ route('banner_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($banners as $banner)


                        <tr>
                            <td>{{ $banner->titulo }}</td>
                            <td>{{ $banner->created_at->format('d/m/Y') }}</td>
                            <td><a class="btn btn-xs btn-link" href="{{ route('banner_destroy', ['id' => $banner->id]) }}">Remover</a></td>
                        </tr>


                    @empty

                    <tr><td colspan="3">Nenhum registro encontrado.</td></tr>

                    @endforelse
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
