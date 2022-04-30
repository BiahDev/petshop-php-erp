@extends('layout')

@section('pagina')
@endsection

@section('subpagina')
Configuração do produto
@endsection

@section('conteudo')


<div class="row">
  <div class="col-md-6 col-lg-4">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <h6 class="mb-3">Categoria</h6>
          </div>
          <div class="col-7 text-end">
            <button type="button" class="btn btn-sm bg-gradient-primary mb-3" data-bs-toggle="modal" data-bs-target="#novaModalCategoria">
              <i class="fas fa-plus"></i>&nbsp;&nbsp;Categoria
            </button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 pl-2 px-3">
                  Categoria
                </th>
                <th class=" text-uppercase text-secondary text-xs  font-weight-bolder opacity-7 ps-2">
                  Ações
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categorias as $row)
              <tr>
                <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold px-2">
                    {{$row->categoria}}
                  </span>
                </td>
                <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold">
                    <button type="button" class="btn btn-link text-danger text-gradient px-0 mb-0 passador-do-input passador-do-input-html" data-input="categoriaIdExcluir" 
                    data-valor="{{$row->id}}" 
                      data-inputhtml="idValorItem" data-valorhtml="{{$row->categoria}}" data-bs-toggle="modal" data-bs-target="#excluirModalCategoria">
                      <i class="far fa-trash-alt me-2 h6"></i>
                    </button>
                    <button type="button" 
                    class="btn btn-link text-dark px-0 mb-0 passador-do-input" 
                    data-input="categoriaIdEditar,categoriaEditar" data-valor="{{$row->id}},{{$row->categoria}}" data-bs-toggle="modal" data-bs-target="#editarModalCategoria">
                      <i class="fas fa-pencil-alt text-dark me-2 h6"></i>
                    </button>
                  </span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <h6 class="mb-3">SubCategoria</h6>
          </div>
          <div class="col-7 text-end">
            <button type="button" class="btn btn-sm bg-gradient-primary mb-3" data-bs-toggle="modal" data-bs-target="#novaModalSubCategoria">
              <i class="fas fa-plus"></i>&nbsp;&nbsp;SubCategoria
            </button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 pl-2 px-3">
                  SubCategoria
                </th>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 pl-2 px-3">
                  Categoria
                </th>
                <th class=" text-uppercase text-secondary text-xs  font-weight-bolder opacity-7 ps-2">
                  Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($subcategorias as $row)
              <tr>
                <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold px-2">
                    {{$row->sub_categoria}}
                  </span>
                </td>
                <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold px-2">
                    {{$row->categoria}}
                  </span>
                </td>
                <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold">
                    <button type="button" class="btn btn-link text-danger text-gradient px-0 mb-0 passador-do-input" data-bs-toggle="modal" data-valor="{{$row->id}}" data-input="subCategoriaIdExcluir" data-bs-target="#excluirModalSubCategoria">
                      <i class="far fa-trash-alt me-2 h6"></i>
                    </button>
                    <button type="button" class="btn btn-link text-dark px-0 mb-0 passador-do-input" data-valor="{{$row->id}},{{$row->sub_categoria}},{{$row->id_categoria}}" data-input="subCategoriaIdEditar,subCategoriaEditar,subCategoriaIdCategoriaEditar" data-bs-toggle="modal" data-bs-target="#editarModalSubCategoria">
                      <i class="fas fa-pencil-alt text-dark me-2 h6"></i>
                    </button>
                  </span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <h6 class="mb-3">Marca</h6>
          </div>
          <div class="col-7 text-end">
            <button type="button" class="btn btn-sm bg-gradient-primary mb-3" data-bs-toggle="modal" data-bs-target="#novaModalMarca">
              <i class="fas fa-plus"></i>&nbsp;&nbsp;Marca
            </button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 pl-2 px-3">
                  Marca
                </th>
                <th class=" text-uppercase text-secondary text-xs  font-weight-bolder opacity-7 ps-2">
                  Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($marcas as $row )
              <tr>
                <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold px-2">
                    {{$row->marca}}
                  </span>
                </td>
                <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold">
                    <button type="button" class="btn btn-link text-danger text-gradient /px-0 mb-0 passador-do-input" data-bs-toggle="modal" data-input="marcaIdExcluir" data-valor="{{$row->id}}" data-bs-target="#excluirModalMarca">
                      <i class="far fa-trash-alt me-2 h6"></i>
                    </button>
                    <button type="button" class="btn btn-link text-dark px-0 mb-0 passador-do-input" data-input="marcaIdEditar,marcaEditar" data-valor="{{$row->id}},{{$row->marca}}" data-bs-toggle="modal" data-bs-target="#editarModalMarca">
                      <i class="fas fa-pencil-alt text-dark me-2 h6"></i>
                    </button>
                  </span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@include('configProduto.modal.categoriaModais')
@include('configProduto.modal.subcategoriaModais')
@include('configProduto.modal.marcaModais')