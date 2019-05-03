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

                <a href="/nearby/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
            
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Halt Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Latitude </th>
                    <th scope="col">Longitude</th>

                </tr>
                </thead>
                <tbody>
                    @if(count($hltData)>0)
                        
                        @foreach ($hltData as $dta)
                            <tr>
                                <th scope="row">{{$dta->id}}</th>
                                <td>{{$dta->name}}</td>
                                <td>{{$dta->Descrip}}</td>
                                <td>{{$dta->lat}}</td>
                                <td>{{$dta->lng}}</td>
                        
                                <td class="form-css-btn">
                                        <a href="/nearby/{{$dta->id}}/edit" class="btn btn-outline-info form-control my-1"><i class="fas fa-edit"></i> Edit</a>
                                </td>
                        
                                <td class="form-css-btn">
                                    <form action="/nearby/{{$dta->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        
                                        <button type="submit" value="Delete Halt" class="btn btn-outline-danger form-control my-1"><i class="fa fa-trash"></i> &nbsp&nbspDelete</button>
                                        {{-- <i class="fa fa-trash"></i> --}}
                                    </form>
                                </td>

                                <td>
                                        <a href="/nearby/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"> Read More</i></a>
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
</div>
@endsection