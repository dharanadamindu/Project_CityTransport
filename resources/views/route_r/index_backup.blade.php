@extends('layouts.app')

@section('content')
{{-- <img src="{{asset('img/route/bus.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" styles="background-color: yellow;">
            <h1 class="text-center">Bus Route Details</h1>
        </div>

        <div class="col-sm-1"></div>

        <div class="col-sm-10">

                @if ((Auth::User()->roleid) == 1)
                {{-- {{$routeData}} == (Auth::User()->id} --}}
                    <a href="/route_r/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
                @else
                    
                @endif
                
        


            @if ((Auth::User()->roleid) == 1)
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Route id</th>
                    <th scope="col">Route Number</th>
                    <th scope="col">Start Location</th>
                    <th scope="col">End Location</th>
                    <th scope="col">Halts</th>
                    <th scope="col">Distance</th>


                </tr>
                </thead>
                <tbody>
                    @if(count($routeData)>0)
                        
                        @foreach ($routeData as $dta)
                            <tr>
                                {{-- {{$routeData}} == (Auth::User()->id} --}}
                                <th scope="row">{{$dta->id}}</th>
                                <td>{{$dta->routeNo}}</td>
                                <td>{{$dta->startLocation}}</td>
                                <td>{{$dta->endLocation}}</td>
                                <td>{{$dta->halts}}</td>
                            
                                <td>{{$dta->distance}}</td>
                            
                                <td class="form-css-btn">
                                        <a href="/route_r/{{$dta->id}}/edit" class="btn btn-outline-info my-1"><i class="fas fa-edit"></i> Edit</a>
                                </td>
                        
                                <td class="form-css-btn">
                                    <form action="/route_r/{{$dta->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        
                                        <button type="submit" value="Delete Route" class="btn btn-outline-danger my-1"><i class="fa fa-trash"></i> Delete</button>
                                        {{-- <i class="fa fa-trash"></i> --}}
                                    </form>
                                </td>

                                <td>
                                        <a href="/route_r/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>
                                </td>

                            </tr>

                        @endforeach
                        
                    @else
                        <h2>Nodata</h2>
                    @endif
                    
                </tbody>
                
            </table>

            @else
                    
            @endif

            


            
        </div>

        <div class="col-sm-1"></div>

    </div>
</div>
@endsection