{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

        {!! Form::open(['route' => ['feedback.update' ,$feedData->id],'data-parsley-validate'=>'']) !!}

        {{ Form::label('Name :') }}
        {{Form::text('name',$feedData->name,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z ]+$','data-parsley-pattern-message'=>'Your name is invalid', 'data-parsley-trigger'=>'keyup'))}}
        <br>
        {{ Form::label('Email' )}}
        {{ Form::text('email', $feedData->email,array('class' => "form-control",'required', 'data-parsley-type'=>"email", 'data-parsley-trigger'=>"keyup")) }}
        <br>
        {{ form::label('Contact Number') }}
        {{ form::text('contactno', $feedData->contactno,array('class' => "form-control",'required', 'data-parsley-type'=>"number", 'data-parsley-pattern'=>"^\d{10}$", 'data-parsley-pattern-message'=>"Contact number must have 10 digits", 'data-parsley-trigger'=>"keyup")) }}
        <br>
        <label for="comment">Comment:</label>
        {{-- <textarea class="form-control" rows="5" id="name" name="comment" value="{{$feedData->comment}}">{{$feedData->comment}}</textarea> --}}
        <textarea class="form-control" rows="5" id="name" name="comment" placeholder="Feedback Here", data-parsley-maxlength="180" data-parsley-trigger="keyup">{{$feedData->comment}}</textarea>


        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit Feedback',array('class'=>"btn btn-outline-success shadow"))}}
        {!! Form::close() !!}
            
 
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection