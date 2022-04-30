@extends('layout')


@section('pagina')
Clientes
@endsection
@section('subpagina')
@endsection


@section('conteudo')

<div class="row">
  <x-card-icon colunas="col-xl-3 col-sm-6" bgIcon="bg-gradient-primary" dado="R$1456,00" textIcon="ni ni-world" titulo="Saldo do mês" footer="no último ano" />

  <x-card-icon colunas="col-xl-3 col-sm-6" bgIcon="bg-gradient-danger" dado="20" textIcon="ni ni-money-coins" titulo="Último produto vendido" footer="no último ano" />

  <x-card-icon colunas="col-xl-3 col-sm-6" bgIcon="bg-gradient-success" dado="20" textIcon="ni ni-cart" titulo="Produto menos comprado" footer="no último ano" />

  <x-card-icon colunas="col-xl-3 col-sm-6" bgIcon="bg-gradient-warning" dado="20" textIcon="ni ni-paper-diploma" titulo="Total de clientes" footer="no último ano" />
</div>

<x-feedbacks :feedback="$feedbackUsuario" />

<div class="row py-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-3">Clientes</h6>
          </div>
          <div class="col-6 text-end">
            <x-btn-principal tipo="link" texto="Novo Cliente" textoIcon="fas fa-plus" link="{{url('/cliente/cadastro')}}" />
          </div>
        </div>
      </div>
      <div class="card-body">
        <table style="width:100%" class="table table-responsive align-items-center nowrap index">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                Nome
              </th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">
                Telefone
              </th>
              <th class="text-uppercase text-secondary  text-xs font-weight-bolder opacity-7 text-center">
                N° de compras
              </th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-center">
                Total consumido
              </th>
              <th class="text-uppercase text-secondary text-xs  font-weight-bolder opacity-7 text-center">
                Ações
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clientes as $cliente)
            <tr>
              <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold px-3">
                  {{$cliente->nome}}
                </span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold text-center">
                  {{$cliente->telefone}}
                </span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold text-center">
                  2
                </span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold text-center">
                  R$ 100,00
                </span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">
                  <a href="cliente/excluir/{{$cliente->id}}" class="btn btn-link text-danger text-gradient px-0 mb-0 passador-do-input passador-do-input-html" data-input="clienteIdExcluir" data-valor="{{$cliente->id}}" data-inputhtml="idValorItem" data-valorhtml="{{$cliente->nome}}" data-bs-toggle="modal" data-bs-target="#excluirModalCliente">
                    <i class="far fa-trash-alt me-2 h6"></i>
                  </a>
                  <a href="cliente/editar/{{$cliente->id}}" class="btn btn-link text-dark px-0 mb-0">
                    <i class="fas fa-pencil-alt text-dark me-2 h6"></i>
                  </a>
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
@endsection

<x-modais.modal-excluir idModal="excluirModalCliente" titulo="Preciso da sua atenção" item="cliente" :route="route('excluirCliente')" idInputHidden="clienteIdExcluir" />