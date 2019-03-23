{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")

<link rel="stylesheet" href="{{asset('css/parsley.css')}}"/>




<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'route_r.store', 'data-parsley-validate' =>'']) !!}
            {{ form::label('Route Number : ') }}
            {{ form::text('routeNo',null,array('class' => 'form-control','required'=>'', 'placeholder'=>'Enter route number','maxlength'=>'6','data-parsley-pattern'=>"^[0-9/]+$", 'data-parsley-pattern-message'=>"route number is invalid")) }}
            <br> 
            {{ form::label('Start Location : ') }}
            {{ form::text('startLocation',null,array('class' => 'form-control','required'=>'', 'placeholder'=>'enter start location here','maxlength'=>'15')) }}
            <br> 

            {{ form::label('End Location : ') }}
            {{ form::text('endLocation',null,array('class' => 'form-control','required'=>'','placeholder'=>'enter end location here','maxlength'=>'15')) }}
            <br>
            {{-- <textarea class="form-control" rows="5" name="halts" placeholder="ex : katubadda,piliyandala,miriswatta">{{$feedData->comment}}</textarea>
            <br> --}}

            {{ form::label('Halts') }}
            {{ form::textarea('halts',null, array('class' => 'form-control', 'cols' => 20, 'rows' =>5 ,'required' =>'','placeholder'=>'ex : katubadda,piliyandala,miriswatta','maxlength'=>'190'))}}
            <br>
            {{ form::label('Distance : ') }}
            {{ form::text('distance',null ,array('class' => 'form-control', 'placeholder'=>'enter distance here','maxlength'=>'6')) }}

            <br>
            <input type="reset" class="form-control btn btn-danger my-1" value="clear data">
            <input type="submit" class="form-control btn btn-success my-1" value="Save Route">
            
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection

<script src="{{ asset('js/parsley.min.js') }}" ></script>
