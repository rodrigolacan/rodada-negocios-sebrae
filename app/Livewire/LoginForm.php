<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;
use App\Contracts\LDAP\LdapContract;
use App\Contracts\JWT\JwtContract;
use Illuminate\Validation\ValidationException;


class LoginForm extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required|string',
        'password' => 'required|string',
    ];

    protected $messages = [
        'username.required' => 'O campo Usuário é obrigatório.',
        'password.required' => 'O campo Senha é obrigatório.',
    ];

    private LdapContract $ldapService;
    private JwtContract $jwtService;

    public function boot(LdapContract $ldapService, JwtContract $jwtService)
    {
        $this->ldapService = $ldapService;
        $this->jwtService = $jwtService;
    }

    public function login()
    {
        // Validação padrão
        $this->validate();

        // Autenticação LDAP
        if (!$this->ldapService->isAuthenticate($this->username, $this->password)) {
            // Adiciona erro ao sistema de validação padrão
            throw ValidationException::withMessages([
                'username' => 'Usuário ou senha incorretos.',
            ]);
        }

        // Obtém os dados do usuário
        $userData = $this->ldapService->getUserData($this->username);

        // Gera o JWT
        $key = trim(env('APP_KEY'));
        $payload = $this->jwtService->encodeHS256($userData, $key);

        // Salva o token JWT nos cookies
        Cookie::queue('CID', $payload, 60); // 60 minutos

        // Redireciona após login bem-sucedido
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}