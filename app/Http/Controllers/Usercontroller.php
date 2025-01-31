<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class Usercontroller extends Controller
{
    //
    function users(){
        return DB::select('select * from users');
    }
}
