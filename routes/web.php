<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;


Route::middleware('setlang')->group(function(){


Route::get('/', function () {
    return view('welcome');
});

// Route::view ('about', 'about');

// Route::get('/about/{lang}', function($lang){
//     App::setlocale($lang);
//     return view('about');
// });

Route::view('about', 'about');


Route::get('/setlang/{lang}', function($lang){
    Session::put('lang', $lang);
    return redirect('/');
});


});














