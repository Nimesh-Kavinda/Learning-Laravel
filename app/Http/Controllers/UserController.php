<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
   function addUser(Request $req){
    $req->validate([
        'name'=>'required | min:3 | max:20',
        'email'=>'required|email',
        'city'=>'required',
    ], [
        'name.required'=>'Name cannot be empty',
        'name.min'=> 'Name must be at least 3 characters',
        'name.max' => 'Name must be at most 20 characters',
        'email.email'=>'Not a valid email',
    ]);
    return $req;
    
   }

}
