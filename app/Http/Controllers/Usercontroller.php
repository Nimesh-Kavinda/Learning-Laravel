<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class Usercontroller extends Controller
{
    //
    function login(Request $request){
       echo $request->method();
       echo "<br/>";

       echo $request->path();  // form action
       echo "<br/>";

       echo $request->input('username');
       echo "<br/>";

       
       echo $request->input('password');
       echo "<br/>";

       print_r($request->input());

       echo "<br/>";
       echo "<br/>";

       print_r($request->collect());
       echo "<br/>";
       echo "<br/>";

       echo $request->ip();

       echo "<br/>";
       echo "<br/>";


       if($request-> method('psot')){
        echo "this is post method";
       } else {
        echo "this is another requset";
       }

       echo "<br/>";
       echo "<br/>";

       if($request-> is('user')){
        echo "this is user requset";
       } else {
        echo "this is not user requset";
       }

    }

}

