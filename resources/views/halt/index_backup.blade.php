@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <h1 class="text-center">Halt Table</h1>
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
            <a href="/halt/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
        
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Latitude</th>
                <th scope="col">Longitude </th>
                <th scope="col">Description</th>
                <th scope="col">timetable</th>
              </tr>
            </thead>
            <tbody>
                @if(count($hltdata)>0)
                    
                    @foreach ($hltdata as $dta)
                        <tr>
                            <th scope="row">{{$dta->id}}</th>
                            <td>{{$dta->name}}</td>
                            <td>{{$dta->haddress}}</td>
                            <td>{{$dta->lat}}</td>
                            <td>{{$dta->lng}}</td>
                            <td>{{$dta->description}}</td>
                            <td>{{$dta->timetable}}</td>
                                                         
                            <td class="css-form-css-btn">
                                <a href="/halt/{{$dta->id}}/edit" class="btn btn-outline-info"><i class="fas fa-edit"></i> Edit</a>
                            </td>

                            <td class="css-form-css-btn">
                                <form action="/halt/{{$dta->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    
                                    <button type="submit" value="Delete halt" class="btn btn-outline-danger"  id="newpage"><i class="fa fa-trash"></i> Delete</button>
                                    


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
                                <a href="/halt/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>
           
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