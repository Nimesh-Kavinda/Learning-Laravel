<?php

namespace App\Http\Controllers;
use App\Models\App\Models;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

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
        $studentsData = Student::paginate(5);
        return view('list-students', ['students' => $studentsData]);
    }

    function delete($id){
         $isDelete = Student::destroy($id);

         if($isDelete == 1){
            session()->flash('meassage', "Data deleted Succesfully"); 
            return redirect('list-student');
         } elseif($isDelete == 0){
            return "Data is Not Deleted";
         }else{
            return "Function do not working";
         }

    }

    function edit($id){
        $student = Student::find($id);
        return view('edit-student', ['data'=> $student]);
    }

    function editStudent(Request $request, $id){
        $student = Student::find($id); 
        $student->name = $request->up_name;
        $student->email = $request->up_email;
        $student->phone = $request->up_phone;

        if($student->save() == 1){
            return redirect('list-student');
        } else {
            return "Student Details are not Updated";
        }
    }


    function search(Request $request){
        $studentData = Student::where('name', 'like',"%$request->search%")->get();
        return view('list-students', ['students' => $studentData, 'search' => $request->search]);
    }

}
