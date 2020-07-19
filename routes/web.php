<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Student routes
Route::get('/student', 'StudentController@student')->name('student');
Route::post('/store', 'StudentController@store');

Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/stdprofile', 'ProfileController@stdprofile');


// Course routes
Route::get('/course', 'CourseController@course')->name('course');
Route::post('/save', 'CourseController@save');


//Admin routes
Route::get('courses_request', 'AdminController@requestCourses')->name('courses_request');
Route::get('students_request', 'AdminController@requestStudents')->name('students_request');
