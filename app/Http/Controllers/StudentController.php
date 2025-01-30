<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        return "list of Students";
    }

    function add(){
        return "ADD Students";
    }

    function delete(){
        return "Delete Students";
    }

    function about($name){
        return $name;
    }

}
