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
        'skills'=>'required'
    ]);
    return $req;
    
   }

}
