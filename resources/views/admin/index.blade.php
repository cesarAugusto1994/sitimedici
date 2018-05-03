{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Painel Principal')

@section('content_header')
    <h1>Painel Principal</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-red">
          <h3 class="widget-user-username">Noticias</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('noticias') }}" class="btn btn-block btn-default">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-aqua-active">
          <h3 class="widget-user-username">Banners</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('banners') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-yellow">
          <h3 class="widget-user-username">Páginas</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('paginas') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-green">
          <h3 class="widget-user-username">Serviços</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('servicos') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-black">
          <h3 class="widget-user-username">Eventos</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('eventos') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-blue">
          <h3 class="widget-user-username">Galeria de Fotos</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('paginas') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-purple">
          <h3 class="widget-user-username">Videos</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('videos') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-red">
          <h3 class="widget-user-username">Configurações</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('config') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-green">
          <h3 class="widget-user-username">Fale Conosco</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('fale_conosco') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-blue">
          <h3 class="widget-user-username">Sindicalize-se</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('sindicalize') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-yellow">
          <h3 class="widget-user-username">Usuários</h3>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <a href="{{ route('usuarios') }}" class="btn btn-default btn-block">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>


@stop
