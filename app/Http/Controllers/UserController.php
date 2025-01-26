<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        // return "This is Nimesh Kavinda";
        return view('user'); // Return the view
    }

    function aboutUser($name){
        // return "Nimesh is 24 years old ".$name; // Passing data to the controller
        return view('about', ['name' => $name]);
    }

    function adminUser(){
        return view('admin.login');
    }
}
