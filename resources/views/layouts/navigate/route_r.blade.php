@extends('layouts.app')
    
@section('content') 

<div class="">
    @include('layouts.slideshow')
</div>

<div class="">
    @include('layouts.header')
</div>

{{-- Route page --}}
<div class="view" style="background-image: url('images/plain-light-color-for-guest-background.jpg'); opacity: inherit; background-size: cover;">

    <div class="container-fluid">
            <div class="row">
                    <div class="col-sm-4">
                        <h2>Route 120</h2>
                        {{-- <img src="{{ asset('images/routes/120.PNG') }}" alt="120 route"> <br> --}}
                        <iframe src="https://www.google.com/maps/d/embed?mid=16F_fewxSn2Ay4PAvVafs6psNwnEuvXTz&hl=en" width="100%" height="480"></iframe>
                    </div>
                        
                    <div class="col-sm-2">
                        <h3>Bus stops</h3>
                            <ul>
                                <li>Kesbawa</li>
                                <li>Piliyandala</li>
                                <li>Bokundara</li>
                                <li>Boralasgamuwa</li>
                                <li>Pepiliyana</li>
                                <li>kohuwala</li>
                                <li>Pamankada</li>
                                <li>Havelock</li>
                                <li>Thimbirigasyaya</li>
                                <li>Thummulla</li>
                                <li>Town Hall</li>
                                <li>Ibbanwala</li>
                                <li>Gamani Hall</li>
                                <li>Lake House</li>
                                <li>Pettah</li>
                            </ul>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <h2>Route 255</h2>
                        {{-- <img src="{{ asset('images/routes/120.PNG') }}" alt="120 route"> --}}
                        <iframe src="https://www.google.com/maps/d/embed?mid=1E057ghAu9uuXGeL2NHYO8Hi2ATUIsGKT&hl=en" width="100%" height="480"></iframe>
                    </div>
                    <div class="col-sm-2">
                        <h3>Bus stops</h3>
                            <ul>
                                <li>Kottawa</li>
                                <li>Siddamulla</li>
                                <li>Kudamaduwa</li>
                                <li>Mawiththara</li>
                                <li>Miriswatta</li>
                                <li>Piliyandala</li>
                                <li>Suwarapola</li>
                                <li>Moratuwa Campus</li>
                                <li>Katubadda</li>
                                <li>Angulana</li>
                                <li>Soysapura</li>
                                <li>Rathmalana</li>
                                <li>Mount Lavinia</li>
                            </ul>
                    </div>
                </div>

    </div>
        
</div>


<div class="">
    @include('layouts.footer')
</div>


@endsection