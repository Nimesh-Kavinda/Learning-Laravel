<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    function queries(){
        $response = DB::table('users')->get(); 

        // $response = DB::table('users')->where('phone','12345')->get(); 

        // $response = DB::table('users')->first(); 
        // $response=[$response];

        // $response = DB::table('users')->insert([
        //     'name' => 'maduka',
        //     'email' => 'madu@gmail.com',
        //     'phone' => '789456'
        // ]); 

        //     if($response){
        //         echo 'data inserted';
        //     } else {
        //         echo 'data not inserted';
        //     }

        // $response = DB::table('users')->where('name', 'maduka')->update(['phone' => '0778525115']); 

        //      if($response){
        //         echo 'data updated';
        //     } else {
        //         echo 'data not updated';
        //     }

        //  $response = DB::table('users')->where('name', 'maduka')->delete(); 

        //      if($response){
        //         echo 'data deleted';
        //     } else {
        //         echo 'data not deleted';
        //     }


        return view('users',['data'=>$response]);
    }
}
