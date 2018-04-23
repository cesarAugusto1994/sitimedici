{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Eventos</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('evento_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>opções</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($eventos as $evento)
                        <tr>
                            <td><a href="{{ route('evento', ['id' => $evento->id]) }}">{{ $evento->nome }}</a></td>
                            <td>{{ $evento->created_at->format('d/m/Y') }}</td>
                            <td><a class="btn btn-xs btn-link" href="{{ route('evento_destroy', ['id' => $evento->id]) }}">Remover</a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr><td colspan="3">{{ $eventos->links() }}</td></tr>
                </tfoot>

            <table>

        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>  </script>
@stop
