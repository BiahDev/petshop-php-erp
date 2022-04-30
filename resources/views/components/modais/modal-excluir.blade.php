<div class="col-md-4">
  <div class="modal fade" id="{{$idModal}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">
            Preciso da sua atenção
          </h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="text-gradient text-danger mt-4">Leia antes de tomar uma decisão!</h4>
            <p>
              Você realmente deseja excluir o {{$item}}
              <br>
              <strong id="idValorItem"></strong> ?
              <br>
              Essa ação é irreversível
            </p>
          </div>
        </div>
        <div class="modal-footer">
          <form action="{{$route}}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" id="{{$idInputHidden}}"/>
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