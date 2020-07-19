<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course; // model 


class CourseController extends Controller
{
    public function course()
    {
        return view ('course');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'surname'   => 'required|string',
            'department'  => 'required|string',
            'student_id' => 'required|string',
            'course1'   => 'required|string',
            'course2'   => 'required|string',
            'course3'   => 'required|string',
            'course4'   => 'required|string',
            'course5'   => 'required|string',

        ]);
                // saving
        $courses = new Course;
        $courses-> surname = $request->input('surname');
        $courses-> department = $request->input('department');
        $courses-> student_id = $request->input('student_id');
        $courses-> course1 = $request->input('course1');
        $courses-> course2 = $request->input('course2');
        $courses-> course3 = $request->input('course3');
        $courses-> course4 = $request->input('course4');
        $courses-> course5 = $request->input('course5');

        $courses->save();
        return redirect ('/course')->with('success', 'Dear Student, your Course registration was successfully !') ;

    }
}
