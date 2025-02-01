<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function queries(){
        // $response = User::get();
        // $response = User::all();

        // $response = User::where('phone', '12345')->get();

        // $response = User::first();
        // $response = User::find(1);
        // $response = [$response];

        // $response = User::insert([
        //     'name' => 'Nipuni',
        //     'email' => 'nimpu@gmail.com',
        //     'phone' => '12345'
        // ]);

        // if($response){
        //     return "data Inserted";
        // } else {
        //     return "data not insterd";
        // }

        // $response = User::where('name', 'Nipuni')->update(['phone'=>'5885111']);

        // if($response){
        //     return "data Updated";
        // } else {
        //     return "data not Updated";
        // }

        $response = User::where('name', 'Nipuni')->delete();

        if($response){
            return "data delete";
        } else {
            return "data not delete";
        }



        return view('user', ['users'=>$response]);
    }
}
