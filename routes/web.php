<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Str;



Route::get('/', function () {
    return view('welcome');
}); 


$data = "hi, lets's learn laravel";

// $data = Str::ucfirst($data);
// $data = Str::replaceFirst("Hi", "Hello", $data);
// $data = Str::camel($data);

$data = Str::of($data)
                ->ucfirst($data)
                ->replaceFirst("Hi", "Hello", $data);
                

echo $data;
















