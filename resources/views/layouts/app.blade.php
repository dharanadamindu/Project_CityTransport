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


        

        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
        {{-- notification css --}}
      {{-- <link rel="stylesheet" href="{{asset('css/themes/alertify.core.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/themes/alertify.default.css')}}" id="toggleCSS"/> --}}
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'City Transport') }}</title>
        
        {{-- notification js --}}
        <script src="{{ asset('js/lib/alertify.js') }}" defer></script>
        {{-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> --}}
    
    
        {{-- jquery --}}
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>
    
        <!--custom Scripts -->
        <script src="{{ asset('js/main.js') }}" defer></script>



{{-- 
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCprWaOd8cfSlpg5ouR5ikC97BAPEkID3E&callback=initMap"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCprWaOd8cfSlpg5ouR5ikC97BAPEkID3E"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCprWaOd8cfSlpg5ouR5ikC97BAPEkID3E&libraries=places"></script>
         --}}
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
                                <a class="nav-link" href="/employee/">Employee</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/feedback/">Feedback</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/route_r/">Route</a>
                            </li>

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

        <script src="{{ asset('js/app.js') }}" ></script>

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> --}}
        <script src="{{ asset('js/jquery.min.js') }}" ></script>

        {{-- <script src="http://parsleyjs.org/dist/parsley.js"></script> --}}
        <script src="{{ asset('js/parsley.min.js') }}" ></script>





        

        {{-- <main>
            @yield('script')
        </main> --}}

    </div>
</body>
</html>
