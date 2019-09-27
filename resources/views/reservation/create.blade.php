{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")




<div class="row">
    <div class="col-sm-3"></div>

    @if ((Auth::User()->roleid)==1)

    <div class="col-sm-6">
            {!! Form::open(['route' => ['seat.update' ,null],'data-parsley-validate'=>'']) !!}

            {{ Form::label('Bus Name :') }}
            {{Form::text('bus_id',null,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Bus id is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('User Name :') }}
            {{Form::text('user_id',null,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Bus id is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('Trip Date :') }}
            {{Form::date('date',null,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Date is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{-- {{ Form::label('Seat Number :') }}
            {{Form::text('SeatNo',$seatData->SeatNo,array('class'=>"form-control", 'required', 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'Date is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br> --}}

            <div class="row"> {{-- 1st row --}}
                    <div class="col-sm-2">
                            {!! Form::label('1', 'Seat 1') !!}
                            {!! Form::checkbox('seat', '1') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('2', 'Seat 2') !!}
                            {!! Form::checkbox('seat', '2') !!}
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                            {!! Form::label('3', 'Seat 3') !!}
                            {!! Form::checkbox('seat', '3') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('4', 'Seat 4') !!}
                            {!! Form::checkbox('seat', '4') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('5', 'Seat 5') !!}
                            {!! Form::checkbox('seat', '5') !!}
                    </div>
            </div>

            <div class="row"> {{-- 2nd row --}}
                    <div class="col-sm-2">
                            {!! Form::label('6', 'Seat 6') !!}
                            {!! Form::checkbox('seat', '6') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('7', 'Seat 7') !!}
                            {!! Form::checkbox('seat', '7') !!}
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                            {!! Form::label('8', 'Seat 8') !!}
                            {!! Form::checkbox('seat', '8') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('9', 'Seat 9') !!}
                            {!! Form::checkbox('seat', '9') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('10', 'Seat 10') !!}
                            {!! Form::checkbox('seat', '10') !!}
                    </div>
            </div>



            <div class="row"> {{-- 3rd row --}}
                    <div class="col-sm-2">
                            {!! Form::label('11', 'Seat 11') !!}
                            {!! Form::checkbox('seat', '11') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('12', 'Seat 12') !!}
                            {!! Form::checkbox('seat', '12') !!}
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                            {!! Form::label('13', 'Seat 13') !!}
                            {!! Form::checkbox('seat', '13') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('14', 'Seat 14') !!}
                            {!! Form::checkbox('seat', '14') !!}
                    </div>
                    <div class="col-sm-2">
                            {!! Form::label('15', 'Seat 15') !!}
                            {!! Form::checkbox('seat', '15') !!}
                    </div>
            </div>
            <br>
            


            {{ Form::label('Comment :') }}
            {{Form::text('comment',null,array('class'=>"form-control", 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'comment is invalid', 'data-parsley-trigger'=>'keyup'))}}
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

