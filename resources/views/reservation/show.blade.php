{{-- {{$userData->name}}
{{$userData->email}} --}}

{{-- {{auth::User()->name}}
{{auth::User()->email}} --}}

@extends('layouts.app')

@section('content')

<div class="container-fluid">
        
    <div class="rounded mx-auto d-block" style="width:100%" >
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <h1 class="text-center"><b>{{$seatData->name}}</b></h1>
                <img class="card-img-top rounded mx-auto d-block" src="{{asset('images/avatar/img_avatar1.png')}}" alt="Card image" style="width:200px">
                <div class="card-body ">
                    
                    <h4 class="card-title">name : {{$userData->name}}</h4>
                    <h4 class="card-title">email : {{$userData->email}}</h4>
                    
                    <br>
                    <h4 class="card-title">Role : </h4>
                    <p class="h3 card-title">
                            @if ($userData->roleid=="1")
                            AdminseatData
                            @elseif($userData->roleid=="2")
                            User
                            @endif
                    </p>


                    <a href="/reservation">
                        <button class="btn btn-primary form-control my-1">back</button>
                    </a>
                    
                        <a href="/reservation/{{$seatData->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
                    
                        <form action="/reservation/{{$seatData->id}}" method="post">
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