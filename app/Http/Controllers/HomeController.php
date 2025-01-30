<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function show(){
        // return redirect()->to('home/profile/user');
        return to_route('hm');
    }
}
