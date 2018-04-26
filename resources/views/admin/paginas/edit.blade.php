{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
@stop

@section('content_header')
    <h1>Pagina</h1>
@stop

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Pagina</h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" id="formPagina" class="form-horizontal" action="{{route('pagina_update', ['id' => $pagina->id])}}">
          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Titulo</label>
                      <div class="col-sm-10">
                        <input type="text" name="titulo" required class="form-control" value="{{ $pagina->titulo }}">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Categoria</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="categoria_id">
                        @foreach($categorias as $categoria)

                              <option value="{{ $categoria->id }}" {{ $pagina->categoria->id == $categoria->id ?  'selected' : '' }}>{{ $categoria->nome }}</option>

                        @endforeach
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Link</label>
                      <div class="col-sm-10">
                        <input type="text" name="url" class="form-control" value="{{ $pagina->url }}">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">ou</label>
                      <div class="col-sm-10">

                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Conteúdo</label>
                      <div class="col-sm-10">
                        <div id="editor"></div>
                        <textarea id="summernote" rows="7" name="conteudo">{!! $pagina->conteudo !!}</textarea>
                      </div>
                  </div>
              </div>


            </div>


            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-default" href="{{ route('paginas') }}">Cancelar</a>

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

  $('#formPagina').submit(function(e) {

      e.preventDefault();

      var self = $(this);

      var divEditorHtml = $('#summernote').val();

      var form = $("#formPagina");

      form.append('<textarea name="conteudo" style="display:none">'+divEditorHtml+'</textarea>');
      form.append('<textarea name="conteudo_html" style="display:none">'+divEditorHtml+'</textarea>');

      var formData = new FormData(self[0]);
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
              window.location.href = '/admin/paginas';
          },
           error: function (data) {
              //openSwalMessage('Erro', data.message);
          }
      })

  });

});

</script>
@stop
