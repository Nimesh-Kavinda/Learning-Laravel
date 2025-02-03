<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('about', 'about');
Route::view('login', 'login');
Route::view('admin', 'admin');















