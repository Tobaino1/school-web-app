<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon"  href="storage/loc.png">

        <title>ia2ztech | School Mgt System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
     <!-- blade template css -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
     

    </head>
    <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
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
         <a class="nav-link" href="{{ route('login') }}" style="color: white">Admin / Staff</a>
      </li> 

       <!-- <li class="nav-link">
         <a class="nav-link" href="{{ route('register') }}" style="color: white">Admin / Staff Registration</a>
      </li>  -->
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>

    </div>
      </nav>
      </div>
    </nav>
      
    <div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>info@ia2ztech.com</span>
						    </div>
					    </div>

					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: +2348036431907</span>
						    </div>
                  </div>            

              <div class="col-md d-flex topper align-items-right align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-right align-items-right"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Social Media</span>
						    	<span>@ia2ztech</span>
						    </div>
   
              </div>
                   </div>

       <div class="content">
          <div class="title m-b-md">
            <div align="center"> <img src="{{ 'storage/bg_1.jpg'}}" height="568" width="1366" />         
        </div>
 <!-- Footer -->
 @include ('layouts.footer') 
    </body>
</html>
