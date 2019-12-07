@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="rounded mx-auto d-block" style="width:100%" >
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <h1 class="text-center"><b>{{$empData->name}}</b></h1>
                <img class="card-img-top rounded mx-auto d-block" src="{{asset('images/avatar/img_avatar1.png')}}" alt="Card image" style="width:200px">
                <div class="card-body ">
                    
                    <h4 class="card-title">Name : {{$empData->name}}</h4>
                    <h4 class="card-title">Address : {{$empData->address}}</h4>
                    <h4 class="card-title">Role: {{$empData->role}}</h4><br>
                    <h4 class="card-title">NIC : {{$empData->nic}} </h4>
                    <h4 class="card-title">Gender : 
                            @if ($empData->gender=="m")
                            Male
                            {{-- <option value="male" selected>Male</option>
                            <option value="female">Female</option> --}}
                            @elseif($empData->gender=="f")
                            Female
                            {{-- <option value="male">Male</option>
                            <option value="female" selected>Female</option> --}}
                            @endif
                    </h4>
                    <h4 class="card-title">Contact No : {{$empData->contactno}} </h4>
                    <h4 class="card-title">Birth Day : {{$empData->bdate}} </h4>
                    <br>
                    


                    <a href="/employee">
                        <button class="btn btn-primary form-control my-1">back</button>
                    </a>
                    
                        <a href="/employee/{{$empData->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
                    
                        <form action="/employee/{{$empData->id}}" method="post">
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



{{-- <form action="/employee/{{$emp_data->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="SUBMIT" class="btn btn-danger" value="Delete Employee">
</form> --}}
</form>
</div>

@endsection