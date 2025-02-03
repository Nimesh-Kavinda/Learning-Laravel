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
            return redirect('list-student');
        } else {
            return "Student Not Added Succefully";

        }

        
    }

    function list(){
        $studentsData = Student::all();
        return view('list-students', ['students' => $studentsData]);
    }

    function delete($id){
         $isDelete = Student::destroy($id);

         if($isDelete == 1){
            return redirect('list-student');
         } elseif($isDelete == 0){
            return "Data is Not Deleted";
         }else{
            return "Function do not working";
         }

    }
}
