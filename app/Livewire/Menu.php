<?php

namespace App\Livewire;

use Livewire\Component;

class Menu extends Component
{
    public $isOpen = false;
    public $menuItems;
    public $showLogin;

    public function mount()
    {
        // Resetar o estado de abertura do menu ao carregar a página
        if(request()->is('/')) {
            $this->isOpen = false; // Garantir que o menu esteja fechado na página inicial
        }
    }

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.menu');
    }
}