<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\LDAP\LdapContract;
use Illuminate\Support\Facades\Cookie;


class LoginAD extends Controller
{
    protected $ldapService;

    public function __construct(LdapContract $ldapService)
    {
        $this->ldapService = $ldapService;
    }

    public function login(Request $request)
    {
        return view('LoginActiveDirectory.Login');
    }

    public function loginService(Request $request)
    {
        // capturar o usuário e password
        $username = $request->username; #id do elemento html
        $password = $request->password; #id do elemento html

        if ($this->ldapService->isAuthenticate($username, $password) == false) {
            return redirect()->route('Login')->withErrors(['INVALID_USER' => 'Usuário ou senha incorretos']);
        }

        Cookie::queue('CID', strval($username), 60);

        return redirect()->route('welcome');
    }
}
