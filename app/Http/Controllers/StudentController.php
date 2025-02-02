<?php

namespace App\Http\Controllers;
use App\Models\App\Models;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function add(Request $request){
        $student = new Student();


        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        $result = $student->save();

        if($request){
            return "Student Added Succefully";
        } else {
            return "Student Not Added Succefully";

        }

        
    }
}
