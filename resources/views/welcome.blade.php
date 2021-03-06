@extends('layouts.app')
    
@section('content') 

<div class="">
    @include('layouts.slideshow')
</div>


<div class="">
    @include('layouts.header')
</div> 

{{-- Home page --}}
{{-- <div class="view" style="background-image: url('images/others/plain-light-color-for-guest-background.jpg'); opacity: inherit; background-size: cover;"> --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 p-4">
                <h3>City Transport</h3><br>
                
                    <a href="https://time.is/Colombo" id="time_is_link" rel="nofollow" style="font-size:36px"></a>
                    <span id="Colombo_z410" style="font-size:36px"></span>
                    <script src="//widget.time.is/t.js"></script>
                    <script>
                    time_is_widget.init({Colombo_z410:{time_format:"12hours:minutes:secondsAMPM"}});
                    </script>
<br><br>
                
                <h4>Vision</h4> 
                <p class="text-justify">&emsp;To Operate and build the Public Bus Transport and deliver a modern, efficient and sustainable transport system that facilitate economic growth and social inclusion in the Srilanka</p><br>
                <h4>Mission</h4>
                <p class="text-justify">&emsp;Implementing, developing and sustaining the most advanced infrastructure facilities utilizing the latest high tech strategies to uplift the transport system and living standards of the people.</p>
            </div>


            <div class="col-sm-4 p-4 ">
                <h2>Welcome to City Transport online service</h2>
                <p class="text-justify">&emsp;The aim is of the proposed bus route navigation system is to develop a web-based
                    solution and android application, which helps the passengers to find out correct times of
                    bus turns and a proper bus route navigation system which ultimately increases the
                    efficiency of the entire nation. This system provides passengers with the ability to find
                    correct busses and their routes in order to plan their journeys.</p>

            {{-- <img class="card-img-top" src="images/img-01.png" alt="Logo" style="width:50%"> --}}
                    
            </div>


            
            <div class="col-sm-1"></div>

            <div class="col-sm-3 p-4">
            <div class="container">
                <p></p>
                <div class="card bg-secondary text-white" style="width:auto">
                    <img class="card-img-top" src="images/others/QRCode.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title text-center">City Transport App</h5>
                        <p class="card-text text-center"><a href="https://drive.google.com/open?id=1ODnqrrUNUtvYOs5Fvk7b0bBAqQ8MbEAB" style="color: #00FF00" onMouseOver="this.style.color='#00F'"onMouseOut="this.style.color='#0F0'">here to download android application</a></p>
                         
                    </div>
                </div>
            </div></div>
                  
        </div>


    </div>

<div class="">
    @include('layouts.footer')
</div>


@endsection