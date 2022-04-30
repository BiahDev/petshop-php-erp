<?php

namespace App\View\Components\modais;

use Illuminate\View\Component;

class modalCadastrar extends Component
{
  public $idModalBtn, $titulo, $route, $slot;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($idModalBtn =  null, $titulo =  null, $route =  null, $slot =  null)
  {
    $this->idModalBtn = $idModalBtn;
    $this->titulo = $titulo;
    $this->route = $route;
    $this->slot = $slot;

  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.modais.modal-cadastrar');
  }
}
