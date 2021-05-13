<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BasketPopup extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * The basket content.
     *
     * @var array
     */
    public $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.basket-popup');
    }
}