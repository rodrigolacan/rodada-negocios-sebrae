<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;

Route::get('/', function () {
    return view('layouts.index');
})->name('welcome');


Route::get('/login', [LoginAD::class, 'login'])->name('Login');
Route::post('/login', [LoginAD::class, 'loginService'])->name('LoginService');
