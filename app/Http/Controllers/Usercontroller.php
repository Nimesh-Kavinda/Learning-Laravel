<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    function login(Request $req){
        $req->session()->put('user',  $req->input('user'));
        $req->session()->put('user',  $req->input());
  

        return redirect('profile');
    }

    function logout(){
        session() -> pull('user');
        return redirect('profile');
    }
}
