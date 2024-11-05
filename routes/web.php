<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;
use App\Http\Middleware\Auth\IsUserLogged;
use App\Http\Controllers\Auth\Amei\AmeiTokenValidate;
use App\Http\Controllers\Pages\Index\IndexController;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('/index', [IndexController::class, 'index'])->name('index')->middleware(IsUserLogged::class);

#Rotas de autenticação
Route::get('/auth/amei/token/{token}', [AmeiTokenValidate::class, 'tokenValidate'])->name('AuthTokenAmei');

Route::get('/login', [LoginAD::class, 'login'])->name('Login');
Route::post('/login', [LoginAD::class, 'loginService'])->name('LoginService');