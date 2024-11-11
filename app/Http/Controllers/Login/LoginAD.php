<?php

namespace App\Http\Controllers\Login;

use App\Contracts\JWT\JwtContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\LDAP\LdapContract;
use Illuminate\Support\Facades\Cookie;


class LoginAD extends Controller
{
    protected $ldapService;
    protected $jwtService;

    public function __construct(LdapContract $ldapService, JwtContract $jwtService)
    {
        $this->ldapService = $ldapService;
        $this->jwtService = $jwtService;
    }

    public function login(Request $request)
    {
        return view('pages.login-pages.login');
    }

    public function loginService(Request $request)
    {
        // capturar o usuário e password
        $username = $request->username; #id do elemento html
        $password = $request->password; #id do elemento html

        if ($this->ldapService->isAuthenticate($username, $password) == false) {
            return redirect()->route('Login')->withErrors(['INVALID_USER' => 'Usuário ou senha incorretos']);
        }

        $userData = $this->ldapService->getUserData($username);

        $key = trim(env('APP_KEY'));

        $payload = $this->jwtService->encodeHS256($userData, $key);

        Cookie::queue('CID', $payload, time() + 3600 / 60);

        return redirect()->route('index');
    }
}
