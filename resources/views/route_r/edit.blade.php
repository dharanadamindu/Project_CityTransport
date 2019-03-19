{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

            {!! Form::open(['route' => ['route_r.update',$routeData->id]]) !!}

            {{ Form::label('Route Name :') }}
            {{Form::text('routeNo',$routeData->routeNo,array('class'=>"form-control"))}}
            <br>
    
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Edit Route',array('class'=>"btn btn-outline-success shadow"))}}
            {!! Form::close() !!}




        {{-- {!! Form::open(['route' => ['route_r.update',$routeData->id]]) !!}

        {{ Form::label('Route No :') }}
        {{Form::text('routeName',$routeData->routeName,array('class'=>"form-control"))}}
        <br>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit Route',array('class'=>"btn btn-outline-success shadow"))}}
        {!! Form::close() !!} --}}
            
 
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection