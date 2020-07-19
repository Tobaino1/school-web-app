<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student; // model 

class StudentController extends Controller
{    

    public function student()
    {
        return view ('student');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'surname'              => 'required|string',
            'othernames'             => 'required|string',
            'gender'            => 'required|string',
            'department'            => 'required|string',
            'dob'            => 'required|date',
            'student_id'         => 'required|string',
            'address'   => 'required|string',
            'phone'   => 'required|string',
            'email'   => 'required|string'
        ]);
                // saving
        $students = new Student;
        $students-> surname = $request->input('surname');
        $students-> othernames = $request->input('othernames');
        $students-> gender = $request->input('gender');
        $students-> department = $request->input('department');
        $students-> dob = $request->input('dob');
        $students-> student_id = $request->input('student_id');
        $students-> address = $request->input('address');
        $students-> phone = $request->input('phone');
        $students-> email = $request->input('email');
        $students->save();
        return redirect ('/student')->with('success', 'You have successfully registered as a student of ia2ztech!') ;
    }
    

}