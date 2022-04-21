@extends('layout')

@section('pagina')
Cliente
@endsection

@section('subpagina')
Editando
@endsection

@section('conteudo')

<x-alerts :errors="$errors"/>

<div class="row">
  <div class="col-md-12">
    <form action="{{route('editarCliente',$cliente->id)}}" method="post">
      @method('PUT')
      @csrf
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Editando os dados do(a)
               {{$cliente->nome}}</p>
            <button type="submit" class="btn bg-gradient-primary ms-auto">
              <i class="fas fa-save mx-1"></i>
              Salvar
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
                <input class="form-control" type="text" name="nome" value="{{$cliente->nome}}" maxlength="60" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="data_nascimento" class="form-control-label">Data de nascimento*</label>
                <input class="form-control" type="date" name="data_nascimento" 
                value="{{$cliente->data_nascimento}}" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="genero">Genêro</label>
                <select class="form-control" name="genero" required>
                  <option></option>
                  <option value="Feminino" {{ ($cliente->genero == 'Feminino') ? 'selected' : '' }}>
                    Feminino
                  </option>
                  <option value="Masculino" {{ ($cliente->genero == 'Masculino') ? 'selected' : '' }}>
                    Masculino
                  </option>
                  <option value="Outros" {{ ($cliente->genero == 'Outros') ? 'selected' : '' }}>
                    Outros
                  </option>
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
                <input class="form-control telefone" type="text" name="telefone" id="telefone" placeholder="(00) 0 0000-0000" value="{{$cliente->telefone}}">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="whatsapp" class="form-control-label">
                  WhatsApp
                </label>
                <input class="form-control telefone" type="text" name="whatsapp" id="wpp" placeholder="(00) 0 0000-0000" value="{{$cliente->whatsapp}}">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="email" class="form-control-label">
                  E-mail
                </label>
                <input class="form-control" type="email" name="email" value="{{$cliente->email}}">
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
                  CEP
                </label>
                <input class="form-control cep" type="text" value="{{$cliente->cep}}" required name="cep">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="endereco" class="form-control-label">
                  Endereço
                </label>
                <input class="form-control" maxlength="100" type="text" name="endereco" value="{{$cliente->endereco}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label for="bairro" class="form-control-label">
                  Bairro
                </label>
                <input class="form-control" maxlength="100" type="text" name="bairro" value="{{$cliente->bairro}}">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="cidade" class="form-control-label">
                  Cidade
                </label>
                <input class="form-control" type="text" name="cidade" maxlength="100" value="{{$cliente->cidade}}">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="uf" class="form-control-label">
                  UF
                </label>
                <input class="form-control apenasLetras" type="text" name="uf" value="{{$cliente->uf}}" maxlength="2">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <div class="form-group">
              <label for="observacao">Observação
              </label>
              <textarea class="form-control" name="observacao" rows="3" maxlength="400">{{$cliente->observacao}}</textarea>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection