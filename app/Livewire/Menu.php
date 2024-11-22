<?php

namespace App\Livewire;

use Livewire\Component;

class Menu extends Component
{
    public $isOpen = false;
    public $menuItems = [];
    public $showLogin = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }


    public function render()
    {
        return view('livewire.menu');
    }
}