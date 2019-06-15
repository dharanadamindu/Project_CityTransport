@extends('layouts.app')

@section('content')
    

  </head>

  <body>
     <h1>Hwllo</h1>



    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>



    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
@endsection