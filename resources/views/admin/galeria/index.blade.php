{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Galeria de Fotos</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de Fotos</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('galeria_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($galeria as $foto)

                        <tr>
                            <td>
                              <div class="form-group">

                                  <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 64px; height: 64px;">
                                      <img data-src="/{{ $foto->link }}" src="/{{ $foto->link }}" alt="...">
                                    </div>

                                </div>
                            </td>
                            <td>{{ $foto->titulo }}</td>
                            <td>{{ $foto->created_at->format('d/m/Y') }}</td>
                            <td><a class="btn btn-xs btn-link" href="{{ route('galeria_destroy', ['id' => $foto->id]) }}">Remover</a></td>
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
