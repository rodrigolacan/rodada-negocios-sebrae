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
        'username' => 'required|string|max:255',
        'password' => 'required|string|min:8|max:64', // Adjust length based on your needs
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

        $key = trim(env('APP_KEY'));

        $payload = [
            'sub' => $userData['sub'],  // Acessa 'sub' que é o nome de usuário ou outro identificador
            'email' => $userData['email'],  // Acessa o e-mail do usuário
            'name' => $userData['name'],  // Acessa o nome do usuário
            'exp' => now()->addHours(1)->timestamp,  // Define a expiração do token
            'iat' => now()->timestamp,  // Define o timestamp de criação do token
        ];

        $token = $this->jwtService->encodeHS256($payload, $key);

        Cookie::queue(Cookie::make('CID', $token, 60, null, null, true, true, false, 'Strict'));

        // Redireciona após login bem-sucedido
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}