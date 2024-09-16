<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    //fetch all teacher
    public function index():view{
        $teachers = Teacher::all(); // fetch the teacher from the db
        return view("teacher.index") -> with('teachers' , $teachers);
    }

    //add teacher

    public function create():view{
        return view('teacher.create');
    }
    //add post req teacher

    public function store(Request $request){

        $input = [
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=>$request->subject,
            'address'=> $request->address,
            'phonenumber'=> $request->phonenumber
        ];
        // dd ( $input);
        Teacher::create($input);
        return redirect('/teacher') -> with ([ "successMessage" => "Teacher has been updated successfully"] );
    }

    //fetch details of each teacher
    public function showdetails($id){
        $teacher = Teacher::find($id);
        return view("teacher.show") -> with("teacher", $teacher);
    }
    //edit teacher

    //update post req teacher

    //delete req teacher
}
