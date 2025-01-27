<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;// Import the controller

Route::get('/', function () {
    return view('welcome');
});

// Route::view('home', 'home');


Route::get('home', [UserController::class, 'userHome']);
Route::get('about', [UserController::class, 'userAbout']);
