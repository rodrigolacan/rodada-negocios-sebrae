<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    public $bannerImage;
    public $bannerAlt;
    public $logo;
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($bannerImage, $bannerAlt, $logo, $title, $description)
    {
        $this->bannerImage = $bannerImage;
        $this->bannerAlt = $bannerAlt;
        $this->logo = $logo;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.banner');
    }
}