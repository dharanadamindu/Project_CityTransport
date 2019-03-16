{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'employee.store']) !!}
            Route Number :- <input type="text" class="form-control" placeholder="Enter route number" name="RouteNo" required>
            <br> 

            Start Location :- <input type="text" class="form-control" placeholder="Enter Start Location" name="StartLocation" required>
            <br>

            End Location :- <input type="text" class="form-control" placeholder="Enter End Location" name="EndLocation" required>
            <br>

            {{-- Halts :- <textarea rows="4" cols="50" name="Halts" class="form-control" placeholder="Example-> Piliyandala,Katubadda,Moratuwa" required></textarea> --}}
            Halts :- <input type="text" class="form-control" placeholder="Enter Distance" name="Halts" required>
            <br>
            Distance :- <input type="text" class="form-control" placeholder="Enter Distance" name="Distance" required>
            <br>

            
           
            <input type="submit" class="form-control btn btn-info" value="Save Route">
            
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection