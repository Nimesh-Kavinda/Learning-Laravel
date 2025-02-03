<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('add', 'add-student');


Route::post('add-student',[StudentController::class, 'add']);
Route::get('list-student',[StudentController::class, 'list']);
Route::get('delete/{id}',[StudentController::class, 'delete']);
Route::get('edit/{id}',[StudentController::class, 'edit']);

Route::put('edit-student/{id}',[StudentController::class, 'editStudent']);

Route::get('search', [StudentController::class, 'search']);

Route::post('delete-multi', [StudentController::class, 'deleteMultiple']);


Route::view('upload', 'upload');
Route::view('display', 'display');

Route::post('upload', [ImageController::class, 'upload']);

Route::get('img-list', [ImageController::class, ('list')]);














