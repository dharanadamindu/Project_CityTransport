{{-- @extends('layouts.app')

@section('content')

<div class="container-fluid">
        
    <div class="rounded mx-auto d-block" style="width:100%" >
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <h1 class="text-center"><b>{{$hltData->name}}</b></h1>
                <img class="card-img-top rounded mx-auto d-block" src="{{asset('images/avatar/avatar_bus.jpg')}}" alt="Card image" style="width:200px">
                <div class="card-body ">
                    
                    <h4 class="card-title">route Number : {{$hltData->lat}}</h4>
                    <h4 class="card-title">Start Location : {{$hltData->lng}}</h4>
                    <h5 class="card-title">End Location : {{$hltData->descrip}}</h5><br>
            
                    <a href="/nearby">
                        <button class="btn btn-primary form-control my-1">back</button>
                    </a>
                    
                        <a href="/nearby/{{$hltData->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
                    
                        <form action="/nearby/{{$hltData->id}}" method="post">
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

@endsection --}}