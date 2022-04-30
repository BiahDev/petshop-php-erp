<?php

namespace App\View\Components\modais;

use Illuminate\View\Component;

class modalExcluir extends Component
{

  public $idModal, $item, $route, $idInputHidden;

  /**
   * Create a new component instance.
   *
   * @return void
   */

  public function __construct($idModal = null, $item = null, $route = null, $idInputHidden = null)
  {
    $this->idModal = $idModal;
    $this->item = $item;
    $this->route = $route;
    $this->idInputHidden = $idInputHidden;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.modais.modal-excluir');
  }
}
