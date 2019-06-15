
@extends('layouts.app')

{{-- <style>
    #geomap{
        width: 50%;
        height: 700px;
    }
</style> --}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLbarhqrxyP9XUh29eJzGQnbqbjgITShY&callback=initMap"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLbarhqrxyP9XUh29eJzGQnbqbjgITShY"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLbarhqrxyP9XUh29eJzGQnbqbjgITShY&libraries=places"></script>





@section('content')

<div class="container-fluid">
        {!! Form::open(['route' => 'halt.store']) !!}

        <div class="row">
            <div class="col-sm-6">
                    <label class="form-control-label">Search Location</label>
                    <!-- search input box -->
                    <form>
                        <div class="form-group input-group">
                            <input type="text" id="searchLocation" class="form-control" placeholder="Type location here">
                            <div class="input-group-append">
                                <button class="btn btn-primary get_map" type="submit">
                                    Find
                                </button>
                            </div>
                        </div>
                    </form>
    
                    <!-- display google map -->
                    <div id="geomap"></div>
                    <br>
    
                    <label class="form-control-label">Halt Name</label>
                    {{Form::text('name',null,array('class'=>"form-control", 'maxlength'=>'50' , 'placeholder'=>'Halt Name'))}}
    
                    <br>
                    <!-- display selected location information -->
                    <p>Address: <input type="text" name="haddress" class="search_addr form-control"></p>
                    {{-- <input type="hidden" name="lat" class="search_latitude" size="30"> --}}
                    <input type="hidden" name="lat" class="search_latitude" size="30">
                    <input type="hidden" name="lng" class="search_longitude" size="30">
            </div>
            <div class="col-sm-6">
                
                    <label class="form-control-label ">Description</label>
                    {{Form::textarea('description',null,array('class'=>"form-control", 'rows'=>'5', 'placeholder'=>'Type description'))}}
                    
                    <br>
                    <label class="form-control-label text-uppercase">Time Table</label>
                    {{-- <label class="form-control-label text-uppercase">Route</label> --}}
                    {{-- {{Form::text('route',null,array('class'=>"form-control", 'maxlength'=>'255' , 'placeholder'=>'Route Number'))}} --}}
    
                    {{Form::textarea('timetable',null,array('class'=>"form-control", 'rows'=>'10', 'placeholder'=>'Enter time table here'))}}
                    <br><br>
                    {{Form::submit('Create Halt',array('class'=>"btn form-control btn-success shadow"))}}
            </div>
        </div>

                


              
             
            {!! Form::close() !!}

@endsection


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

<script>
var searchBox = new google.maps.places.SearchBox(document.getElementById('searchLocation'));
</script>

<script>
    var geocoder;
    var map;
    var marker;
    
    /*
        * Google Map with marker
        */
    function initialize() {
        var initialLat = $('.search_latitude').val();
        var initialLong = $('.search_longitude').val();
        initialLat = initialLat?initialLat:6.795002999999999;
        initialLong = initialLong?initialLong:79.90075890000003;
    
        var latlng = new google.maps.LatLng(initialLat, initialLong);
        var options = {
            zoom: 16,
            center: latlng,
            componentRestrictions: {country: "lk"},
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
    
        map = new google.maps.Map(document.getElementById("geomap"), options);
    
        geocoder = new google.maps.Geocoder();
    
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            position: latlng
        });
    
        google.maps.event.addListener(marker, "dragend", function () {
            var point = marker.getPosition();
            map.panTo(point);
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    $('.search_addr').val(results[0].formatted_address);
                    $('.search_latitude').val(marker.getPosition().lat());
                    $('.search_longitude').val(marker.getPosition().lng());
                }
            });
        });
    
    }
    
    $(document).ready(function () {
        //load google map
        initialize();
        
        /*
            * autocomplete location search
            */
        var PostCodeid = '#searchLocation';
        $(function () {
            $(PostCodeid).autocomplete({
                source: function (request, response) {
                    geocoder.geocode({
                        'address': request.term
                    }, function (results, status) {
                        response($.map(results, function (item) {
                            return {
                                label: item.formatted_address,
                                value: item.formatted_address,
                                lat: item.geometry.location.lat(),
                                lon: item.geometry.location.lng()
                            };
                        }));
                    });
                },
                select: function (event, ui) {
                    $('.search_addr').val(ui.item.value);
                    $('.search_latitude').val(ui.item.lat);
                    $('.search_longitude').val(ui.item.lon);
                    var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
                    marker.setPosition(latlng);
                    initialize();
                }
            });
        });
        
        
        /*
            * Point location on google map
            */
        $('.get_map').click(function (e) {
            var address = $(PostCodeid).val();
            geocoder.geocode({'address': address}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    $('.search_addr').val(results[0].formatted_address);
                    $('.search_latitude').val(marker.getPosition().lat());
                    $('.search_longitude').val(marker.getPosition().lng());
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
            e.preventDefault();
        });
    
        //Add listener to marker for reverse geocoding
        google.maps.event.addListener(marker, 'drag', function () {
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('.search_addr').val(results[0].formatted_address);
                        $('.search_latitude').val(marker.getPosition().lat());
                        $('.search_longitude').val(marker.getPosition().lng());
                    }
                }
            });
        });
    });
</script>
