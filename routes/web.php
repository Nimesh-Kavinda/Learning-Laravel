<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\Agecheck;
use App\Http\Middleware\Countrycheck;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home')->middleware([Agecheck::class, Countrycheck::class]);
Route::view('about', 'about')->middleware([Agecheck::class, Countrycheck::class]);





