@extends('layouts.app')

@section('content')
<br>

    <div class="rounded mx-auto d-block" style="width:auto" >
        <h1 class="text-center"><b>{{$feedData->name}}</b></h1>
        <img class="card-img-top rounded mx-auto d-block" src="{{asset('images/avatar/img_avatar1.png')}}" alt="Card image" style="width:200px">
        <div class="card-body">
            
            <h4 class="card-title">Name : {{$feedData->name}}</h4>
            <h4 class="card-title">Address : {{$feedData->address}}</h4>
            <h4 class="card-title">Contact : {{$feedData->contactno}}</h4><br>
            <h4 class="card-title">Comment</h4>

            <h3 class="card-text"><i>{{$feedData->comment}}</i></h3>
            <a href="/feedback">
                <button class="btn btn-primary form-control my-1">back</button>
            </a>
              
                <a href="/feedback/{{$feedData->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
             
                <form action="/feedback/{{$feedData->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-outline-danger form-control my-1"><i class="fa fa-trash"> Delete</i></button>
                </form>
            </a>
        </div>
    </div>


<br><br><br>

 

{{-- <form action="/employee/{{$emp_data->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="SUBMIT" class="btn btn-danger" value="Delete Employee">
</form> --}}



@endsection