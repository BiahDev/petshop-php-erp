<?php

namespace App\View\Components\modais;

use Illuminate\View\Component;

class modalEditar extends Component
{
  public $idModalBtn, $titulo, $route, $slot, $idInputHidden;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($idModalBtn =  null, $titulo =  null, $route =  null, $slot =  null, $idInputHidden = null)
  {
    $this->idModalBtn = $idModalBtn;
    $this->titulo = $titulo;
    $this->route = $route;
    $this->slot = $slot;
    $this->idInputHidden = $idInputHidden;
  }
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.modais.modal-editar');
  }
}
