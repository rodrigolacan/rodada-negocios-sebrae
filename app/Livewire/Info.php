<?php

namespace App\Livewire;

use Livewire\Component;

class Info extends Component
{
    public $title;
    public $icon;
    public $iconAlt;
    public $subtitle;
    public $content;
    public $iconPosition;

    // Remover o __construct, e adicionar o método mount
    public function mount($title, $icon, $iconAlt, $subtitle, $content, $iconPosition = 'left')
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->iconAlt = $iconAlt;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->iconPosition = $iconPosition;
    }
    
    public function render()
    {
        return view('livewire.info');
    }
}