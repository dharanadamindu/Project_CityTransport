{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">

                {!! Form::open(['route' => ['nearby.update',$hltData->id],'data-parsley-validate'=>'']) !!}

                {{ Form::label('Halt Name :') }}
                {{Form::text('name',$hltData->name,array('class'=>"form-control","required",'data-parsley-pattern'=>"^[0-9/]+$", 'data-parsley-pattern-message'=>"Halt name is invalid"))}}
                <br>

                <label for="descrip">Description:</label>
                {{-- <textarea class="form-control" rows="5" id="name" name="comment" value="{{$feedData->comment}}">{{$feedData->comment}}</textarea> --}}
                <textarea class="form-control" rows="5" id="descrip" name="descrip" placeholder="Description here", data-parsley-maxlength="180" data-parsley-trigger="keyup">{{$hltData->descrip}}</textarea>

                
                {{ form::label('Latitude : ') }}
                {{ form::text('lat',$hltData->lat,array('class' => 'form-control','required')) }}
                <br> 

                {{ form::label('Longitude : ') }}
                {{ form::text('lng',$hltData->lng,array('class' => 'form-control','required')) }}
                <br>
               
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Edit Route',array('class'=>"btn btn-outline-success shadow"))}}
                {!! Form::close() !!}




            {{-- {!! Form::open(['route' => ['route_r.update',$hltData->id]]) !!}

            {{ Form::label('Route No :') }}
            {{Form::text('routeName',$hltData->routeName,array('class'=>"form-control"))}}
            <br>

            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Edit Route',array('class'=>"btn btn-outline-success shadow"))}}
            {!! Form::close() !!} --}}
                
    
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection