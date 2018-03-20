{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Noticias')

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Noticia</h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('noticia_store')}}">
          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Titulo</label>
                      <div class="col-sm-10">
                        <input type="text" name="titulo" required class="form-control" value="{{ $noticia->titulo }}">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Subtitulo</label>
                      <div class="col-sm-10">
                        <input type="text" name="subtitulo" required class="form-control" value="{{ $noticia->subtitulo }}">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Texto</label>
                      <div class="col-sm-10">
                        <textarea id="editor" name="conteudo" style="min-height:200px" class="form-control">{{ $noticia->conteudo }}</textarea>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="corda" class="col-sm-2 control-label">Imagem 1</label>
                    <div class="col-sm-10">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                          <img data-src="holder.js/300x200" @if($noticia->imagem_1) src="/{{ $noticia->imagem_1 }}"  @endif alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                          <span class="btn btn-default btn-block btn-file"><span class="fileinput-new">Selecionar Imagem</span><span class="fileinput-exists">Trocar</span><input type="file" name="imagem_1"></span>
                          <a href="#" class="btn btn-default btn-block fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="corda" class="col-sm-2 control-label">Imagem 2 <small>opcional</small></label>
                    <div class="col-sm-10">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                          <img data-src="holder.js/300x200" @if($noticia->imagem_2) src="/{{ $noticia->imagem_2 }}"  @endif alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                          <span class="btn btn-default btn-block btn-file"><span class="fileinput-new">Selecionar Imagem</span><span class="fileinput-exists">Trocar</span><input type="file" name="imagem_2"></span>
                          <a href="#" class="btn btn-default btn-block fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="corda" class="col-sm-2 control-label">Imagem 3 <small>opcional</small></label>
                    <div class="col-sm-10">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                          <img data-src="holder.js/300x200" @if(!empty($noticia->imagem_3)) src="/{{ $noticia->imagem_3 }}"  @endif alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                          <span class="btn btn-default btn-block btn-file"><span class="fileinput-new">Selecionar Imagem</span><span class="fileinput-exists">Trocar</span><input type="file" name="imagem_3"></span>
                          <a href="#" class="btn btn-default btn-block fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                        </div>
                    </div>
                  </div>
              </div>


            </div>


            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-default" href="{{ route('noticias') }}">Cancelar</a>

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
