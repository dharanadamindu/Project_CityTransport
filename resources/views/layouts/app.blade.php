<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'City Transport') }}</title>


        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
        
</head>
<body>
<div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> //backup --}}
       
        {{-- //cut --}}

        {{-- Content --}}
        <main>
            @yield('content')
        </main>

        <script src="{{ asset('js/app.js') }}" ></script>

    
    </div>
</body>
</html>
