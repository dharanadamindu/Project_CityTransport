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
            {{Form::text('bus_id',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('User Name :') }}
            {{Form::text('user_id',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('Trip Date :') }}
            {{Form::date('date',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}
            <br>

            {{--{{ Form::label('Seat Number :') }}--}}
            {{--{{Form::text('SeatNo',null,array('class'=>"form-control", 'required','data-parsley-trigger'=>'keyup'))}}--}}
            <br>

            <div class="row">
                {{--//1st row--}}
                    <div class="col-sm-2">
                            {{--{!! Form::label('1', 'Seat 1') !!}--}}
                            {{--{!! Form::checkbox('seatNo[]', '1') !!}--}}
                        {{--<input type="checkbox" name="seatNo[]" value="1">--}}
                        {{--{{in_array("1",$seatNo)?"checked":""}}--}}
                        {{-->1--}}
                        <input type="checkbox" name="seatNo[]" value="1"> 1
                    </div>
                    <div class="col-sm-2">
                            {{--{!! Form::label('2', 'Seat 2') !!}--}}
                            {{--{!! Form::checkbox('seatNo[]', '2') !!}--}}
                        <input type="checkbox" name="seatNo[]" value="2"> 2
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                            {{--{!! Form::label('3', 'Seat 3') !!}--}}
                            {{--{!! Form::checkbox('seatNo[]', '3') !!}--}}
                        <input type="checkbox" name="seatNo[]" value="3"> 3
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="4"> 4
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="5"> 5
                    </div>
            </div>

            <div class="row">
                {{--//2nd row--}}
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="6"> 6
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="7"> 7
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="8"> 8
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="9"> 9
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="10"> 10
                    </div>
            </div>



            <div class="row">
                {{--//3rd row--}}
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="11"> 11
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="12"> 12
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="13"> 13
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="14"> 14
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="seatNo[]" value="15"> 15
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

