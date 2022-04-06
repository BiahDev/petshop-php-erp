<!-- NOVA SUBCATEGORIA -->
<div class="modal fade" id="novaModalSubCategoria" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar SubCategoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Categoria</label>
                                <select class="form-control" name="id_categoria">
                                    <option value="1">Limpeza</option>
                                    <option value="2">Alimentação</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" placeholder="Nome da SubCategoria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn bg-gradient-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- EDITAR SUBCATEGORIA -->
<div class="modal fade" id="editarModalSubCategoria" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar SubCategoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Categoria</label>
                                <select class="form-control" name="id_categoria">
                                    <option value="1">Limpeza</option>
                                    <option value="2">Alimentação</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" placeholder="Novo nome da SubCategoria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn bg-gradient-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- REMOVER UMA SUBCATEGORIA -->
<div class="col-md-4">
  <div class="modal fade" id="excluirModalSubCategoria" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
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
            <p>Você realmente deseja excluir essa <strong>SubCategoria</strong>? <br> Essa ação é irreversível</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger">Excluir</button>
          <button type="button" class="btn btn-link text-primary ml-auto" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>