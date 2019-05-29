@extends('layouts.app')
    
@section('content') 

{{-- header --}}
<div class="">
    @include('layouts.slideshow')
</div>

<div class="">
    @include('layouts.header')
</div>

{{-- content --}}

<div class="view" style="background-image: url('images/others/plain-light-color-for-guest-background.jpg'); opacity: inherit; background-size: cover;">

<div class="container-fluid">

        
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
                        <td><input type="text" name="name" id="name" placeholder="Enter your Name" required data-parsley-pattern="^[a-zA-Z. ]+$" required data-parsley-pattern-message="Your name is invalid" data-parsley-trigger="keyup" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td> Email :-</td>
                        <td><input type="text" class="form-control" placeholder="Enter your Email" name="email" required data-parsley-type="email" data-parsley-trigger="keyup"></td>
                    </tr>
                    <tr>
                        <td> Contact Number :-</td>
                        <td><input type="text" class="form-control" placeholder="Enter your contact number" name="contactno" required data-parsley-type="number" data-parsley-pattern="^\d{10}$" data-parsley-pattern-message="Contact number must have 10 digits" data-parsley-trigger="keyup"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" rows="5" id="name" name="comment" placeholder="Type complants here!"></textarea>
                        </td>
                    </tr>
            </table>
                <br>

                
                
                <input type="reset" class="form-control btn-warning my-1" value="Clear"> 
                <input type="submit" class="form-control btn btn-success" value="Send"> 
            {!! Form::close() !!}
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
                No. 241,
                Park Road, <br>
                Colombo 05, <br>
                Sri Lanka. <br><br>
                citytransport@gmail.com
                <br><br>
                011245879
        </div>
    </div>
</div>








{{-- content --}}
<br>
{{-- footer --}}
<div class="">
    @include('layouts.footer')
</div>


@endsection