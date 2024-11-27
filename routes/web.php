<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;
use App\Http\Middleware\Auth\IsUserLogged;
use App\Http\Controllers\Auth\Amei\AmeiTokenValidate;
use App\Http\Controllers\Pages\Index\IndexController;
use App\Traits\HandlesLogout;

Route::get('/', function () {
    // Criar uma instância de uma classe anônima que usa a trait HandlesLogout
    $logoutHandler = new class {
        use HandlesLogout;
    };

    // Chama o método clearAuthSession() da trait
    $logoutHandler->clearAuthSession();

    // Retorna para a página de boas-vindas
    return view('pages.welcome');
})->name('welcome');

Route::get('/index', [IndexController::class, 'index'])->name('index')->middleware(IsUserLogged::class);

#Rotas de autenticação
Route::get('/auth/amei/token/{token}', [AmeiTokenValidate::class, 'tokenValidate'])->name('AuthTokenAmei');

Route::get('/login', [LoginAD::class, 'login'])->name('login');
Route::post('/login', [LoginAD::class, 'loginService'])->name('LoginService');