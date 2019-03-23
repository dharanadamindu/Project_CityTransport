{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">

                {!! Form::open(['route' => ['route_r.update',$routeData->id],'data-parsley-validate'=>'']) !!}

                {{ Form::label('Route Name :') }}
                {{Form::text('routeNo',$routeData->routeNo,array('class'=>"form-control","required",'data-parsley-pattern'=>"^[0-9/]+$", 'data-parsley-pattern-message'=>"route number is invalid"))}}
                <br>
                {{ form::label('Start Location : ') }}
                {{ form::text('startLocation',$routeData->startLocation,array('class' => 'form-control','required')) }}
                <br> 

                {{ form::label('End Location : ') }}
                {{ form::text('endLocation',$routeData->endLocation,array('class' => 'form-control','required')) }}
                <br>
                {{-- <textarea class="form-control" rows="5" name="halts" placeholder="ex : katubadda,piliyandala,miriswatta">{{$feedData->comment}}</textarea>
                <br> --}}

                {{ form::label('Halts') }}
                {{ form::textarea('halts',$routeData->halts, array('class' => 'form-control', 'cols' => 20, 'rows' =>5 ,'required'))}}
                <br>
                {{ form::label('Distance : ') }}
                {{ form::text('distance',$routeData->distance ,array('class' => 'form-control')) }}

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
</div>
@endsection