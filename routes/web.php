<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\Agecheck;
use App\Http\Middleware\Countrycheck;

Route::get('/', function () {
    return view('welcome');
});





