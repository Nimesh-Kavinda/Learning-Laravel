<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('add', 'add-student');

Route::post('add-student',[StudentController::class, 'add']);
















