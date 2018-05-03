{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listagem de páginas</h3>
          <div class="box-tools pull-right">
            <a href="{{ route('usuario_create') }}" class="btn btn-xs btn-success">Adicionar</a>
          </div>
        </div>

        <div class="box-body">

            <table class="table">

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th colspan="2">Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td><a href="{{ route('usuario_edit', ['id' => $usuario->id]) }}">{{ $usuario->name }}</a></td>
                            <td>{{ $usuario->email }}</td>
                            <td><a href="{{ route('usuario_status', ['id' => $usuario->id]) }}" class="btn btn-xs btn-{{ $usuario->active ? 'danger' : 'success' }}">{{ $usuario->active ? 'Inativar' : 'Ativar' }}</a></td>
                            <td><a href="{{ route('usuario_edit_password', ['id' => $usuario->id]) }}" class="btn btn-xs btn-primary">Atualizar Senha</a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr><td colspan="3">{{ $usuarios->links() }}</td></tr>
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
