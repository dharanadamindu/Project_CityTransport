{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    
    
    <div class="col-sm-6">
        {!! Form::open(['route' => ['profile.update' ,$userData->id],'data-parsley-validate'=>'']) !!}
        {{ Form::label('Name :') }}
        {{Form::text('name',$userData->name,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Your name is invalid', 'data-parsley-trigger'=>'keyup'))}}
        <br>
        {{ Form::label('Email' )}}
        {{ Form::text('email', $userData->email,array('class' => "form-control",'required', 'data-parsley-type'=>"email", 'data-parsley-trigger'=>"keyup")) }}
        <br>

        @if ((Auth::User()->roleid)==1)
            {{ form::label('User Type') }}
             <select name="roleid" class="form-control">
                <option value="1" selected>Admin</option>
                <option value="2">User</option>
            </select> 
            

        @elseif((Auth::User()->roleid)==2)

            {{ form::label('User Type') }}
           
            <select name="roleid" class="form-control">
                <option value="2" selected>User</option>
                
            </select> 
        @endif
       

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit profile',array('class'=>"btn btn-sm btn-outline-success shadow"))}}
        {!! Form::close() !!}
</div>
    <div class="col-sm-3"></div>
</div>
@endsection