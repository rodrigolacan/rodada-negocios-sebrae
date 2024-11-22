<?php

namespace App\Livewire;

use Livewire\Component;

class Menu extends Component
{
    public $isOpen = false;
    public $menuItems = [];
    public $showLogin = false;

    public function render()
    {
        return view('livewire.menu');
    }
}