<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardIcon extends Component
{
  public $colunas, $bgIcon, $textIcon, $titulo, $dado, $footer;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($colunas = null, $bgIcon = null, $textIcon = null, $titulo = null, $dado = null, $footer = null)
  {
    $this->colunas = $colunas;
    $this->bgIcon = $bgIcon;
    $this->textIcon = $textIcon;
    $this->titulo = $titulo;
    $this->dado = $dado;
    $this->footer = $footer;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.card-icon');
  }
}
