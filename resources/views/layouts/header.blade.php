@section('name')
    
@endsection
{{-- Nav bar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!--<a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav p-2 mx-auto">
            <li class="nav-item active ml-3">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-lg-5">
                <a class="nav-link" href="/ourservices">Our Services</a>
            </li>
            {{-- <li class="nav-item ml-lg-5">
                <a class="nav-link" href="/timetable">Time Table</a>
            </li> --}}
            <li class="nav-item ml-lg-5">
                <a class="nav-link" href="/route">Bus Routes</a>
            </li>
            <li class="nav-item ml-lg-5">
                <a class="nav-link" href="/contact">Contact US</a>
            </li>
            <li class="nav-item ml-lg-5">
                <a class="nav-link" href="/about">About US</a>
            </li>
            <li class="nav-item ml-lg-5">
                <a class="nav-link" href="/help">Help</a>
            </li>
        </ul>

    </div>


</nav>