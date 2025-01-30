<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home')->middleware('check1');
// Route::view('about', 'about')->middleware('check1');


Route::middleware('check1')->group(function(){
    Route::view('about', 'about');
    Route::view('list', 'about');
    Route::view('contact', 'about');
    Route::view('user', 'about');
});

// Route::view('about', 'about');
// Route::view('list', 'about');
// Route::view('contact', 'about');
// Route::view('user', 'about');
