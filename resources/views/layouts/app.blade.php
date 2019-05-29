<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        {{-- custom css --}}
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
        <!--Bootstrap Core Files-->
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">

        <link rel="stylesheet" href="{{asset('css/parsley.css')}}">

        <link rel="stylesheet" href="{{asset('css/wave.css')}}">

        {{-- <link rel="stylesheet" type="text/css" href="css/partical.css"> --}}
        <!--===============================================================================================-->	
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/login.css">
        <!--===============================================================================================-->

        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'City Transport') }}</title>
            
    
        {{-- jquery --}}
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>
    
        <!--custom Scripts -->
        <script src="{{ asset('js/main.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
        
</head>
<body>
<div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> //backup --}}
            <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel mynav">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'City') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
    
    {{-- /////////////////////////////////////////////////////////////// --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="/profile/">Profile</a>
                                </li>

                                @if ((Auth::User()->roleid) == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="/nearby/">Nearby Halt</a>
                                </li>
                                @else          
                                @endif
    
                                @if ((Auth::User()->roleid) == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="/employee/">Employee</a>
                                </li>
                                @else          
                                @endif
                                
                                @if ((Auth::User()->roleid) == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="/feedback/">Feedback</a>
                                </li>
                                @else          
                                @endif
    
                                @if ((Auth::User()->roleid) == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="/route_r/">Route</a>
                                </li>
                                @else          
                                @endif

                                @if ((Auth::User()->roleid) == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="/halt/">Halts</a>
                                </li>
                                @else          
                                @endif
    
    {{-- /////////////////////////////////////////////////////////////// --}}
    
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

        {{-- //cut --}}

        {{-- Content --}}
        <main>
            @yield('content')
        </main>

        <script src="{{ asset('js/app.js') }} defer" ></script>

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> --}}
        <script src="{{ asset('js/jquery.min.js') }} defer" ></script>

        {{-- <script src="http://parsleyjs.org/dist/parsley.js"></script> --}}
        <script src="{{ asset('js/parsley.min.js') }}" ></script>

        <script src="{{ asset('js/partical.js') }}" ></script>
        

        <main>
            @yield('script')
        </main>

    </div>
</body>
</html>
