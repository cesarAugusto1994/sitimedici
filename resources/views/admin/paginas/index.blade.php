{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Paginas</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de páginas</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('pagina_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Data</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($paginas as $pagina)
                        <tr>
                            <td><a href="{{ route('pagina', ['id' => $pagina->id]) }}">{{ $pagina->titulo }}</a></td>
                            <td><a href="{{ route('pagina', ['id' => $pagina->id]) }}">{{ $pagina->categoria->nome }}</a></td>
                            <td>{{ $pagina->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr><td colspan="3">{{ $paginas->links() }}</td></tr>
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
