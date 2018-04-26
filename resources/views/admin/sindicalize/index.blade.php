{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Sindicalize-se</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Sindicalize-se</h3>

        </div>

        <div class="box-body">

            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Identidade</th>
                        <th>CPF</th>
                        <th>telefone</th>
                        <th>Empresa</th>
                        <th>Data</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($contatos as $contato)

                        <tr>
                            <td>{{ $contato->nome }}</td>
                            <td>{{ $contato->email }}</td>
                            <td>{{ $contato->identidade }}</td>
                            <td>{{ $contato->cpf }}</td>
                            <td>{{ $contato->telefone }}</td>
                            <td>{{ $contato->empresa }}</td>

                            <td>{{ $contato->created_at->format('d/m/Y H:i') }}</td>
                        </tr>

                    @empty

                    <tr><td colspan="6">Nenhum registro encontrado.</td></tr>

                    @endforelse
                </tbody>

                <tfoot>
                  <tr><td colspan="6">{{ $contatos->links() }}</td></tr>
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
