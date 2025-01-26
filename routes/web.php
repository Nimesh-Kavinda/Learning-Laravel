<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Import the controller

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'getUser']); // Route to the controller method
Route::get('/about/{name}', [UserController::class, 'aboutUser']); // Passing data 

Route::get('admin', [UserController::class, 'adminUser']); // Route to the controller method nested
