<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public $menuItems;
    public $showLogin;

    /**
     * Create a new component instance.
     *
     * @param array $menuItems
     * @param bool $showLogin
     */
    public function __construct(array $menuItems, bool $showLogin)
    {
        $this->menuItems = $menuItems;
        $this->showLogin = $showLogin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.menu');
    }
}