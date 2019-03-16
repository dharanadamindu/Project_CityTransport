@extends('layouts.app')

@section('content')
<img src="{{asset('img/route/bus.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
<div class="row">
    <div class="col-sm-12" styles="background-color: yellow;">
        <h1 id="h1">Bus Route Details</h1>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-10">
        
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Route id</th>
                <th scope="col">Route Number</th>
                <th scope="col">Start Location</th>
                <th scope="col">End Location</th>
                <th scope="col">Halts</th>
                <th scope="col">Distance</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Birth Day</th>
              </tr>
            </thead>
            <tbody>
                @if(count($empdata)>0)
                    
                    @foreach ($empdata as $dta)
                        <tr>
                            <th scope="row">{{$dta->id}}</th>
                            <td>{{$dta->name}}</td>
                            <td>{{$dta->address}}</td>
                            <td>{{$dta->role}}</td>
                            <td>{{$dta->nic}}</td>
                           
                            <td>{{$dta->contactno}}</td>
                            <td>{{$dta->bdate}}</td>
                            
                                <td>
                                    <a href="/routes/{{$dta->id}}">read more</a>
                                </td>
                        </tr>

                    @endforeach
                    
                @else
                    <h2>Nodata</h2>
                @endif
                
            </tbody>
          </table>
    
    
    </div>

    <div class="col-sm-1"></div>

</div>
@endsection