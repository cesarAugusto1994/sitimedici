{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Serviços</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Serviço</h3>
        </div>
        <div class="box-body">

        <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('servico_update', ['id' => $servico->id])}}">

          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                      <div class="col-sm-10">
                        <input type="text" name="nome" required class="form-control" value="{{ $servico->nome }}">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Url</label>
                      <div class="col-sm-10">
                        <input type="text" name="url" class="form-control" value="{{ $servico->url }}">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Arquivo</label>
                      <div class="col-sm-10">
                        <input type="file" name="arquivo" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fazer Download?</label>
                      <div class="col-sm-10">
                        <input name="download" type="checkbox" value="1" {{ $servico->download ? 'checked' : '' }} name="download">
                      </div>
                  </div>


              </div>


            </div>


            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-default" href="{{ route('servicos') }}">Cancelar</a>

            </form>

        </div>
    </div>
@stop
