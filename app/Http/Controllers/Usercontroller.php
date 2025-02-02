<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function addUser(Request $request){

        $request = session()->flash("message", 'User added succesfully');
        $request = session()->flash("name", 'Nimesh');




        // store user data in DB



        return redirect('user');
    }
}
