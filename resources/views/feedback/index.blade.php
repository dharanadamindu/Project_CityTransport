@extends('layouts.app')

@section('content')
{{-- <img src="{{asset('image/route/bus.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> --}}
<div class="row">
    <div class="col-sm-12" styles="background-color: yellow;">
        <h1 class="text-center">Feedback Form</h1>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-10">
        
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact No</th>
                <th scope="col">Comment</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                
              </tr>
            </thead>
            <tbody>
                @if(count($feedData)>0)
                    
                    @foreach ($feedData as $dta)
                        <tr>
                            <th scope="row">{{$dta->id}}</th>
                            <td>{{$dta->name}}</td>
                            <td>{{$dta->address}}</td>
                            <td>{{$dta->contactno}}</td>
                            <td>{{$dta->comment}}</td>
 
                            <td class="form-css-btn">
                                <a  href="/feedback/{{$dta->id}}/edit" class="btn btn-outline-info form-controller"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                            <td class="form-css-btn">
                                <form class="form-controller" action="/feedback/{{$dta->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-outline-danger form-controller"><i class="fa fa-trash"> Delete</i></button>
                                </form>
                            </td>
                            <td class="form-css-btn">
                                <a href="/feedback/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"> Read More</i></a>
                            
                            </td>
                            
                        </tr>

                    @endforeach
                    
                @else
                    <h2>Nodata</h2>

                @endif
                
            </tbody>
          </table>
        <a href="/feedback/create"><button class="btn btn-secondary form-control">Add Data</button></a>
        
    
    
    </div>

    <div class="col-sm-1"></div>

</div>
@endsection