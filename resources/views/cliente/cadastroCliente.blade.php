@extends('layout')


@section('pagina')
<a class="text-white" href="{{url('clientes')}}">
  Clientes
</a>
@endsection
@section('subpagina')
Cadastro do novo cliente
@endsection
@section('conteudo')

<x-alerts :errors="$errors" />

<div class="row">
  <div class="col-md-12">
    <form action="{{route('cadastrarCliente')}}" method="post">
      @csrf
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Cadastrar um novo cliente</p>
            <x-btn-principal texto="Cadastrar" textoIcon="fas fa-plus" />
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">
            Informações do pessoais
          </p>

          <div class="row">
            <x-forms.input col="col-md-5" nameFor="nome" nome="Nome *" tipo="text" :value="old('nome')" max="60" />

            <x-forms.input col="col-md-4" nameFor="data_nascimento" nome="Data de nascimento *" tipo="date" :value="old('data_nascimento')" />

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

            <x-forms.input col="col-md-3" nameFor="telefone" nome="Telefone" placeholder="(00) 0 0000-0000" id="telefone" class="telefone" tipo="text" :value="old('telefone')" />

            <x-forms.input col="col-md-3" nameFor="whatsapp" nome="Whatsapp" placeholder="(00) 0 0000-0000" id="wpp" class="telefone" tipo="text" :value="old('wpp')" />

            <x-forms.input col="col-md" nameFor="email" nome="E-mail" tipo="email" :value="old('email')" />
          </div>

          <hr class="horizontal dark">

          <div class="row">
            <p class="text-uppercase text-sm">
              Informações residenciais
            </p>
            <x-forms.input col="col-md-4" nameFor="cep" nome="CEP" class="cep" tipo="text" :value="old('cep')" />

            <x-forms.input col="col-md" nameFor="endereco" nome="Endereço" tipo="text" :value="old('endereco')" max="100" />
          </div>

          <div class="row">
            <x-forms.input col="col-md-5" nameFor="bairro" max="100" tipo="text" nome="Bairro" :value="old('bairro')" />

            <x-forms.input col="col-md-5" nameFor="cidade" nome="Cidade" tipo="text" :value="old('cidade')" max="100" />

            <x-forms.input col="col-md-2" nameFor="uf" nome="UF" tipo="text" :value="old('uf')" class="apenasLetras" max="2" />
          </div>

          <hr class="horizontal dark">

          <div class="row">

            <x-forms.textarea col="col-md-12" nameFor="observacao" nome="Observação" max="400" :value="old('observacao')" />

          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection