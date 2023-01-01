@extends('main')
@section('main-section')
<html>
    <head>
        <title>About</title>
    </head>   
    <body>
        <div class="container">
            <h1> Hello MR. {{$name?? "BEGGINER"}}</h1>
            <h1> Welcome to the About page</h1>
        </div>
    </body>
</html>
@endsection