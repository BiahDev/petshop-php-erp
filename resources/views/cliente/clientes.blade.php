@extends('layout')


@section('pagina')
Clientes
@endsection
@section('subpagina')
@endsection


@section('conteudo')




<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total de clientes</p>
              <h5 class="font-weight-bolder">
                10
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">+55%</span>
                since yesterday
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Produto mais comprado</p>
              <h5 class="font-weight-bolder">
                2,300
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">+3%</span>
                since last week
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Último produto vendido</p>
              <h5 class="font-weight-bolder">
                +3,462
              </h5>
              <p class="mb-0">
                <span class="text-danger text-sm font-weight-bolder">-2%</span>
                since last quarter
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Produto menos comprado</p>
              <h5 class="font-weight-bolder">
                $103,430
              </h5>
              <p class="mb-0">
                <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<x-feedbacks :feedback="$feedbackUsuario"/>

<div class="row py-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-3">Clientes</h6>
          </div>
          <div class="col-6 text-end">
            <a class="btn bg-gradient-primary mb-3" href="/cliente/cadastro"><i class="fas fa-plus"></i>&nbsp;&nbsp;Novo Cliente</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table id="example" width="100%" class="table table-responsive align-items-center">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 pl-2">
                Nome
              </th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 pl-2">
                Telefone
              </th>
              <th class=" text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                N° de compras
              </th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 pl-2">
                Total consumido
              </th>
              <th class=" text-uppercase text-secondary text-xs  font-weight-bolder opacity-7 ps-2">
                Ações
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clientes as $cliente )
            <tr>
              <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold px-3">
                  {{$cliente->nome}}
                </span>
              </td>
              <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold">
                  {{$cliente->telefone}}
                </span>
              </td>
              <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold">
                  2
                </span>
              </td>
              <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold">
                  R$ 100,00

                </span>
              </td>
              <td class="align-middle">
                <span class="text-secondary text-xs font-weight-bold">
                  <a href="cliente/excluir/{{$cliente->id}}" class="btn btn-link text-danger text-gradient px-0 mb-0 passador-do-input" data-input="clienteIdExcluir" data-valor="{{$cliente->id}}" data-bs-toggle="modal" data-bs-target="#excluirModalCliente">
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

<script>

</script>

<!-- REMOVER UM PRODUTO -->
<div class="col-md-4">
  <div class="modal fade" id="excluirModalCliente" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Preciso da sua atenção</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="text-gradient text-danger mt-4">Leia antes de tomar uma decisão!</h4>
            <p>Você realmente deseja excluir o cliente <br>
              <strong>nome do cliente</strong>?
              <br> Essa ação é irreversível</p>
          </div>
        </div>
        <div class="modal-footer">
          <form action="{{route('excluirCliente')}}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" id="clienteIdExcluir">
            <button type="submit" class="btn btn-danger">
              Excluir
            </button>
            <button type="button" data-bs-dismiss="modal" class="btn btn-link text-primary ml-auto">
              Fechar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>