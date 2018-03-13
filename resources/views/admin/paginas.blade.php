{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Paginas')

@section('content_header')
    <h1>Paginas</h1>
@stop

@section('content')


<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Habilitar Paginas</h3>
        </div>
        <div class="box-body">

          <div class="row">

          @foreach($categorias as $categoria)


              <div class="col-lg-6">

                  <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">
                          <div class="input-group">
                                <span class="input-group-addon">
                                  <input type="checkbox" {{ $categoria->ativo ? 'checked' : '' }}/>
                                </span>
                            <input type="text" class="form-control" value="{{ $categoria->nome }}"/>
                          </div></h3>
                      </div>
                      <div class="box-body">

                      <div class="row">
                        @foreach($categoria->paginas as $pagina)
                        <div class="col-lg-4">
                          <div class="input-group">
                                <span class="input-group-addon">
                                  <input type="checkbox" {{ $pagina->ativo ? 'checked' : '' }}/>
                                </span>
                            <input type="text" class="form-control" value="{{ $pagina->nome }}"/>
                          </div>
                          <!-- /input-group -->
                        </div>
                        @endforeach
                      </div>

                    </div>
                  </div>

              </div>

          @endforeach

          </div>
        </div>
      </div>


@stop
