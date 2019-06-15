@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="rounded mx-auto d-block" style="width:100%" >
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <h1 class="text-center"><b>{{$busData->name}}</b></h1>
                <img class="card-img-top rounded mx-auto d-block" src="{{asset('images/avatar/img_avatar1.png')}}" alt="Card image" style="width:200px">
                <div class="card-body ">
                    
                    <h4 class="card-title">Bus Registration number : {{$busData->b_regno}}</h4>
                    <h4 class="card-title">Type : {{$busData->v_type}}</h4>
                    <h4 class="card-title">Model: {{$busData->m_type}}</h4><br>
                    
                 


                    <a href="/bus">
                        <button class="btn btn-primary form-control my-1">back</button>
                    </a>
                    
                        <a href="/bus/{{$busData->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
                    
                        <form action="/bus/{{$busData->id}}" method="post">
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



{{-- <form action="/bus/{{$emp_data->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="SUBMIT" class="btn btn-danger" value="Delete bus">
</form> --}}
</form>
</div>

@endsection