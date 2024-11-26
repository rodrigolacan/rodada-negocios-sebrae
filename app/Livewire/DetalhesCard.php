<?php

namespace App\Livewire;

use Livewire\Component;

class DetalhesCard extends Component
{
    public $isOpen = false;

    protected $listeners = ['openModal'];

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.detalhes-card');
    }
}
