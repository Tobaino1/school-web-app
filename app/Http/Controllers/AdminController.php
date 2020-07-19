<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; // model 
use App\Course; // model 

class AdminController extends Controller
{
/**
     * Create a new controller instance.
     * authentication //to redirect unathorized access to login
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function requestStudents()
      { 
        $students = Student::all();
        return view ('students_request', ['students' => $students]); 
      }

      public function requestCourses()
      { 
        $courses = Course::all();
        return view ('courses_request', ['courses' => $courses]); 
      }
}
