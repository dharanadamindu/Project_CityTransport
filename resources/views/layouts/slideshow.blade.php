{{-- slde show --}}
<div id="Indicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

    </ol>
    <div class="carousel-inner">

        <div class="carousel-item active"> <!--slideshow 1-->
            <img class="d-block w-100" height="250" src={{ asset('images/bus/bus_9.jpg') }} alt="First slide">
            <div class="row">
                <div class="col-9">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="active">City Transport</h5>
                    </div>
                </div>
            </div><!--row-->
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" height="250" src={{ asset('images/bus/bus_8.jpg') }} alt="second slide">
            <div class="row">
                <div class="col-9">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="active">City Transport</h5>
                    </div>
                </div>
            </div><!--row-->
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" height="250" src={{ asset('images/bus/bus_8.jpg') }} alt="third slide">
            <div class="row">
                <div class="col-9">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="active">City Transport</h5>
                    </div>
                </div>
            </div><!--row-->
        </div>


        <div class="carousel-item ">
            <img class="d-block w-100" height="250" src={{ asset('images/bus/bus_10.jpg') }} alt="fourth slide">
            <div class="row">
                <div class="col-9">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="active">City Transport</h5>
                    </div>
                </div>
            </div><!--row-->

        </div>


    </div> <!--carousel-inner-->

    <a class="carousel-control-prev" href="#Indicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#Indicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


</div>