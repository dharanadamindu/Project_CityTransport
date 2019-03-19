{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

        {!! Form::open(['route' => ['feedback.update',$feedData->id]]) !!}

        {{ Form::label('Name :') }}
        {{Form::text('name',$feedData->name,array('class'=>"form-control"))}}
        <br>
        {{ Form::label('Address' )}}
        {{ Form::text('address', $feedData->address,array('class' => "form-control")) }}
        <br>
        {{ form::label('Contact Number') }}
        {{ form::text('contactno', $feedData->contactno,array('class' => "form-control")) }}
        <br>
        {{ form::label('Comment') }}
        {{ form::text('commect', $feedData->commect, array('class' => "form-control")) }}

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit Feedback',array('class'=>"btn btn-outline-success shadow"))}}
        {!! Form::close() !!}
            
 
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection