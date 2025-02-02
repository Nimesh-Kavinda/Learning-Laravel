<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;



Route::get('/', function () {
    return view('welcome');
});


Route::view('user', 'user');


Route::post('add', [Usercontroller::class, 'addUser']);














