<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;





Route::get('/', function () {
    return view('welcome');
});

Route::view ('about', 'about');















