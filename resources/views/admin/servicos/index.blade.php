{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Serviços</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Serviços</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('servico_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Url</th>
                        <th>Data</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($servicos as $servico)
                        <tr>
                            <td><a href="{{ route('servico', ['id' => $servico->id]) }}">{{ $servico->nome }}</a></td>
                            <td><a href="{{ route('servico', ['id' => $servico->id]) }}">{{ $servico->url }}</a></td>
                            <td>{{ $servico->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr><td colspan="3">{{ $servicos->links() }}</td></tr>
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
