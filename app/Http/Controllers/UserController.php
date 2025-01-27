<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function addUser(Request $req){
        echo $req->input('name');
        echo "</br>";
        echo $req->city;
        echo "</br>";
        echo "user Email is $req->email";
    }

}
