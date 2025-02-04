<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Str;



Route::get('/', function () {
    return view('welcome');
}); 


Route::get('device/{key:name}', [DeviceController::class,('index')]);
















