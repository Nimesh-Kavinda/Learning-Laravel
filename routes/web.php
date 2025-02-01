<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;



Route::get('/', function () {
    return view('welcome');
});


Route::get('user', [Usercontroller::class, 'get']);
Route::post('user', [Usercontroller::class, 'post']);
Route::put('user', [Usercontroller::class, 'put']);
Route::delete('user', [Usercontroller::class, 'delete']);

Route::view('form', 'user');










