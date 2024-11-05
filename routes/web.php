<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;
use App\Http\Middleware\Auth\IsUserLogged;
use App\Http\Controllers\Auth\Amei\AmeiTokenValidate;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('/index', function () {
    return view('pages.index');
})->name('index');

#Rotas de autenticação
Route::get('/auth/amei/token/{token}', [AmeiTokenValidate::class, 'tokenValidate'])->name('AuthTokenAmei');

Route::get('/login', [LoginAD::class, 'login'])->name('Login');
Route::post('/login', [LoginAD::class, 'loginService'])->name('LoginService');