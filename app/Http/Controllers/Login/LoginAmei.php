<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAmei extends Controller
{
    public function loginAmei()
    {
        return view('Login.Amei.Login');
    }
}
