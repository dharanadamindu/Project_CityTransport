@extends('layouts.app')
    
@section('content') 

{{-- header --}}
<div class="">
    @include('layouts.slideshow')
</div>

<div class="">
    @include('layouts.header')
</div>

{{-- content --}}

<div class="view" style="background-image: url('images/others/plain-light-color-for-guest-background.jpg'); opacity: inherit; background-size: cover;">

<div class="container-fluid">
    
<br>
<font size="4px"> 

<p> Route Navigation System is a web-based solution and an Android application.</p>
The main perspective of this product is an android application for Sri Lankan citizens to help them save their valuable time by reducing the time they waste on roads. 

<p>
This transport navigation system provides passenger with routes that they should take in order to reach the destination given. 
The passenger only has to login to the Android application and set starting point and the destination point to find bus route.</p>
<p>
This system provides the facilities for user complains and gives details of the people that need to be contacted for any query regarding bus transportation. 

</p>
</font>

</div>


{{-- content --}}

{{-- footer --}}
<div class="">
    @include('layouts.footer')
</div>


@endsection