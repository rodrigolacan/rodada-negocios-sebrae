<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Traits\HandlesLogout;

class LoginAD extends Controller
{
    use HandlesLogout;

    public function login()
    {
        // Limpa a sessão e cookies usando a trait
        $this->clearAuthSession();
        // Exibe a página de login
        return view('pages.login');
    }
}