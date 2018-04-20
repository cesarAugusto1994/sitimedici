{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
@stop

@section('content_header')
    <h1>Noticias</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Noticia</h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" id="formNoticia" class="form-horizontal" action="{{route('noticia_update', ['id' => $noticia->id])}}">
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
                        <div id="editor"></div>
                        <textarea id="summernote" rows="7" name="conteudo">{!! $noticia->conteudo !!}</textarea>
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


@section('js')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script>

$(document).ready(function() {

  $('#summernote').summernote();

  $('#formNoticia').submit(function(e) {

      e.preventDefault();

      var self = $(this);

      var divEditorHtml = $('#summernote').val();

      var form = $("#formNoticia");

      form.append('<textarea name="conteudo" style="display:none">'+divEditorHtml+'</textarea>');
      form.append('<textarea name="conteudo_html" style="display:none">'+divEditorHtml+'</textarea>');

      //var serialized = form.serialize();

      files = e.target.files;

      var formData = new FormData(self[0]);
      var file = [];

      $.each(files, function(key, val) {
        file[key] = val;
      });

      formData.append('file', file);
      formData.append('_token', $('[name="_token"]').val());

      $.ajax({
          headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: "POST",
          method: 'POST',
          url: self.attr('action'),
          data:formData,
          dataType: 'json',
          cache: false,
          enctype: 'multipart/form-data',
          contentType: false,
          processData: false,
          xhr: function() {  // Custom XMLHttpRequest
              var myXhr = $.ajaxSettings.xhr();
              if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                  myXhr.upload.addEventListener('progress', function () {
                      /* faz alguma coisa durante o progresso do upload */
                  }, false);
              }
          return myXhr;
        },
          success: function (data) {
              window.location.href = '/admin/noticias';
          },
           error: function (data) {
              //openSwalMessage('Erro', data.message);
          }
      })

  });

});

</script>
@stop
