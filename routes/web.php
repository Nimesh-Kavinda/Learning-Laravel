<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [Usercontroller::class, 'users']);

Route::view('users-new', 'users');





