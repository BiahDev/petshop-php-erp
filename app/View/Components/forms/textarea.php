<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class textarea extends Component
{
  public $col, $nameFor, $nome , $max , $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($col = null, $nameFor = null, $nome = null, $max = null, $value = null)
    {
        $this->col = $col;
        $this->nameFor = $nameFor;
        $this->nome = $nome;
        $this->max = $max;
        $this->value = $value;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.textarea');
    }
}
