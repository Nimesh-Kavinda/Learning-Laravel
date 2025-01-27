<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function userHome(){
        $name = 'Nimesh';
        $users = ['kavinda', 'nimesh', 'saman'];
        return view('home', ['name' => $name, 'users' => $users]);
    }

}
