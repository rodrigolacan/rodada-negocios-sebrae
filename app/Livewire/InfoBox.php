<?php

namespace App\Livewire;

use Livewire\Component;

class InfoBox extends Component
{
    public $icon;
    public $alt;
    public $text;

    public function render()
    {
        return view('livewire.info-box');
    }
}