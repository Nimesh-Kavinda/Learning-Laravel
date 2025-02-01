<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;



Route::get('/', function () {
    return view('welcome');
});


Route::view('login', 'login');
Route::view('profile', 'profile');

Route::post('login', [Usercontroller::class, 'login']);
Route::get('logout', [Usercontroller::class, 'logout']);














