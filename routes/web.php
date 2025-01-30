<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('student/home', 'home');

// Route::get('student/show', [HomeController::class, 'show']);
// Route::get('student/add', [HomeController::class, 'add']);

Route::prefix('student')->group(function(){
   Route::view('/home', 'home');
   Route::get('/show', [HomeController::class, 'show']);
   Route::get('/add', [HomeController::class, 'add']);

});

// This is the Prefix route group of above single routes