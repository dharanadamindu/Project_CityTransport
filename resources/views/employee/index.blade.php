@extends('layouts.app')

@section('content')
<img src="{{asset('img/route/bus.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
<div class="row">
    <div class="col-sm-12" styles="background-color: yellow;">
        <h1 id="h1">Ads Index page</h1>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-10">
        
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Role</th>
                <th scope="col">NIC</th>
                <th scope="col">Gender</th>
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
                            <td>
                            
                            {{-- @if ('{{$dta->gender->(m)}}')
                            Male
                            @elseif ('{{$dta->gender->(f)}}')
                            Female
                            @else
                            no recodes    
                            @endif --}}

                            @if ($dta->gender=="m")
                            Male
                            {{-- <option value="male" selected>Male</option>
                            <option value="female">Female</option> --}}
                            @elseif($dta->gender=="f")
                            Female
                            {{-- <option value="male">Male</option>
                            <option value="female" selected>Female</option> --}}
                            @endif
                            
                            </td>
                            <td>{{$dta->contactno}}</td>
                            <td>{{$dta->bdate}}</td>
                            
                                <td>
                                    <a href="/employee/{{$dta->id}}">read more</a>
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