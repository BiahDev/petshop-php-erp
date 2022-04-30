<x-modais.modal-cadastrar idModalBtn="novaModalCategoria" titulo="Adicionar categoria" :route="route('cadastrarCategoria')">
  <div class="row">
    <x-forms.input col="col-md-12" nameFor="categoria" nome="Nome" max="50" min="3" tipo="text" :value="old('categoria')" />
  </div>
</x-modais.modal-cadastrar>

<x-modais.modal-editar idModalBtn="editarModalCategoria" 
titulo="Editar categoria" :route="route('editarCategoria')" idInputHidden="categoriaIdEditar">
  <div class="row">
    <x-forms.input col="col-md-12" nameFor="categoria" nome="Categoria" max="50" min="3" tipo="text" id="categoriaEditar" />
  </div>
</x-modais.modal-editar>

<x-modais.modal-excluir idModal="excluirModalCategoria" item="categoria" :route="route('excluirCategoria')" idInputHidden="categoriaIdExcluir" />