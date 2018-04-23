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

            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Titulo</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($noticias->sortByDesc('id') as $noticia)
                        <tr>
                            <td>{{ $noticia->created_at->format('d/m/Y H:i') }}</td>
                            <td><a href="{{ route('noticia', ['id' => $noticia->id]) }}">{{ $noticia->titulo }}</a></td>
                            <td><a class="btn btn-xs btn-link" href="{{ route('noticia_destroy', ['id' => $noticia->id]) }}">Remover</a></td>
                        </tr>
                    @endforeach
                </tbody>

                <tfoot>
                  <tr><td colspan="2">{{ $noticias->links() }}</td></tr>
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
