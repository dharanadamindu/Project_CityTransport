{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'employee.store']) !!}
            Name :- <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
            <br> 
            Address :- <input type="text" class="form-control" placeholder="Enter your address" name="address" required>
            <br>
            Role :- <input type="text" class="form-control" placeholder="Enter your role" name="role" required>
            <br>
            NIC :- <input type="text" class="form-control" placeholder="Enter your NIC" name="nic" required>
            <br>
            Gender :- <br>
            <input type="radio" id="gen" class="radio" name="gender" value="m" required> Male <br>
            <input type="radio" id="gen" class="radio" name="gender" value="f" required> Female
            <br><br>
            Contact Number :- <input type="text" class="form-control" placeholder="Enter your contact number" name="contactno" required>
            <br>
            Birthday<input type="date" class="form-control" placeholder="Enter your Birthday" name="bdate" required>
            <br>
           
            <input type="submit" class="form-control btn btn-info" value="Save Employee">
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection