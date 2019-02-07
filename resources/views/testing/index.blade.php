@extends('layouts.app')

@section('content')
  
  {{-- Footer --}}
<footer class="badge-dark text-light p-1">
    


<div class="card-group">
    <div class="card text-black bg-secondary">
      <div class="card-body text-center">
          <img class="rounded mx-auto d-block" width="300" height="150" src={{ asset('images/others/footer2.png') }} alt="footerimg">
      </div>
    </div>
    <div class="card text-black bg-secondary">
      <div class="card-body text-center">
        <p class="card-text"><h4>Contact Us</h4>
          <ul type="square">
              <li>contact us</li>
              <li>about us</li>
              <li>Privacy policy</li>
              <li>Terms & Conditions</li>
          </ul></p>
      </div>
    </div>
    <div class="card text-black bg-secondary">
      <div class="card-body text-center">
        <p class="card-text"><p>Social media</p>
        <p>follow us on </p>
        https://www.facebook/citytransport.com
      </div>
    </div>
    <div class="card text-black bg-secondary">
      <div class="card-body text-center">
        <p class="card-text">No. 241,
            Park Road, <br>
            Colombo 05, <br>
            Sri Lanka. <br><br>
            citytransport@gmail.com
            <br><br>
            011245879</p>
      </div>
    </div>  
</div> 


</footer>
@endsection