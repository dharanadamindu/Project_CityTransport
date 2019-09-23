@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="rounded mx-auto d-block" style="width:100%" >
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <h1 class="text-center"><b>{{$hltdata->name}}</b></h1>
                <img class="card-img-top rounded mx-auto d-block" src="{{asset('images/avatar/avatar_bus.jpg')}}" alt="Card image" style="width:200px">
                <div class="card-body ">
                    
                    <h4 class="card-title">Halt Name : {{$hltdata->name}}</h4>
                    <h4 class="card-title">Halt Address : {{$hltdata->haddress}}</h4>
                    <h4 class="card-title">Latitude: {{$hltdata->lat}}</h4><br>
                    <h4 class="card-title">Longitude : {{$hltdata->lng}} </h4>
                    <h4 class="card-title">Description : {{$hltdata->description}} </h4>
                    <h4 class="card-title">timetable : 
                            <div class="form-group">
                            {{-- <label for="comment">Comment:</label> --}}
                            <textarea class="form-control" rows="10" disabled>
                                {{$hltdata->timetable}} 
                            </textarea>
                            </div> 
                        
                    </h4>
                   

                    <a href="/halt">
                        <button class="btn btn-primary form-control my-1">back</button>
                    </a>
                    @if ((Auth::User()->roleid)==1)
                        <a href="/halt/{{$hltdata->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
                    
                        <form action="/halt/{{$hltdata->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-outline-danger form-control my-1"><i class="fa fa-trash"> Delete</i></button>
                        </form>
                    </a>

                    @elseif((Auth::User()->roleid)==2)
                    @endif
                    
                </div>
            </div>
            
            <div class="col-sm-3">

            </div>
        </div>             
    </div> 



{{-- <form action="/halt/{{$emp_data->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="SUBMIT" class="btn btn-danger" value="Delete halt">
</form> --}}
</form>
</div>

@endsection