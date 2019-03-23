{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

        {!! Form::open(['route' => ['employee.update',$empdata->id],'data-parsley-validate'=>'']) !!}

        {{ Form::label('Name :') }}
        {{Form::text('name',$empdata->name,array('class'=>"form-control", 'required', 'data-parsley-maxlength'=>"50", 'data-parsley-maxlength-message'=>"Your name is too long .", 'data-parsley-pattern'=>"^[a-zA-Z. ]+$", 'data-parsley-pattern-message'=>"Your name is invalid", 'data-parsley-trigger'=>"keyup"))}}
        <br>

        {{ Form::label('Address :') }}
        {{Form::text('address',$empdata->address,array('class'=>"form-control", 'required', 'data-parsley-maxlength'=>"50", 'data-parsley-maxlength-message'=>"Your address is too long. It should have 50 characters or fewer.", 'data-parsley-trigger'=>"keyup"))}}
        <br>

        {{-- {{ Form::label('Role :') }}
        {{ Form::select('role', $empdata, null, array('class'=>'form-control', 'placeholder'=>'Please select ...')) }} --}}
        {{ Form::label('Role :') }}
        @if ($empdata->role=="Customer")
        <select name="role" class="form-control">
            <option value="Customer" selected>Customer</option>
            <option value="Driver">Driver</option>
            <option value="Conductor">Conductor</option>
        </select> 
        @elseif($empdata->role=="Driver")
        <select name="role" class="form-control">
            <option value="Customer">Customer</option>
            <option value="Driver" selected>Driver</option>
            <option value="Conductor">Conductor</option>
        </select> 
        @elseif($empdata->role=="Conductor")
        <select name="role" class="form-control">
                <option value="Customer">Customer</option>
                <option value="Driver">Driver</option>
                <option value="Conductor" selected>Conductor</option>
        </select> 
        @else
            {{Form::text('role',$empdata->role,array('class'=>"form-control"))}}
        @endif



        <br>
        {{ Form::label('NIC :') }}
        {{Form::text('nic',$empdata->nic,array('class'=>"form-control", 'required', 'data-parsley-type'=>"number", 'data-parsley-type-message'=>"please enter valid NIC", 'data-parsley-pattern'=>"^\d{10}$", 'data-parsley-pattern-message'=>"Please enter correct NIC number", 'data-parsley-trigger'=>"keyup"))}}
    
        <br>

        
        {{ Form::label('Gender :') }} <br>
        @if ($empdata->gender=="m")
        Male
        {{ Form::radio('gender', 'm' , true) , array('class'=>'form-control')}}
        Female
        {{ Form::radio('gender', 'f' , false) , array('class'=>'form-control')}}
        @elseif($empdata->gender=="f")
        Male
        {{ Form::radio('gender', 'm' , false) , array('class'=>'form-control')}}
        Female
        {{ Form::radio('gender', 'f' , true) , array('class'=>'form-control')}}
        @endif
        <br><br>

        {{ Form::label('Contact No :') }}
        {{Form::text('contactno',$empdata->contactno,array('class'=>"form-control" ,'required', 'data-parsley-type'=>"number", 'data-parsley-type-message'=>"please enter valid phone number", 'data-parsley-pattern'=>"^\d{10}$", 'data-parsley-pattern-message'=>"Contact number must have 10 digits", 'data-parsley-trigger'=>"keyup"))}}
        <br>

        {{ Form::label('Birthday :') }}
        {{Form::date('bdate',$empdata->bdate,array('class'=>"form-control"))}}
        <br>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit Employee',array('class'=>"btn btn-outline-success shadow"))}}
        {!! Form::close() !!}
            
 
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection