<?php

namespace App\Http\Middleware\Auth;

use App\Contracts\JWT\JwtContract;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;


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
            }

            // Verifica e decodifica o token do Keycloak
            if ($tokenKeycloak) {
                $keyPath = app_path('Keys/AMEI/public_key.pem');
                $user = $this->jwtService->decodeRS256($tokenKeycloak, $keyPath);
            }

            // Se não conseguiu obter o usuário a partir do token, redireciona para o login
            if (!$user) {
                return Redirect::to('/login');
            }

            // Adiciona as informações do usuário no request para o próximo middleware ou controlador
            $request->attributes->set('user', $user);

        } catch (\Exception $e) {
            Log::channel('emergency')->warning('Erro ao tentar decodificar token (middleware:IsUserLogged): ' . $e->getMessage());
            return Redirect::to('/login');
        }

        // Permite que o request siga para o próximo passo no pipeline
        return $next($request);
    }
}
