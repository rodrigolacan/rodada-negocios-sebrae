<?php

namespace App\Http\Middleware\Auth;

use App\Contracts\JWT\JwtContract;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;


class IsUserLogged
{
    protected $jwtService;

    public function __construct(JwtContract $jwtService)
    {
        $this->jwtService = $jwtService;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $tokenLDAP = Cookie::get('CID');
        $tokenKeycloak = Cookie::get('AMCID');

        // Se nenhum token for encontrado, redireciona para o login
        if (!$tokenLDAP && !$tokenKeycloak) {
            return Redirect::to('/login');
        }

        try {
            $user = null;

            // Verifica e decodifica o token LDAP
            if ($tokenLDAP) {
                $key = trim(env('APP_KEY'));
                $user = $this->jwtService->decodeHS256($tokenLDAP, $key);
                // Transforma o objeto em array associativo para unificação
                $user = json_decode(json_encode($user), true);
            }

            // Verifica e decodifica o token do Keycloak
            if ($tokenKeycloak) {
                $keyPath = app_path('Keys/AMEI/public_key.pem');
                $user = $this->jwtService->decodeRS256($tokenKeycloak, $keyPath);
                            // Já é um array, então apenas mantém os dados necessários
                $user = [
                    'sub' => $user['sub'],
                    'email' => $user['email'] ?? null,
                    'name' => $user['name'] ?? null,
                    'exp' => $user['exp'],
                    'iat' => $user['iat'],
                ];
            }

            // Se não conseguiu obter o usuário a partir do token, redireciona para o login
            if (!$user) {
                return Redirect::to('/login');
            }
            // Compartilha o usuário globalmente para todas as views
            View::share('loggedUser', $user);

            // Alternativa: Adiciona o usuário na sessão para componentes Livewire
            session(['loggedUser' => $user]);

            // Adiciona o usuário no request para acesso subsequente
            $request->attributes->set('user', $user);

        } catch (\Exception $e) {
            Log::channel('emergency')->warning('Erro ao tentar decodificar token (middleware:IsUserLogged): ' . $e->getMessage());
            return Redirect::to('/login');
        }

        // Permite que o request siga para o próximo passo no pipeline
        return $next($request);
    }
}