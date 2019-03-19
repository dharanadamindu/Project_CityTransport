
{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")

<div class="container">
        
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h2>Complaints</h2>
            <p class="text-justify">
                &emsp; If you have any comments or questions, please let us know by completing our online form below. We value your input as it assists us to continually improve the customer journey. Thanking you for taking the time to share your comments with us.
                We will respond to your enquiry within 3 business days. 
            </p>
                {!! Form::open(['route' => 'feedback.store']) !!}
                <table style="width:100%">
                        <tr>
                            <td> Name :-</td>
                            <td><input type="text" class="form-control" placeholder="Enter your name" name="name" required></td>
                        </tr>
                        
                        <tr>
                            <td> Email :-</td>
                            <td><input type="text" class="form-control" placeholder="Enter your Email" name="address" required></td>
                        </tr>
                        <tr>
                            <td> Contact Number :-</td>
                            <td><input type="text" class="form-control" placeholder="Enter your contact number" name="contactno" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="5" id="name" name="comment" placeholder="Type complants here!"></textarea>
                            </td>
                        </tr>
                </table>
                    <br>
                    <input type="reset" class="form-control btn btn-warning my-1" value="clear">
                    <input type="submit" class="form-control btn btn-success my-1" value="Send"> 
                {!! Form::close() !!}
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
                  
            </div>
        </div>
    </div>
@endsection