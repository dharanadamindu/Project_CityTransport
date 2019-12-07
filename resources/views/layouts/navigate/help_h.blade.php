@extends('layouts.app')
    
@section('content') 

{{-- header --}}
<div class="">
    @include('layouts.slideshow')
</div>

<div class="">
    @include('layouts.header')
</div>

<div class="view" style="background-image: url('images/others/plain-light-color-for-guest-background.jpg'); opacity: inherit; background-size: cover;">

{{-- content --}}

<div class="container-fluid">
    <br>
    <B>
    Register: register page will provide a sign-in form to the users to register to the bus route navigation system. <br>
    Login: login page will provide to log in to the system who are already registered to the system.<br>
    Guest: the guest page will provide facilities for unregistered passengers to access the system <br>
    <br><br>

    Bus routes- In this function passenger can find bus routes and their destinations. <br> 
    Find a bus- in this function passenger can select drop location and find a bus.  <br>
    Feedback – In this function user can give feedback to the system or make a complaint. <br>
    Help- user can get guild line for use this system.<br><br>

  </B>
    <div class="row">
        
      
        <div class="col-sm-3">
            <div class="card">
                    {{-- <img class="card-img-top" src="images/gif/bushalts.gif" width: 120px; height: auto;alt="Card image cap"> --}}
    
                <div class="card-header">
                  how to find bus halts and find time tables
                </div>
                <img class="card-img-top" src="images/gif/bushalts.gif">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>

                </div>
              </div>
        </div>

        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                 How to find routes
                </div>
                <img class="card-img-top" src="images/gif/findroute.gif" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
          
                </div>
              </div>
        </div>

        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                  How to login this system
                </div>
                <img class="card-img-top" src="images/gif/login.gif" sizes="100px" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                </div>
              </div>
        </div>

        <div class="col-sm-1">
        </div>


<br><br>


        <div class="col-sm-3">
            <div class="card">
                {{-- <img class="card-img-top" src="images/gif/bushalts.gif" width: 120px; height: auto;alt="Card image cap"> --}}

            <div class="card-header">
              how to find timetables
            </div>
            <img class="card-img-top" src="images/gif/halt.gif">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>

            </div>
          </div>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">
            <div class="card">
                {{-- <img class="card-img-top" src="images/gif/bushalts.gif" width: 120px; height: auto;alt="Card image cap"> --}}

            <div class="card-header">
              how to find lossed bags
            </div>
            <img class="card-img-top" src="images/gif/employee.gif">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>

            </div>
          </div>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-1">
        </div>

    </div>
</div>




{{-- content --}}

{{-- footer --}}
<div class="">
    @include('layouts.footer')
</div>

    <script>
        alert('huttoooo');
    </script>
@endsection

