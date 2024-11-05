<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoSection extends Component
{
    public $title;
    public $icon;
    public $iconAlt;
    public $subtitle;
    public $content;
    public $iconPosition;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $icon, $iconAlt, $subtitle, $content, $iconPosition = 'left')
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->iconAlt = $iconAlt;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->iconPosition = $iconPosition;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.info-section');
    }
}