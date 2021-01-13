<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pagetitle')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('fonts/beyond_the_mountains-webfont.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/ibras_admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="{{ asset('frameworks/bootstrap.min.css') }}">-->
   
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

                
     <header>
        <nav>
            <figure class="icon-figure">
            <a href="{{ url('/admin') }}" >
                    <img src="images/icon.png" class="icon">
                    <figcaption></figcaption>
                </a>
            </figure>
            
            <ul class="sidenav">
                <li><a class='{{$pageclass == "admin" ? "active" : "" }}' href="{{ url('/admin') }}">Dashboard</a></li>
                <li><a class='{{$pageclass == "adminmenu" ? "active" : "" }}' href="{{ url('/adminmenu') }}">Menu</a></li>
                <li><a class='{{$pageclass == "users" ? "active" : "" }}' href="{{ url('/users') }}">Users</a></li>
                <li><a class='{{$pageclass == "contactdata" ? "active" : "" }}' href="{{ url('/contactdata') }}">Contact Data</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
