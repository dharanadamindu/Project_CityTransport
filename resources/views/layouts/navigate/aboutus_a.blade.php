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
    


edit here
We provide full fledged online bus booking platform to buy and sell bus seats. The passenger can purchase bus tickets online and in return to confirm the seat reservation, a text message with the details of travel will be be sent.

With the efficient bus reservation system from BusSeat.lk, plan your journey early, save your valuable time in buying bus tickets, avoid waiting in long queues, find to your boarding place easily and enjoy your happy journey with comfort. 


Bus Route Navigation System is a web-based solution and an Android application.
The main perspective of this product is an android application for Sri Lankan citizens to help them save their valuable time by reducing the time they waste on roads. 

This transport navigation system provides passenger with routes that they should take in order to reach the destination given. The passenger only has to login to the Android application and set starting point and the destination point that the passenger intends to go to and then the navigation system itself shows which bus that the passenger should take at what time (approximate time) does the bus arrive for the particular bus halt and where the bus is right now.

This system provides the facilities for user complains and gives details of the people that need to be contacted for any query regarding bus transportation. 






{{-- content --}}

{{-- footer --}}
<div class="">
    @include('layouts.footer')
</div>


@endsection