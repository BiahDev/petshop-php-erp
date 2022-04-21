@extends('layout')


@section('pagina')
Produtos
@endsection
@section('subpagina')
Cadastro do novo cliente
@endsection
@section('conteudo')

<x-alerts :errors="$errors"/>

<div class="row">
  <div class="col-md-12">
    <form action="{{route('cadastrarCliente')}}" method="post">
      @csrf
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Cadastrar um novo cliente</p>
            <button type="submit" class="btn bg-gradient-primary ms-auto">
              <i class="fas fa-plus"></i>
              Cadastrar
            </button>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">
            Informações do pessoais
          </p>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label for="nome" class="form-control-label">Nome *</label>
                <input value="{{ old('nome') }}" maxlength="60" class="form-control" type="text" name="nome">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="data_nascimento" class="form-control-label">
                  Data de nascimento *
                </label>
                <input class="form-control" type="date" name="data_nascimento" value="{{ old('data_nascimento') }}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="genero">Genêro *</label>
                <select class="form-control" name="genero">
                  <option></option>
                  <option value="Feminino">Feminino</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Outros">Outros</option>
                </select>
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <div class="col-md-12">
              <div class="form-check form-switch mx-1">
                <input class="form-check-input" type="checkbox" id="inputSwitchTelWpp">
                <label class="form-check-label" for="inputSwitchTelWpp">
                  Telefone é o mesmo pro WhatsApp?
                </label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="telefone" class="form-control-label">
                  Telefone
                </label>
                <input class="form-control telefone" type="text" name="telefone" id="telefone" placeholder="(00) 0 0000-0000" value="{{ old('telefone') }}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="whatsapp" class="form-control-label">
                  WhatsApp
                </label>
                <input class="form-control telefone" type="text" name="whatsapp" placeholder="(00) 0 0000-0000" value="{{ old('whatsapp') }}" id="wpp">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="email" class="form-control-label">
                  E-mail
                </label>
                <input class="form-control" type="email" name="email" maxlength="100" value="{{ old('email') }}">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <p class="text-uppercase text-sm">
              Informações residenciais
            </p>
            <div class="col-md-4">
              <div class="form-group">
                <label for="cep" class="form-control-label">
                  CEP *
                </label>
                <input class="form-control cep" type="text" name="cep" value="{{ old('cep') }}">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="endereco" class="form-control-label">
                  Endereço
                </label>
                <input class="form-control" maxlength="100" type="text" name="endereco" value="{{ old('endereco') }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label for="bairro" class="form-control-label">
                  Bairro
                </label>
                <input class="form-control" maxlength="100" type="text" name="bairro" value="{{ old('bairro') }}">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="cidade" class="form-control-label">
                  Cidade
                </label>
                <input class="form-control" type="text" name="cidade" maxlength="100" value="{{ old('cidade') }}">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="uf" class="form-control-label">
                  UF
                </label>
                <input class="form-control apenasLetras" type="text" name="uf" maxlength="2" value="{{old('uf')}}" placeholder="MG">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <div class="form-group">
              <label for="observacao">Observação
              </label>
              <textarea class="form-control " value="{{ old('observacao') }}" name="observacao" rows="3" maxlength="400"></textarea>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection