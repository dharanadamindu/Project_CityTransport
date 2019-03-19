@extends('layouts.app')

@section('content')
<img src="{{asset('img/route/bus.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
<div class="row">
    <div class="col-sm-12" styles="background-color: yellow;">
        <h1 id="h1">Registation List</h1>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-10">
        
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
              </tr>
            </thead>
            <tbody>
                @if(count($feedData)>0)
                    
                    @foreach ($feedData as $dta)
                        <tr>
                            <th scope="row">{{$dta->id}}</th>
                            <td>{{$dta->name}}</td>
                            
                                <td>
                                    <a href="/feedback/{{$dta->id}}">read more</a>
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