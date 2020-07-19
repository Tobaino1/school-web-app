@extends('layouts.headerAdmin')

@section('content')

<div class="container">
<div>

<hr/>
<h3 style="color: blue" align="center"> Admin Dashboard</h3>
<hr/>
<h4 style="color: blue" align="center">List of students that has completed their course registration </h4>

<table class="table table-striped table-hover">
<tr>
<th>S/N</th>
<th>Surname</th>
<th>Student Id</th>
<th>Department</th>
<th>Course 1</th>
<th>Course 2</th>
<th>Course 3</th>
<th>Course 4</th>
<th>Course 5</th>
</tr>

<tbody>
     @foreach($courses as $course)
<tr>
<td>{{ $course->id }}</td>
<td>{{ $course->surname }}</td>
<td>{{ $course->student_id }}</td>
<td>{{ $course->department }}</td>
<td>{{ $course->course1 }}</td>
<td>{{ $course->course2 }}</td>
<td>{{ $course->course3 }}</td>
<td>{{ $course->course4 }}</td>
<td>{{ $course->course5 }}</td>
</tr>

@endforeach
</tbody>
</table>
</div>
</div>
@include ('layouts.footer') 
@endsection
