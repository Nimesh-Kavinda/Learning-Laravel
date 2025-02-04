<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Str;



Route::get('/', function () {
    return view('welcome');
}); 


Route::post('send-email', [MailController::class,('sendEmail')]);

Route::view('send-email', 'send-email');
















