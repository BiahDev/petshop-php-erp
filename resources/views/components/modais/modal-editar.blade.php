
<div class="modal fade" id="{{$idModalBtn}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{$titulo}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{$route}}" method="post">
        @csrf
        <div class="modal-body">
          {{$slot}}
        </div>
        <div class="modal-footer">
          <input type="text" name="id" id="{{$idInputHidden}}">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn bg-gradient-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>