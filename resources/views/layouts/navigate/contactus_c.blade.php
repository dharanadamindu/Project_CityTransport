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