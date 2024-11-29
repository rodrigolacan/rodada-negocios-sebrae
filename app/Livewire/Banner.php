<?php

namespace App\Livewire;

use Livewire\Component;

class Banner extends Component
{
    public $bannerImage;
    public $bannerAlt;
    public $logo;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.banner');
    }
}