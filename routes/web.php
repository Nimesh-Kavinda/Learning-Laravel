<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageController;


Route::get('/', function () {
    return view('welcome');
}); 

Route::view('home', 'home');

Route::view('login', 'login');

Route::get('list', [StudentController::class, 'list']);
















