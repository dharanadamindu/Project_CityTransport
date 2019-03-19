{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'feedback.store']) !!}
            Name :- <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
            <br> 
            <input type="submit" class="form-control btn btn-info" value="Save Feedback">
            
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection