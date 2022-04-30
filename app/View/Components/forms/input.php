<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class input extends Component
{
  public $col, $nameFor, $nome, $class, $value, $tipo, $id, $placeholder, $max, $outras;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($col = null, $nameFor = null, $nome = null, $class = null, $value = null, $tipo = null, $id = null, $placeholder = null, $max = null, $outras = null)
  {
    $this->col = $col;
    $this->nameFor = $nameFor;
    $this->nome = $nome;
    $this->class = $class;
    $this->value = $value;
    $this->tipo = $tipo;
    $this->id = $id;
    $this->placeholder = $placeholder;
    $this->max = $max;
    $this->outras = $outras;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.forms.input');
  }
}
