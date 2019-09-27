{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")




<div class="row">
    <div class="col-sm-3"></div>

    @if ((Auth::User()->roleid)==1)

    <div class="col-sm-6">
            {!! Form::open(['route' => ['fair.update' ,null],'data-parsley-validate'=>'']) !!}

            {{ Form::label('Form :') }}
            {{Form::text('from',null,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Form location is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('To :') }}
            {{Form::text('to',null,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'To location is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            Fair :- <input type="text" class="form-control" placeholder="Enter your Fair" name="bfair" required data-parsley-type="number" data-parsley-type-message="please enter valid fair" data-parsley-trigger="keyup">
            <br>
    
            Duration :- <input type="text" class="form-control" placeholder="Enter your duration in minitues" name="duration" required data-parsley-type="number" data-parsley-type-message="please enter valid duration" data-parsley-trigger="keyup">
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

