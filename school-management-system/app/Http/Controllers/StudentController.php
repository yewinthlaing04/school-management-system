<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function index():view
    {
        $students = Student::all();  // fetch the list of students from db
       // dd ( $students);
        return view ("student.index")-> with( 'students' , $students); // view with compact ( students )
    }


    public function create()
    {
        return view ('student.create');
    }

    // to save student from student registration ( post form )
    public function store(Request $request)
    {

        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber'=> $request->phonenumber,
            'address' => $request->address
        ];

        //dd ( $input);
        Student::create($input);
        return redirect('/student')->with(["addsuccess"=>"Student has been added successfully"]);
    }


    public function show(string $id)
    {
        $student = Student::find($id);
        return view('student.show')->with('student', $student);
    }


    public function edit(string $id)
    {
        $student = Student::find($id);
        return view ( 'student.edit' )->with('student', $student);
    }


    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $input = $request -> all();
        $student->update($input);
        return redirect('/student')->with(['updateSuccess'=> 'Student has been updated successfully']);
    }


    public function destroy(string $id)
    {
        Student::where('id', $id)->delete();
        return redirect('/student')-> with(['deleteSuccess'=> 'Student has been deleted successfully']);
    }
}
