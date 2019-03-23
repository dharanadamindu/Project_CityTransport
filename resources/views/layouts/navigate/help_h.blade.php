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
    Register: register page will provide a sign-in form to the users to register to the bus route navigation system. <br>
    Login: login page will provide to log in to the system who are already registered to the system.<br>
    Guest: the guest page will provide facilities for unregistered passengers to access the system <br>
    <br><br>

    Bus routes- In this function passenger can find bus routes and their destinations. <br> 
    Find a bus- in this function passenger can select drop location and find a bus.  <br>
    Feedback – In this function user can give feedback to the system or make a complaint. <br>
    Help- user can get guild line for use this system.<br><br>
</div>




{{-- content --}}

{{-- footer --}}
<div class="">
    @include('layouts.footer')
</div>


@endsection