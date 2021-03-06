@extends('layouts.app')

@section('content')

<div class="container-fluid">
{{-- <img src="{{asset('image/route/bus.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> --}}
<div class="row">
    <div class="col-sm-12" styles="background-color: yellow;">
        <h1 class="text-center">Feedback Form</h1>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-10">
        <a href="/feedback/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
        <table class="table table-dark" style="width:100%">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No</th>
                <th scope="col">Comment</th>
                <th scope="col">Action</th>
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
                            <td>{{$dta->email}}</td>
                            <td>{{$dta->contactno}}</td>
                            <td>
                                <?php
                                    $comment = "$dta->comment";
                                    $nextline = wordwrap($comment, 50, "\n", true);
                                    echo "$nextline\n";
                                          

                                ?>
                            </td>
                            <td class="form-css-btn">
                                <a  href="/feedback/{{$dta->id}}/edit" class="btn btn-outline-info form-controller"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                            <td class="form-css-btn">
                                <form class="form-controller" action="/feedback/{{$dta->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-outline-danger form-controller"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                            <td class="form-css-btn">
                                <a href="/feedback/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>
                            
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