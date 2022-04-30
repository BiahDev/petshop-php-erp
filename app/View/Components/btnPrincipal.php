<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btnPrincipal extends Component
{
  public $tipo, $link, $texto, $textoIcon;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct(
    $tipo = false,
    $link = null,
    $texto = null,
    $textoIcon = null
  ) {
    $this->tipo = $tipo;
    $this->link = $link;
    $this->texto = $texto;
    $this->textoIcon = $textoIcon;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.btn-principal');
  }
}
