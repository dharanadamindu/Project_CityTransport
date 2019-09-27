{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")




<div class="row">
    <div class="col-sm-3"></div>

    @if ((Auth::User()->roleid)==1)

    <div class="col-sm-6">
            {!! Form::open(['route' => ['seats.update' ,$seatData->id],'data-parsley-validate'=>'']) !!}

            {{ Form::label('Bus Name :') }}
            {{Form::text('bus_id',$seatData->bus_id,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Bus id is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('User Name :') }}
            {{Form::text('user_id',$seatData->user_id,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Bus id is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('Trip Date :') }}
            {{Form::text('date',$seatData->date,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Date is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('Seat Number :') }}
            {{Form::text('SeatNo',$seatData->SeatNo,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Date is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('Comment :') }}
            {{Form::text('comment',$seatData->comment,array('class'=>"form-control", 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'comment is invalid', 'data-parsley-trigger'=>'keyup'))}}
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

