<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
<div id="app">
    <halt-layout></halt-layout>
</div>
<script src="{{ asset('js/app.js') }}" ></script>

<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
</body>
</html>
