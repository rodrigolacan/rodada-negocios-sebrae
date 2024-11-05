<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $icon;
    public $alt;
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $alt, $text)
    {
        $this->icon = $icon;
        $this->alt = $alt;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
