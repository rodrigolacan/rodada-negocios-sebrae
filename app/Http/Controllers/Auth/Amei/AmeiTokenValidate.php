<?php

namespace App\Http\Controllers\Auth\Amei;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AmeiTokenValidate extends Controller
{
    public function tokenValidate($token)
    {
        $keyPath = app_path('Keys/AMEI/public_key.pem');

        $publicKeyPEM = file_get_contents($keyPath);

        $decoded = JWT::decode($token, new Key($publicKeyPEM, 'RS256'));
        $decoded_array = (array) $decoded;
        echo "<pre>" . print_r($decoded_array, true) . "</pre>";
    }
}
