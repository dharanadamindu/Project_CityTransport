@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/style_citytransport.css')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in! <br>
                        Welcome {{auth::User()->name}}!!

                        <?php $_SESSION['userid'] = auth::User()->id;?>

                    </div>

                    <city>
                        <svg viewBox="0 0 1320 300">
                            <!--pattern-->
                            <defs>
                                <pattern id="GPattern" x="0" y="0" width="20" height="20"
                                         patternUnits="userSpaceOnUse"
                                         patternTransform="rotate(35)">
                                    <animateTransform attributeType="xml"
                                                      attributeName="patternTransform"
                                                      type="rotate"
                                                      from="35"
                                                      to="395"
                                                      begin="0"
                                                      dur="160s" repeatCount="indefinite"/>
                                    <circle cx="10" cy="10" r="10" stroke="none" fill="red">
                                        <animate attributeName="r"
                                                 type="xml"
                                                 from="1" to="1"
                                                 values="1; 10; 1"
                                                 begin="0s" dur="2s"
                                                 repeatCount="indefinite"
                                        />
                                    </circle>
                                </pattern>
                            </defs>

                            <!-- Symbol -->
                            <!--c-->
                            <symbol id="c-text">
                                <text text-anchor="middle"
                                      x="5%" y="50%" dy=".55em">
                                    c
                                </text>
                            </symbol>

                            <!--i-->
                            <symbol id="i-text">
                                <text text-anchor="middle"
                                      x="10%" y="50%" dy=".55em">
                                    i
                                </text>
                            </symbol>

                            <!-- t-->
                            <symbol id="t-text">
                                <text text-anchor="middle"
                                      x="15%" y="50%" dy=".55em">
                                    t
                                </text>
                            </symbol>

                            <!--y-->
                            <symbol id="y-text">
                                <text text-anchor="middle"
                                      x="22%" y="50%" dy=".55em">
                                    y
                                </text>
                            </symbol>

                            <!--t-->
                            <symbol id="tr-text">
                                <text text-anchor="middle"
                                      x="32%" y="75%" dy=".55em">
                                    t
                                </text>
                            </symbol>

                            <!--r-->
                            <symbol id="r-text">
                                <text text-anchor="middle"
                                      x="39%" y="75%" dy=".55em">
                                    r
                                </text>
                            </symbol>

                            <!--a-->
                            <symbol id="a-text">
                                <text text-anchor="middle"
                                      x="48%" y="75%" dy=".55em">
                                    a
                                </text>
                            </symbol>

                            <!--n-->
                            <symbol id="n-text">
                                <text text-anchor="middle"
                                      x="57%" y="75%" dy=".55em">
                                    n
                                </text>
                            </symbol>

                            <!--s-->
                            <symbol id="s-text">
                                <text text-anchor="middle"
                                      x="65%" y="75%" dy=".55em">
                                    s
                                </text>
                            </symbol>

                            <!--p-->
                            <symbol id="p-text">
                                <text text-anchor="middle"
                                      x="72%" y="75%" dy=".55em">
                                    p
                                </text>
                            </symbol>

                            <!--o-->
                            <symbol id="o-text">
                                <text text-anchor="middle"
                                      x="80%" y="75%" dy=".55em">
                                    o
                                </text>
                            </symbol>

                            <!--rt-->
                            <symbol id="rt-text">
                                <text text-anchor="middle"
                                      x="88%" y="75%" dy=".55em">
                                    r
                                </text>
                            </symbol>

                            <!--tl-->
                            <symbol id="tl-text">
                                <text text-anchor="middle"
                                      x="95%" y="75%" dy=".55em">
                                    t
                                </text>
                            </symbol>


                            <!-- Duplicate symbols -->
                            <use id="g-usetag" xlink:href="#c-text" class="text2" style="fill: url(#GPattern)"/>

                            <use xlink:href="#i-text" class="text1"></use>
                            <use xlink:href="#i-text" class="text1"></use>
                            <use xlink:href="#i-text" class="text1"></use>

                            <use xlink:href="#t-text" class="text"></use>
                            <use xlink:href="#t-text" class="text"></use>
                            <use xlink:href="#t-text" class="text"></use>
                            <use xlink:href="#t-text" class="text"></use>
                            <use xlink:href="#t-text" class="text"></use>

                            <use xlink:href="#y-text" class="text1"></use>
                            <use xlink:href="#y-text" class="text1"></use>
                            <use xlink:href="#y-text" class="text1"></use>

                            <use id="g-usetag" xlink:href="#tr-text" class="text2" style="fill: url(#GPattern)"/>

                            <use xlink:href="#r-text" class="text1"></use>
                            <use xlink:href="#r-text" class="text1"></use>
                            <use xlink:href="#r-text" class="text1"></use>

                            <use xlink:href="#a-text" class="text"></use>
                            <use xlink:href="#a-text" class="text"></use>
                            <use xlink:href="#a-text" class="text"></use>
                            <use xlink:href="#a-text" class="text"></use>
                            <use xlink:href="#a-text" class="text"></use>

                            <use xlink:href="#n-text" class="text1"></use>
                            <use xlink:href="#n-text" class="text1"></use>
                            <use xlink:href="#n-text" class="text1"></use>

                            <use xlink:href="#s-text" class="text"></use>
                            <use xlink:href="#s-text" class="text"></use>
                            <use xlink:href="#s-text" class="text"></use>
                            <use xlink:href="#s-text" class="text"></use>
                            <use xlink:href="#s-text" class="text"></use>

                            <use xlink:href="#p-text" class="text1"></use>
                            <use xlink:href="#p-text" class="text1"></use>
                            <use xlink:href="#p-text" class="text1"></use>

                            <use xlink:href="#o-text" class="text"></use>
                            <use xlink:href="#o-text" class="text"></use>
                            <use xlink:href="#o-text" class="text"></use>
                            <use xlink:href="#o-text" class="text"></use>
                            <use xlink:href="#o-text" class="text"></use>

                            <use xlink:href="#rt-text" class="text1"></use>
                            <use xlink:href="#rt-text" class="text1"></use>
                            <use xlink:href="#rt-text" class="text1"></use>

                            <use xlink:href="#tl-text" class="text"></use>
                            <use xlink:href="#tl-text" class="text"></use>
                            <use xlink:href="#tl-text" class="text"></use>
                            <use xlink:href="#tl-text" class="text"></use>
                            <use xlink:href="#tl-text" class="text"></use>

                        </svg>
                        <!-- partial -->
                    </city>
                </div>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>






@endsection
