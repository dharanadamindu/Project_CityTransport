{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'route_r.store']) !!}
            Route Number :- 
            <input type="text" class="form-control" placeholder="Enter route number" name="routeNo" required>
            <br> 
            <input type="submit" class="form-control btn btn-info" value="Save Route">
            
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection