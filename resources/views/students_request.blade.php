@extends('layouts.headerAdmin')

@section('content')

<div class="container">
<div>

<hr/>
<h3 style="color: blue" align="center"> Admin Dashboard</h3>
<hr/>
<h4 style="color: blue" align="center">List of registered students </h4>

<table class="table table-striped table-hover">
<tr>
<th>S/N</th>
<th>Surname</th>
<th>Othernames</th>
<th>Gender</th>
<th>Student Id</th>
<th>Department</th>
<th>Date of birth</th>
<th>Address</th>
<th>Phone Number</th>
<th>Email</th>
</tr>

<tbody>
     @foreach($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->surname }}</td>
<td>{{ $student->othernames }}</td>
<td>{{ $student->gender }}</td>
<td>{{ $student->student_id }}</td>
<td>{{ $student->department }}</td>
<td>{{ $student->dob }}</td>
<td>{{ $student->address }}</td>
<td>{{ $student->phone }}</td>
<td>{{ $student->email }}</td>
</tr>

@endforeach
</tbody>
</table>
</div>
</div>
@include ('layouts.footer') 
@endsection
