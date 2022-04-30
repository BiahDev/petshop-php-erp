@extends('layout')


@section('pagina')
<a class="text-white" href="{{url('produtos')}}">
  Produtos
</a>

@endsection
@section('subpagina')
Editar o produto
@endsection


@section('conteudo')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <form action="" method="post">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Editar o produto</p>
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Salvar</button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="descricao" class="form-control-label">Descrição</label>
                <input class="form-control" type="text" name="descricao">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Código</label>
                <input class="form-control" type="text" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="categoria">Categoria</label>
                <select class="form-control" name="id_categoria">
                  <option></option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="subcategoria">SubCategoria</label>
                <select class="form-control" name="id_subcategoria">
                  <option></option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="marca">Marca</label>
                <select class="form-control" name="id_marca">
                  <option></option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <div class="form-group">
            <label for="observacao">Observação <small>(Opcional)</small></label>
            <textarea class="form-control" name="observacao" rows="3"></textarea>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection