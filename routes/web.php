<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('/index', function () {
    return view('pages.index');
})->name('index');


Route::get('/login', [LoginAD::class, 'login'])->name('Login');
Route::post('/login', [LoginAD::class, 'loginService'])->name('LoginService');