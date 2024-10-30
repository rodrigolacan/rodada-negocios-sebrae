<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;
use App\Http\Controllers\Auth\Amei\AmeiAuthenticator;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//Rotas de authenticação
Route::get('auth/amei/{token}', [AmeiAuthenticator::class, 'userAuth'])->name('AuthTokenAmei');

Route::get('/login', [LoginAD::class, 'login'])->name('Login');
Route::post('/login', [LoginAD::class, 'loginService'])->name('LoginService');
