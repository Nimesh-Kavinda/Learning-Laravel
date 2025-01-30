<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('show', [StudentController::class, 'show']);
Route::get('add', [StudentController::class, 'add']);
Route::get('delete', [StudentController::class, 'delete']);
Route::get('about/{name}', [StudentController::class, 'about']);


Route::controller(StudentController::class)->group(function(){
    Route::get('show','show');
Route::get('add', 'add');
Route::get('delete', 'delete');
Route::get('about/{name}', 'about');
});