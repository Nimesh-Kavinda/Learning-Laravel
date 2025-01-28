<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
   function addUser(Request $req){
    echo $req->city;
    print_r($req->skills);
    
   }

}
