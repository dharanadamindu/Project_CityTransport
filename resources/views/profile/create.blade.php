{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")




<div class="row">
    <div class="col-sm-3"></div>

    @if ((Auth::User()->roleid)==1)

    <div class="col-sm-6">
            {!! Form::open(['route' => ['profile.update' ,$userData->id],'data-parsley-validate'=>'']) !!}

            {{ Form::label('Name :') }}
            {{Form::text('name',$userData->name,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Your name is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('Email' )}}
            {{ Form::text('email', $userData->email,array('class' => "form-control",'required', 'data-parsley-type'=>"email", 'data-parsley-trigger'=>"keyup")) }}
            <br>
    
            {{ form::label('User Type') }}
    
            @if ($userData->roleid==1)
            <select name="roleid" class="form-control">
                <option value=1 selected>Admin</option>
                <option value=2>User</option>
            </select> 
            @elseif($userData->roleid==2)
            <select name="roleid" class="form-control">
                <option value=1>Admin</option>
                <option value=2 selected>User</option>
            </select> 
            @endif

            <br>
            <input type="reset" class="form-control btn btn-danger my-1" value="clear data">
            <input type="submit" class="form-control btn btn-success my-1" value="Save Route">
            
        {!! Form::close() !!}
    </div>

    @elseif((Auth::User()->roleid)==2)
    
        <h1>error 404</h1>

    @endif




    <div class="col-sm-3"></div>
</div>
@endsection

