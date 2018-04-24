{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Galeria de Fotos</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Foto</h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('galeria_store')}}">
          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Titulo</label>
                      <div class="col-sm-10">
                        <input type="text" name="titulo" required class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="corda" class="col-sm-2 control-label">Imagem(s)</label>
                    <div class="col-sm-10">
                      <input type="file" multiple name="imagem[]" accept="image/jpeg, image/gif, image/x-png">
                    </div>
                  </div>

              </div>


            </div>


            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-default" href="{{ route('banners') }}">Cancelar</a>

            </form>

        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

@stop
