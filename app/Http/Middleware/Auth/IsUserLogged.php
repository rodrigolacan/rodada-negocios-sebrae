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

        if (!$tokenLDAP && !$tokenKeycloak) {
            return Redirect::to('/login');
        }

        try {
            $user = null;

            if ($tokenLDAP) {
                $key = trim(env('APP_KEY'));
                $user = $this->jwtService->decodeHS256($tokenLDAP, $key);
            }


            if ($tokenKeycloak) {
                $keyPath = app_path('Keys/AMEI/public_key.pem');
                $user = $this->jwtService->decodeRS256($tokenKeycloak, $keyPath);
            }


            if (!$user) {
                return Redirect::to('/login');
            }


            $request->attributes->set('user', $user);
        } catch (\Exception $e) {
            return Redirect::to('/login');
            Log::channel('emergency')->warning('Erro ao tentar decodificar token (middleware:IsUserLogged): ' . $e->getMessage());
        }

        return $next($request);
    }
}
