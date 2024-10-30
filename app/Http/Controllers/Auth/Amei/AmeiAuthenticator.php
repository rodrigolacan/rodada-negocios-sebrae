<?php

namespace App\Http\Controllers\Auth\Amei;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmeiAuthenticator extends Controller
{
    public function userAuth($token)
    {
        echo "aqui está o token: " . $token;
    }
}
