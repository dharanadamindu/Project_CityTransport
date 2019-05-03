{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")

<link rel="stylesheet" href="{{asset('css/parsley.css')}}"/>




<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'nearby.store', 'data-parsley-validate' =>'']) !!}
        
        {{ Form::label('Halt Name :') }}
        {{Form::text('name',null,array('class'=>"form-control", 'required','placeholder'=>'Enter halt name here', 'data-parsley-maxlength'=>"25", 'data-parsley-maxlength-message'=>"Halt name is too long .", 'data-parsley-pattern'=>"^[a-zA-Z. ]+$", 'data-parsley-pattern-message'=>"Halt name is invalid", 'data-parsley-trigger'=>"keyup"))}}
        <br> 

        <label for="discription">Description:</label>
        <textarea class="form-control" rows="5" id="descrip" name="descrip" placeholder="Description", data-parsley-maxlength="180" data-parsley-trigger="keyup"></textarea>        <br> 
        <br> 

        {{ form::label('City : ') }}
        {{ form::text('city',null,array('class' => 'form-control','required'=>'', 'placeholder'=>'enter city','maxlength'=>'15')) }}
        <br> 

        {{ form::label('Latitude : ') }}
        {{ form::text('lat',null,array('class' => 'form-control','required'=>'','placeholder'=>'enter Latitude here','maxlength'=>'15')) }}
        <br>

        {{ form::label('Longitude') }}
        {{ form::textarea('lng',null, array('class' => 'form-control', 'cols' => 20, 'rows' =>5 ,'required' =>'','placeholder'=>'enter Longitude here','maxlength'=>'15'))}}
        <br>

        <br>
        <input type="reset" class="form-control btn btn-danger my-1" value="clear data">
        <input type="submit" class="form-control btn btn-success my-1" value="Save Route">
        
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection

<script src="{{ asset('js/parsley.min.js') }}" ></script>
