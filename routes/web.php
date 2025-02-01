<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;



Route::get('/', function () {
    return view('welcome');
});


// Route::get('user', [Usercontroller::class, 'any']);
// Route::post('user', [Usercontroller::class, 'any']);
// Route::put('user', [Usercontroller::class, 'any']);
// Route::delete('user', [Usercontroller::class, 'any']);

// Route::any('user', [Usercontroller::class, 'any']);

Route::match(['get', 'post'], 'user', [Usercontroller::class, 'group1']);
Route::match(['delete', 'put'], 'user', [Usercontroller::class, 'group2']);


Route::view('form', 'user');










