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

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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

<div class="col-md-6 col-lg-6">
@if (session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
</div> 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Registration') }}</div>

                <div class="card-body">
                    <form method="POST"  action="{{url('/store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Other names') }}</label>

                            <div class="col-md-6">
                                <input id="othernames" type="text" class="form-control @error('othernames') is-invalid @enderror" name="othernames" value="{{ old('othernames') }}" required autocomplete="othernames" autofocus>

                                @error('othernames')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                         <div class="col-md-6">
                           <select id="gender" type="text"  class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                     name="gender" value="{{ old('gender') }}" required autofocus>
                                        <option value="male"> male</option>
                                        <option value="female">female</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                             <div class="form-group row">
                        <label for="department"
                            class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                        <div class="col-md-6">
                            <select name="department" id="department" onchange="changeCat(this);"
                                    class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}">
                                <option value="">Select Department</option>
                                <option value="Science">Science</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Art">Art</option>
                                </select>
                        </div>
                    </div>  

                             <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth ') }}</label>

                                <div class="col-md-6">
                                  <input id="dob" type="date" placeholder="(YYYY-MM-DD) Eg 1980-04-05"
                                           class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob"
                                           value="{{ old('dob') }}" required
                                           autofocus>
                                    @if ($errors->has('dob'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="student_id" class="col-md-4 col-form-label text-md-right">{{ __('Student Id') }}</label>

                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id">
        
                                @error('student_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
        
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
        
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            
                                <button type="reset" class="btn btn-danger">
                                    {{ __('Reset') }}
                                </button>
                            </div>

                        </div>
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
</div> 

 @include ('layouts.footer')
</body>
</html>