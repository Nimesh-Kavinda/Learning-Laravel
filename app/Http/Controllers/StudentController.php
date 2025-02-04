<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function list(){
            return Student::all();
    }

    function save(){
        $student = new Student();
        $student->name = "shehani";
        $student->email = "sehani@gmail.com";
        $student->phone = "778525115";

        if($student->save()){
            echo 'new student added';
        }

    }
}
