{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Usuários</h1>
@stop


@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Usuário</h3>
        </div>
        <div class="box-body">

          <form method="post" class="form-horizontal" action="{{route('usuario_update', ['id' => $usuario->id])}}">
          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">{{ trans('adminlte::adminlte.full_name') }}</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" required class="form-control" value="{{ old('name') ?? $usuario->name }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </div>
                  </div>
                  <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label">{{ trans('adminlte::adminlte.email') }}</label>
                      <div class="col-sm-10">
                        <input type="email" name="email" required class="form-control" value="{{ old('email') ?? $usuario->email }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
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
