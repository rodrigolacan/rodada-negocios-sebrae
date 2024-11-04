<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
    public $desktopLogo;
    public $mobileLogo;

    public function __construct($desktopLogo = 'img/logo-conectabiz.svg', $mobileLogo = 'img/logo-conectabiz-mobile.svg')
    {
        $this->desktopLogo = $desktopLogo;
        $this->mobileLogo = $mobileLogo;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.logo');
    }
}
