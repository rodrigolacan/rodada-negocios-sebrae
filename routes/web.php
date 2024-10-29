<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginAD;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login',[LoginAD::class,'Login'])->name('Login');