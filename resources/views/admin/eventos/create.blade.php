{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    <h1>Evento</h1>
@stop

@section('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
<style>
.datepicker{z-index:1151 !important;}
</style>
@stop


@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Evento</h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('evento_store')}}">
          {{csrf_field()}}

          <div class="row">
              <div class="col-lg-12 col-md-12">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                      <div class="col-sm-10">
                        <input type="text" name="nome" required class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Data</label>
                      <div class="col-sm-10">
                        <input type="text" name="data" data-mask="99/99/9999" required class="form-control datepicker">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Conteúdo</label>
                      <div class="col-sm-10">
                        <textarea id="summernote" required rows="7" name="conteudo"></textarea>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="corda" class="col-sm-2 control-label">Imagem</label>
                    <div class="col-sm-10">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                          <img data-src="holder.js/300x200" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                          <span class="btn btn-default btn-block btn-file"><span class="fileinput-new">Selecionar Imagem</span><span class="fileinput-exists">Trocar</span><input type="file" name="imagem"></span>
                          <a href="#" class="btn btn-default btn-block fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt.min.js"></script>

<script>


$(document).ready(function() {

  $('#summernote').summernote();
  $('.datepicker').datepicker({
      format: 'dd/mm/yyyy',
      language: 'pt-BR',
      todayHighlight: true,
      todayBtn: true,
      autoclose: true,
      clearBtn: true
  });

});

</script>
@stop
