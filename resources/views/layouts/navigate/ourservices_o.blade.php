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

<h3>you can find bus route</h3>
<h3>you can find time table</h3>


Time Table

Preparation of Scientific Time Tables for SLTB & Private Buses
Public Complaints

Submit your complaints

{{-- content --}}

{{-- footer --}}
<div class="">
    @include('layouts.footer')
</div>


@endsection