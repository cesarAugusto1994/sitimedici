{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Usuários</h1>
@stop


@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Alterar Senha</h3>
        </div>
        <div class="box-body">

          <form method="post" class="form-horizontal" action="{{route('usuario_update_password', ['id' => $usuario->id])}}">
          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">{{ trans('adminlte::adminlte.full_name') }}</label>
                      <div class="col-sm-10">
                        <input type="text" readonly required class="form-control" value="{{ $usuario->name }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </div>
                  </div>
                  <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">Nova Senha</label>
                      <div class="col-sm-10">
                        <input type="text" name="password" required class="form-control" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      </div>
                  </div>

              </div>
            </div>


            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-default" href="{{ route('usuarios') }}">Cancelar</a>

            </form>

        </div>
    </div>
@stop
