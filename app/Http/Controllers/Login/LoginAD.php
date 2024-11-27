<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class LoginAD extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

}
