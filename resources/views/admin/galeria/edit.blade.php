{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Banners</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Banner</h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('noticia_store')}}">
          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Titulo</label>
                      <div class="col-sm-10">
                        <input type="text" name="titulo" required class="form-control" value="{{ $banner->titulo }}">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Link</label>
                      <div class="col-sm-10">
                        <input type="text" name="Link" class="form-control" value="{{ $banner->link }}">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="corda" class="col-sm-2 control-label">Imagem</label>
                    <div class="col-sm-10">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                          <img data-src="/{{ $banner->link }}" @if($banner->link) src="/{{ $banner->link }}"  @endif alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                          <span class="btn btn-default btn-block btn-file"><span class="fileinput-new">Selecionar Imagem</span>
                          <span class="fileinput-exists">Trocar</span><input value="/{{ $banner->link }}" type="file" name="imagem"></span>
                          <a href="#" class="btn btn-default btn-block fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                        </div>
                    </div>
                  </div>


              </div>


            </div>


            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-default" href="{{ route('banners.index') }}">Cancelar</a>

            </form>

        </div>
    </div>
@stop

@section('css')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
@stop

@section('js')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script>

</script>
@stop
