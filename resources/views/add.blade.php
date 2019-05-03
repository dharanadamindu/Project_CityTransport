<style>
    #map-canvas{
        width: 350px;
        height: 250px;
    }
</style>

{{-- <link rel="stylesheet" href="style.css"> --}}
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/dojo/1.13.0/dojo/dojo.js"></script> --}}

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLbarhqrxyP9XUh29eJzGQnbqbjgITShY&libraries=places" type="text/javascript">
</script>

<div class="container">
    <div class="col-sm-4">
        <h1>Add vender Location</h1>
        {{Form::open(array('url'=>'/vender/add','files'=>true))}}
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title"> 
            </div>

            <div class="form-group">
                <label for="map">Map</label>
                <input id="searchmap" type="text"> 
                <div id="map-canvas"></div>
            </div>

            <div class="form-group">
                <label for="lat">Lat</label>
                <input id="lat" class="form-control" type="text" name="lat"> 
            </div>
            <div class="form-group">
                <label for="lng">Lng</label>
                <input id="lng" class="form-control" type="text" name="lng"> 
            </div>

            <button class="btn btn-danger">save</button>

        
        {{Form::close()}}
    </div>
</div>


<script>
    var map = new google.map.Map(document.getElementById('map-canvas'),{
        center:{
            lat: 27.72,
            lng: 85.36
        },
        zoom:15
    });
</script>