@extends('layouts.layout')

@section('pagina', 'Sindicalize-se')

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

              <h1 itemprop="headline">Sindicalize-se</h1>

              <div class="divider"></div>
          </header>

          <div class="post-entry" itemprop="articleBody">
          </div>

          <div class="authors">

            <div class="row">

            <div class="col-lg-12">

            <form action="{{ route('sindicalize_store') }}" method="post" id="commentform" class="form-horizontal">

              {{ csrf_field() }}

              <div class="panel panel-default">

                  <div class="panel-heading">Informe os seus dados</div>

                  <div class="panel-body">

                    <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Nome Completo <small><b style="color:#B22222;">obrigatório</b></small></label>
                        <div class="col-sm-10">
                          <input required name="nome" type="text" class="form-control" value="{{ old('nome') }}">
                          @if ($errors->has('nome'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nome') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}"><label class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10"><input name="email" type="email" class="form-control" value="{{ old('email') }}">
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('nascimento') ? 'has-error' : '' }}"><label class="col-sm-2 control-label">Data Nascimento</label>
                        <div class="col-sm-10">
                          <input data-mask="99/99/9999" name="nascimento" type="text" class="form-control" value="{{ old('telefone') }}">
                          @if ($errors->has('nascimento'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nascimento') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('sexo') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Sexo</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="sexo">
                              <option>Selecione</option>
                              <option value="M">Masculino</option>
                              <option value="F">Feminino</option>
                          </select>
                          @if ($errors->has('sexo'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('sexo') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('estado_civil') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Estado Civil</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="estado_civil">
                              <option value="">Selecione</option>
                              <option value="casado">Casado</option>
                              <option value="solteiro">Solteiro</option>
                              <option value="divorciado">Divorciado</option>
                              <option value="viuvo">Viuvo</option>
                          </select>
                          @if ($errors->has('estado_civil'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('estado_civil') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('naturalidade') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Naturalidade</label>
                        <div class="col-sm-10">
                          <input name="naturalidade" type="text" class="form-control" value="{{ old('naturalidade') }}">
                          @if ($errors->has('naturalidade'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('naturalidade') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('telefone') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Telefone</label>
                        <div class="col-sm-10">
                          <input data-mask="(99)99999-9999" name="telefone" type="text" class="form-control" value="{{ old('telefone') }}">
                          @if ($errors->has('telefone'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('telefone') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('celular') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Celular</label>
                        <div class="col-sm-10">
                          <input name="celular" type="text" class="form-control" value="{{ old('celular') }}">
                          @if ($errors->has('celular'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('celular') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('grau_instrucao') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Grau Instrução</label>
                        <div class="col-sm-10">
                          <input name="grau_instrucao" type="text" class="form-control" value="{{ old('grau_instrucao') }}">
                          @if ($errors->has('grau_instrucao'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('grau_instrucao') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                  </div>

              </div>

              <div class="panel panel-default">

                  <div class="panel-heading">Documentos</div>

                  <div class="panel-body">

                    <div class="form-group has-feedback {{ $errors->has('identidade') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Identidade<br/> <small><b style="color:#B22222;">obrigatório</b></small></label>
                        <div class="col-sm-10">
                          <input required name="identidade" type="text" class="form-control" value="{{ old('identidade') }}">
                          @if ($errors->has('identidade'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('identidade') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('cpf') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">CPF<br/> <small><b style="color:#B22222;">obrigatório</b></small></label>
                        <div class="col-sm-10">
                          <input required  data-mask="999.999.999-99" name="cpf" type="text" class="form-control" value="{{ old('cpf') }}">
                          @if ($errors->has('cpf'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('cpf') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('ctps') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">CTPS</label>
                        <div class="col-sm-10">
                          <input name="ctps" type="text" class="form-control" value="{{ old('ctps') }}">
                          @if ($errors->has('ctps'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('ctps') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                  </div>
              </div>

              <div class="panel panel-default">

                  <div class="panel-heading">Endereço</div>

                  <div class="panel-body">

                    <div class="form-group has-feedback {{ $errors->has('cep') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">CEP</label>
                        <div class="col-sm-10">
                          <input name="cep" type="text" class="form-control" value="{{ old('cep') }}">
                          @if ($errors->has('cep'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('cep') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('logradouro') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Logradouro</label>
                        <div class="col-sm-10">
                          <input name="logradouro" type="text" class="form-control" value="{{ old('logradouro') }}">
                          @if ($errors->has('logradouro'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('logradouro') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('numero') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Número</label>
                        <div class="col-sm-10">
                          <input name="numero" type="text" class="form-control" value="{{ old('numero') }}">
                          @if ($errors->has('numero'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('numero') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('complemento') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Complemento</label>
                        <div class="col-sm-10">
                          <input name="nome" type="text" class="form-control" value="{{ old('complemento') }}">
                          @if ($errors->has('complemento'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('complemento') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('bairro') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Bairro</label>
                        <div class="col-sm-10">
                          <input name="bairro" type="text" class="form-control" value="{{ old('bairro') }}">
                          @if ($errors->has('bairro'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('bairro') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('cidade') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Cidade</label>
                        <div class="col-sm-10">
                          <input name="cidade" type="text" class="form-control" value="{{ old('cidade') }}">
                          @if ($errors->has('cidade'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('cidade') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('estado') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Estado</label>
                        <div class="col-sm-10">
                          <input name="estado" type="text" class="form-control" value="{{ old('estado') }}">
                          @if ($errors->has('estado'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('estado') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                  </div>
              </div>

              <div class="panel panel-default">

                  <div class="panel-heading">Profissional</div>

                  <div class="panel-body">

                    <div class="form-group has-feedback {{ $errors->has('empresa') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Nome da empresa<br/> <small><b style="color:#B22222;">obrigatório</b></small></label>
                        <div class="col-sm-10">
                          <input required name="empresa" type="text" class="form-control" value="{{ old('empresa') }}">
                          @if ($errors->has('empresa'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('empresa') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('funcao') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Função</label>
                        <div class="col-sm-10">
                          <input name="funcao" type="text" class="form-control" value="{{ old('funcao') }}">
                          @if ($errors->has('funcao'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('funcao') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('matricula') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Matrícula da empresa</label>
                        <div class="col-sm-10">
                          <input name="matricula" type="text" class="form-control" value="{{ old('matricula') }}">
                          @if ($errors->has('matricula'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('matricula') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('admissao') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Data Admissão</label>
                        <div class="col-sm-10">
                          <input name="admissao" data-mask="99/99/9999" type="text" class="form-control" value="{{ old('admissao') }}">
                          @if ($errors->has('admissao'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('admissao') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('dependentes') ? 'has-error' : '' }}">
                      <label class="col-sm-2 control-label">Dependentes</label>
                        <div class="col-sm-10">
                          <textarea name="dependentes" class="form-control">{{ old('dependentes') }}</textarea>
                          @if ($errors->has('dependentes'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('dependentes') }}</strong>
                              </span>
                          @endif
                        </div>
                    </div>

                  </div>
              </div>

              <button name="submit" type="submit" id="submit" class="btn btn-success btn-lg">Enviar</button>

            </form>

          </div>

          </div>

          </div>


      </div>
  </article>
@endsection
