<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public function verDetalhes()
    {
        $this->dispatch('openModal');
    }

    public function agendarReuniao()
    {
        $this->dispatch('abrirModalReuniao');
    }


    public function render()
    {
        return view('livewire.card');
    }
}
