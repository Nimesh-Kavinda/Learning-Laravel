<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// usual method for routing
Route::get('/home', function(){
    return view('home');
});

Route::view('/home','home'); 
// another method to routing

// passing data to view
Route::get('/about/{name}', function($name){
    return view('about',['name'=>$name]);
});

// this is how to rederect a page..this call redirect home page to root page
Route::redirect('/home', '/');