@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <h1 class="text-center">Registation List</h1>
        <script>
            function reset () {
                $("#toggleCSS").attr("href", "{{asset('css/themes/alertify.default.css')}}");
                alertify.set({
                    delay : 5000,
                });
            }
        </script>
<div class="row">

    <div class="col-sm-1">
        
    </div>

    <div class="col-sm-10">
            <a href="/employee/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
        
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
                                
                                <td class="css-form-css-btn">
                                    <a href="/employee/{{$dta->id}}/edit" class="btn btn-outline-info"><i class="fas fa-edit"></i> Edit</a>
                                </td>

                                <td class="css-form-css-btn">
                                    <form action="/employee/{{$dta->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        
                                        <button type="submit" value="Delete Employee" class="btn btn-outline-danger"  id="newpage"><i class="fa fa-trash"></i> Delete</button>
                                        


                                        <script>
                                            $("#newpage").on( 'click', function () {
                                                reset();
                                                alertify.error("deleted");
                                                return true;
                                            });
                                        </script>


                                        {{-- <i class="fa fa-trash"></i> --}}

                                    </form>
                                </div>
                            
                                <td>
                                    <a href="/employee/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>
                                    
                                    
                                    


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