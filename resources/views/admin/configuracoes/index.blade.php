{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Videos</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de videos</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('video_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th>Link</th>
                        <th>Data</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($videos as $video)


                        <tr>
                            <td>{{ $video->url }}</td>
                            <td>{{ $video->created_at->format('d/m/Y') }}</td>
                            <td><a class="btn btn-xs btn-link" href="{{ route('video_destroy', ['id' => $video->id]) }}">Remover</a></td>
                        </tr>


                    @empty

                    <tr><td colspan="3">Nenhum registro encontrado.</td></tr>

                    @endforelse
                </tbody>

                <tfoot>
                  <tr><td colspan="3">{{ $videos->links() }}</td></tr>
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
