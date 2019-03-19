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
        <label for="comment">Comment:</label>
        {{-- <textarea class="form-control" rows="5" id="name" name="comment" value="{{$feedData->comment}}">{{$feedData->comment}}</textarea> --}}
        <textarea class="form-control" rows="5" id="name" name="comment" placeholder="Feedback Here">{{$feedData->comment}}</textarea>


        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit Feedback',array('class'=>"btn btn-outline-success shadow"))}}
        {!! Form::close() !!}
            
 
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection