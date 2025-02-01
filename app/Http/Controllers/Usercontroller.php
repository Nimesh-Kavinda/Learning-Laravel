<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    function get(){
        return "this is get method";
    }

    function post(){
        return "this is psot method";
    }

    function put(){
        return "this is put method";
    }


    function delete(){
        return "this is delete method";
    }


    function any(){
        return "this is any function";
    }

    function group1(){
        return "this is group1 function";
    }

    function group2(){
        return "this is group2 function";
    }

}

