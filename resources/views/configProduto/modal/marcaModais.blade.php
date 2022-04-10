<!-- NOVA MARCA -->
<div class="modal fade" id="novaModalMarca" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar marca</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('cadastrarMarca')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome da Marca" name="marca">
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

<!-- EDITAR MARCA -->
<div class="modal fade" id="editarModalMarca" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar marca</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('editarMarca')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Novo nome da Marca"
                                    id="marcaEditar" name="marca">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="marcaIdEditar" name="id">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn bg-gradient-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- REMOVER UMA MARCA -->
<div class="col-md-4">
    <div class="modal fade" id="excluirModalMarca" tabindex="-1" role="dialog" aria-labelledby="modal-notification"
        aria-hidden="true">
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
                        <p>Você realmente deseja excluir essa <strong>Marca</strong>? <br> Essa ação é irreversível</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="{{route('excluirMarca')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="marcaIdExcluir">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                        <button type="button" class="btn btn-link text-primary ml-auto"
                        data-bs-dismiss="modal">Fechar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
