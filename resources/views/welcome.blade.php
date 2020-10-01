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

  
 <!-- Footer -->
 @include ('layouts.footer') 
    </body>
</html>
