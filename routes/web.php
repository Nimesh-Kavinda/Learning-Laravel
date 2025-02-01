<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;



Route::get('/', function () {
    return view('welcome');
});


Route::view('form', 'user');

Route::post('user', [Usercontroller::class, 'login']);











