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
            {{ form::label('Start Location : ') }}
            {{ form::text('startLocation',null,array('class' => 'form-control','required', 'placeholder'=>'enter start location here')) }}
            <br> 

            {{ form::label('End Location : ') }}
            {{ form::text('endLocation',null,array('class' => 'form-control','required','placeholder'=>'enter end location here')) }}
            <br>
            {{-- <textarea class="form-control" rows="5" name="halts" placeholder="ex : katubadda,piliyandala,miriswatta">{{$feedData->comment}}</textarea>
            <br> --}}

            {{ form::label('Halts') }}
            {{ form::textarea('halts',null, array('class' => 'form-control', 'cols' => 20, 'rows' =>5 ,'required','placeholder'=>'ex : katubadda,piliyandala,miriswatta'))}}
            <br>
            {{ form::label('Distance : ') }}
            {{ form::text('distance',null ,array('class' => 'form-control', 'placeholder'=>'enter distance here')) }}

            <br>
            <input type="reset" class="form-control btn btn-danger my-1" value="clear data">
            <input type="submit" class="form-control btn btn-success my-1" value="Save Route">
            
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection