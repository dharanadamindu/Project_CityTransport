@extends('layouts.app')

@section('content')

<div class="container-fluid">
        
    <div class="rounded mx-auto d-block" style="width:100%" >
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <h1 class="text-center"><b>{{$routeData->routeNo}}</b></h1>
                <img class="card-img-top rounded mx-auto d-block" src="{{asset('images/avatar/avatar_bus.jpg')}}" alt="Card image" style="width:200px">
                <div class="card-body ">
                    
                    <h4 class="card-title">route Number : {{$routeData->routeNo}}</h4>
                    <h4 class="card-title">Start Location : {{$routeData->startLocation}}</h4>
                    <h4 class="card-title">End Location : {{$routeData->endLocation}}</h4><br>
                    <h4 class="card-title">Distance : {{$routeData->distance}} </h4>
                    <br>
                    <h4 class="card-title">Halts : </h4>
                    <p class="h3 card-title">{{$routeData->halts}} </p>


                    <a href="/route_r">
                        <button class="btn btn-primary form-control my-1">back</button>
                    </a>
                    
                        <a href="/route_r/{{$routeData->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
                    
                        <form action="/route_r/{{$routeData->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-outline-danger form-control my-1"><i class="fa fa-trash"> Delete</i></button>
                        </form>
                    </a>
                </div>
            </div>
            
            <div class="col-sm-3">

            </div>
        </div>
                        
    </div> 
</div>

@endsection