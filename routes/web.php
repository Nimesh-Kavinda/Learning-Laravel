<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Import the controller

Route::get('/', function () {
    return view('welcome');
});

