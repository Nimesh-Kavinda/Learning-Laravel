<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function show(){
      return "Show Student list";
    }

    function add(){
        return "Add Student";
    }
}
