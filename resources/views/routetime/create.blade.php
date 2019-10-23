{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")

    <link rel="stylesheet" href="{{asset('css/parsley.css')}}"/>




    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            {!! Form::open(['route' => 'routetime.store', 'data-parsley-validate' =>'']) !!}

            {{ form::label('Route Number : ') }}
            {{ form::text('bus_id',null,array('class' => 'form-control','required'=>'', 'placeholder'=>'Enter route number','maxlength'=>'6','data-parsley-pattern'=>"^[0-9/]+$", 'data-parsley-pattern-message'=>"route number is invalid")) }}
            <br>
            {{ form::label('Bus Id : ') }}
            {{ form::text('route_id',null,array('class' => 'form-control','required'=>'', 'placeholder'=>'Enter bus id','maxlength'=>'6','data-parsley-pattern'=>"^[0-9/]+$", 'data-parsley-pattern-message'=>"Bus id is invalid")) }}

            <br>
            {{ Form::label('Trip Date :') }}
            {{ Form::date('bookdate',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}

            <br>
            {{ Form::label('Trip Time:') }}
            {{ Form::time('booktime',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}

            <input type="reset" class="form-control btn btn-danger waves-effect waves-light my-1" value="clear data">
            <input type="submit" class="form-control btn btn-Success waves-effect waves-light my-1" value="Save Route Time">

            {!! Form::close() !!}
        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection

<script src="{{ asset('js/parsley.min.js') }}"></script>
