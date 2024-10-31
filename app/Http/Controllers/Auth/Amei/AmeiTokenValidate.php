<?php

namespace App\Http\Controllers\Auth\Amei;

use App\Contracts\JWT\JwtContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cookie;


class AmeiTokenValidate extends Controller
{
    protected $jwtService;
    public function __construct(JwtContract $jwtService)
    {
        $this->jwtService = $jwtService;
    }
    public function tokenValidate($token)
    {
        $keyPath = app_path('Keys/AMEI/public_key.pem');

        try {
            $tokenDecoded = $this->jwtService->decode($token, $keyPath);
            // Extrai o tempo de expiração do token
            $expTime = $tokenDecoded['exp']; // Timestamp Unix
            $currentTimestamp = time(); // Timestamp atual

            // Calcula a diferença entre o tempo de expiração e o timestamp atual
            $cookieExpiration = $expTime - $currentTimestamp;

            // Define a expiração do cookie com a mesma duração do token
            Cookie::queue('JTI', strval($tokenDecoded['jti']), $cookieExpiration);
            Cookie::queue('CID', strval($token), $cookieExpiration);

            return redirect()->route('welcome');
            return;
        } catch (\Exception $e) {
            Log::channel('jwt')->error('Token inválido ou erro ao decodificar (Log do controller): ' . $e->getMessage());
        }
    }
}
