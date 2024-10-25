<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SebraeUsers extends Controller
{
    public function Login(SebraeUsersLoginRequest $request){
        $request->validated();
        return view('login.SebraeUsers.Login');
    }
}
