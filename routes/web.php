<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;// Import the controller

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form','user-form');
Route::post('adduser',[UserController::class,'addUser']);// Call the function from the controller
