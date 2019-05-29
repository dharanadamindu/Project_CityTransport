<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
            <a href="https://time.is/Colombo" id="time_is_link" rel="nofollow" style="font-size:36px"></a>
            <span id="Colombo_z410" style="font-size:36px"></span>
            <script src="//widget.time.is/t.js"></script>
            <script>
            time_is_widget.init({Colombo_z410:{time_format:"12hours:minutes:secondsAMPM"}});
            </script>
        <halt-layout></halt-layout>
        {{-- <toolbar-layout></toolbar-layout> --}}
        {{-- <google-layout></google-layout> --}}
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>