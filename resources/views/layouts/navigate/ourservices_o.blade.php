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

<div class="container-fluid">
    


{{-- content --}}
<br><br>
<h4><b>What is City Transport?</b></h4>
<h5 class="center">
        &emsp;&emsp;If you travel by bus a lot, you are probably familiar with the routes that these busses take. 
    But what happens if you have to a place that you are unfamiliar with or you haven’t gone there before? 
    Well, that’s where 'City Transport' wants to help out.
</h5>
<br><br>

<h4>you can find bus route</h4>
use android application for find routes.

<br><br>
<h4>Benifits of this website</h4>
<ul>
    <li>view bus routes</li>
    <li>Route between two Stages</li>
    <li>Submit your Public Complaints</li>
</ul>

</div>












{{-- content --}}

{{-- footer --}}
<div class="">
    @include('layouts.footer')
</div>


@endsection