<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;
use App\Http\Middleware\Auth\IsUserLogged;
use App\Http\Controllers\Auth\Amei\AmeiTokenValidate;
use App\Http\Controllers\Pages\Index\IndexController;

Route::get('/', function () {
    return view('pages.welcome-pages.welcome');
})->name('welcome');

Route::get('/login-selection', function () {
    return view('pages.login-pages.login_selection');
})->name('login_selection');

Route::get('/index', [IndexController::class, 'index'])->name('index')->middleware(IsUserLogged::class);

#Rotas de autenticação
Route::get('/auth/amei/token/{token}', [AmeiTokenValidate::class, 'tokenValidate'])->name('AuthTokenAmei');

Route::get('/login', [LoginAD::class, 'login'])->name('login');
Route::post('/login', [LoginAD::class, 'loginService'])->name('LoginService');