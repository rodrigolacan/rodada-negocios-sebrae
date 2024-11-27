<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        // Remover o cookie 'CID'
        Cookie::queue(Cookie::forget('CID'));
        
        // Deslogar o usuário
        Auth::logout();
        
        // Redirecionar para a página de login (ou outra página)
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.logout');
    }
}