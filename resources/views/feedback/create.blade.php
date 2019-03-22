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
                {!! Form::open(['route' => 'feedback.store', 'data-parsley-validate'=>'']) !!}
                <table style="width:100%">
                        <tr>
                            <td> Name :-</td>
                            <td><input type="text" name="name" id="name" placeholder="Enter your Name" required data-parsley-pattern="^[a-zA-Z ]+$" required data-parsley-pattern-message="Your name is invalid" data-parsley-trigger="keyup" class="form-control" /></td>
                        </tr>
                        
                        <tr>
                            <td> Email :-</td>
                            <td><input type="text" class="form-control" placeholder="Enter your Email" name="address" required data-parsley-type="email" data-parsley-trigger="keyup"></td>
                        </tr>
                        <tr>
                            <td> Contact Number :-</td>
                            <td><input type="text" class="form-control" placeholder="Enter your contact number" name="contactno" required data-parsley-type="number" data-parsley-pattern="^\d{10}$" data-parsley-pattern-message="Contact number must have 10 digits" data-parsley-trigger="keyup"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="5" id="name" name="comment" placeholder="Type complants here!" data-parsley-maxlength="180" data-parsley-trigger="keyup"></textarea>
                            </td>
                        </tr>
                </table>
                    <br>
                    <input type="reset" class="form-control btn btn-warning my-1" value="clear">
                    <input type="submit" id="submit" class="form-control btn btn-success my-1" value="Send"> 
                    {!! Form::close() !!}

    
               
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
                  
            </div>
        </div>
    </div>

@endsection

@section('script')
            
@endsection