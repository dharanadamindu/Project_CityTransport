@extends('layouts.app')

@section('content')

<h1>{{$emp_data->name}}</h1>
<h1>{{$emp_data->address}}</h1>

<a href="/employee">
    <button class="btn btn-primary">back</button>
</a>
<br><br><br>


{{-- <form action="/employee/{{$emp_data->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="SUBMIT" class="btn btn-danger" value="Delete Employee">
</form> --}}

<form action="/employee/{{$emp_data->id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <input type="submit" value="Delete employee" class="btn btn-dark">
</form>

@endsection