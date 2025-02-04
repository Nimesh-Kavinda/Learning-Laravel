<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Str;



Route::get('/', function () {
    return view('welcome');
}); 


Route::get('send-email', [MailController::class,('sendEmail')]);
















