<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('home/profile/user','home')->name('hm');
// name routing

Route::view('home/profile/user','home')->name('hm');

Route::get('show',[HomeController::class,'show']);

