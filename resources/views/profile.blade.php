<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon"  href="storage/loc.png">

        <title>ia2ztech | School Mgt System</title>

        <!-- Fonts && vue-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
     
     <!-- blade template css  && vue --> 
     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
     

    </head>
    <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ia2ztech | School Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
    <li class="nav-link">     
       <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
      </li>

      <li class="nav-link">
         <a class="nav-link" href="{{ route('course') }}" style="color: white">Course Registration</a>
      </li> 
      
       <li class="nav-link">
         <a class="nav-link" href="{{ route('student') }}" style="color: white">Student Registration</a> 
      </li>

      <li class="nav-link">
         <a class="nav-link" href="{{ route('profile') }}" style="color: white">Registration Status</a>
      </li> 

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
      </nav>
      </div>
    </nav>

<div align="center"> 
<hr/>
<h2> Student Area </h2>
<form action="/stdprofile" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="col-md-2 col-form-label" name="student_id" required="required"  placeholder="Enter Student Id">
                    <br><br>
                   <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enter') }}
                                </button>
                            
                                <button type="reset" class="btn btn-danger">
                                    {{ __('Reset') }}
                                </button>
                            </div>
                        </div>
                        
         </form>
</div>
</div>
<hr/>
<div class="container">
    @if(isset($details))
        <p> Dear Student,  <b>  </b>  this is your status :</p>
    <h2>Student Registration Details </h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Surname</th>
                <th>Department</th>
                <th>Student Id</th>
                <th>Course 1</th>
                <th>Course 2</th>
                <th>Course 3</th>
                <th>Course 4</th>
                <th>Course 5</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->surname}}</td>
                <td>{{$user->department}}</td>
                <td>{{$user->student_id}}</td>
                <td>{{$user->course1}}</td>
                <td>{{$user->course2}}</td>
                <td>{{$user->course3}}</td>
                <td>{{$user->course4}}</td>
                <td>{{$user->course5}}</td>
       <div class="card-body">  
    <!-- <img src="STUDENT_DATA/STUDENT_PHOTO/{{ $user->student_photo }}" class="img-circle" width="90" /> -->
       </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <p>{{$message}}</p>
    @endif
</div>


 @include ('layouts.footer')
</body>
</html>