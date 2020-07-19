<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [  
        'surnname',
        'othernames',
        'gender',
        'department',
        'dob',
        'student_id',
        'address',
        'phone',
        'email',
    ];


    // using eloquent to join tables for relationship
    public function student() 
    {
        return $this->belongsTo('App\Students', 'Students', 'student_id');
    }

   //Query builder style
    // $users = Student::where( 'student_id', 'LIKE', '%' . $student_id . '%' )
    // ->select('students.othernames', 'students.email', 'students.phone')
    // ->join('courses', 'students.student_id', '=', 'courses.student_id')->get();
   
}
