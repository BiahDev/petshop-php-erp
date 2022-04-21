<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Feedbacks extends Component
{
  public $feedback;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($feedback = null)
    {
        $this->feedback = $feedback;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.feedbacks');
    }
}
