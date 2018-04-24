@extends('layouts.layout')

@section('pagina', 'Fale Conosco')

@section('css')
<style>
  .form-control {
    background-color: #FFFFFF;
    background-image: none;
    border: 1px solid #e5e6e7;
    border-radius: 1px;
    color: inherit;
    display: block;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
  }
  .form-control:focus {
    border-color: #1ab394;
  }
  .hr-line-dashed {
    border-top: 1px dashed #e7eaec;
    color: #ffffff;
    background-color: #ffffff;
    height: 1px;
    margin: 20px 0;
  }
</style>
@stop

@section('content')
<article class="article-container" itemscope itemtype="http://schema.org/Article">

      <div class="article-content authors-page">
          <header>

              @include('flash::message')

              <h1 itemprop="headline">Fale Conosco</h1>

              <div class="divider"></div>
          </header>

          <div class="post-entry" itemprop="articleBody">
          </div>

          <div class="authors">

            @if(\App\Http\Controllers\HomeController::faleConoscoConteudo())
                {!! \App\Http\Controllers\HomeController::faleConoscoConteudo()->conteudo !!}
            @endif

            <div class="row">

            <div class="col-lg-12">

            <form action="{{ route('fale_conosco_store') }}" method="post" id="commentform" class="form-horizontal">

              {{ csrf_field() }}

              <div class="panel panel-default">

                  <div class="panel-heading">Informe os seus dados</div>

                  <div class="panel-body">

                    <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}"><label class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10"><input required name="nome" type="text" class="form-control" value="{{ old('nome') }}">
                          @if ($errors->has('nome'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nome') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}"><label class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10"><input required name="email" type="text" class="form-control" value="{{ old('email') }}">
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('telefone') ? 'has-error' : '' }}"><label class="col-sm-2 control-label">Telefone</label>
                        <div class="col-sm-10">
                          <input required data-mask="(99)99999-9999" name="telefone" type="text" class="form-control" value="{{ old('telefone') }}">
                          @if ($errors->has('telefone'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('telefone') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('empresa') ? 'has-error' : '' }}"><label class="col-sm-2 control-label">Empresa</label>
                        <div class="col-sm-10">
                          <input name="empresa" type="text" class="form-control" value="{{ old('empresa') }}">
                          @if ($errors->has('empresa'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('empresa') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('mensagem') ? 'has-error' : '' }}"><label class="col-sm-2 control-label">Mensagem</label>
                        <div class="col-sm-10">
                          <textarea required name="mensagem" class="form-control">{{ old('mensagem') }}</textarea>
                          @if ($errors->has('mensagem'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('mensagem') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <button name="submit" type="submit" id="submit" class="btn btn-success btn-lg" value="Post Comment">Enviar</button>

                  </div>

              </div>

            </form>

          </div>

          </div>

          </div>


      </div>
  </article>
@endsection
