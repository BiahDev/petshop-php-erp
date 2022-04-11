@extends('layout')


@section('pagina')
Produtos
@endsection
@section('subpagina')
Cadastro do novo produto
@endsection


@section('conteudo')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <form action="" method="post">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Cadastrar um novo cliente</p>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Cadastrar</button>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">
            Informações do pessoais
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="descricao" class="form-control-label">Nome</label>
                <input class="form-control" type="text" name="descricao">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="descricao" class="form-control-label">Sobrenome</label>
                <input class="form-control" type="text" name="descricao">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Data de nascimento</label>
                <input class="form-control" type="date">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="categoria">Genêro</label>
                <select class="form-control" name="id_categoria">
                  <option></option>
                  <option>Feminino</option>
                  <option>Masculino</option>
                  <option>Outros</option>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">
                Telefone
              </label>
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">
                WhatsApp
              </label>
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">
                Instagram
              </label>
              <input class="form-control" type="text">
            </div>
          </div>
          <hr>
          <div class="row">
            <p class="text-uppercase text-sm">
              Informações residenciais
            </p>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">
                  Endereço
                </label>
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">
                  Bairro
                </label>
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">
                  Cidade
                </label>
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">
                  UF
                </label>
                <input class="form-control" type="text">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="row">
            <div class="form-group">
              <label for="observacao">Observação <small>(Opcional)</small>
              </label>
              <textarea class="form-control" name="observacao" rows="3"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
