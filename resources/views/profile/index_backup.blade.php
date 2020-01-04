@extends('layouts.app')

@section('content')

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }
    </style>



    <div class="container-fluid">
        {{-- <img src="{{asset('image/route/bus.jpg')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> --}}
        <div class="row">
            <div class="col-sm-12" styles="background-color: yellow;">
                <h1 class="text-center">profile Form</h1>
            </div>

            <div class="col-sm-1"></div>

            @if ((Auth::User()->roleid)==1)

                <div class="col-sm-10">

                    {{-- <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a> --}}

                    {{-- <a href="/profile/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a> --}}
                    <table class="table table-dark" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($userData)>0)

                            @foreach ($userData as $dta)
                                <tr>
                                    <th scope="row">{{$dta->id}}</th>
                                    <td>{{$dta->name}}</td>
                                    <td>{{$dta->email}}</td>
                                    <td>
                                        @if (($dta->roleid)==1)
                                            Admin
                                        @elseif(($dta->roleid)==2)
                                            User
                                        @endif
                                    </td>


                                    <td class="form-css-btn">
                                        <a href="/profile/{{$dta->id}}/edit" class="btn btn-outline-info"><i
                                                class="fas fa-edit"></i> Edit</a>
                                    </td>
                                    <td class="form-css-btn">
                                        <form class="form-controller" action="/profile/{{$dta->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-outline-danger"><i
                                                    class="fa fa-trash"> </i> Delete
                                            </button>
                                        </form>
                                    </td>
                                    <td class="form-css-btn">
                                        <a href="/profile/{{$dta->id}}" class="btn btn-outline-info"><i
                                                class=" fa fa-plus"> </i> Read More</a>

                                    </td>

                                </tr>

                            @endforeach

                        @else
                            <h2>Nodata</h2>

                        @endif

                        </tbody>
                    </table>
                </div>



            @elseif((Auth::User()->roleid)==2)
                {{--                <div class="col-sm-10">--}}
                {{--                    <table class="table table-dark" style="width:100%">--}}
                {{--                        <thead>--}}
                {{--                        <tr>--}}
                {{--                            <th scope="col">ID</th>--}}
                {{--                            <th scope="col">Name</th>--}}
                {{--                            <th scope="col">Email</th>--}}
                {{--                            <th scope="col">Role</th>--}}
                {{--                            <th scope="col"></th>--}}
                {{--                            <th scope="col"></th>--}}
                {{--                            <th scope="col"></th>--}}
                {{--                        </tr>--}}
                {{--                        <tr>--}}
                {{--                            <th>{{auth::User()->id}}</th>--}}
                {{--                            <td>{{auth::User()->name}}</td>--}}
                {{--                            <td>{{auth::User()->email}}</td>--}}
                {{--                            <td> User</td>--}}

                {{--                            <td class="form-css-btn">--}}
                {{--                                <a href="/profile/{{auth::User()->id}}/edit"--}}
                {{--                                   class="btn btn-outline-info form-controller"><i--}}
                {{--                                        class="fas fa-edit tiny"></i> Edit</a>--}}
                {{--                            </td>--}}
                {{--                            <td class="form-css-btn">--}}
                {{--                                <form class="form-controller" action="/profile/{{auth::User()->id}}" method="post">--}}
                {{--                                    {{csrf_field()}}--}}
                {{--                                    {{method_field('DELETE')}}--}}
                {{--                                    <button type="submit" class="btn btn-outline-danger form-controller"><i--}}
                {{--                                            class="fa fa-trash"></i> Delete--}}
                {{--                                    </button>--}}
                {{--                                </form>--}}
                {{--                            </td>--}}
                {{--                            <td class="form-css-btn">--}}
                {{--                                <a href="/profile/{{auth::User()->id}}" class="btn btn-outline-info"><i--}}
                {{--                                        class=" fa fa-plus tiny"></i> Read More</a>--}}
                {{--                            </td>--}}

                {{--                        </tr>--}}
                {{--                    </table>--}}
                {{--                </div>--}}




                <div class="card">
                    <img src="/public/Images/avatar/img_avatar1.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>



            @endif


            <div class="col-sm-1"></div>

        </div>
    </div>



@endsection
