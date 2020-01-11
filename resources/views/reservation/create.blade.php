{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")


    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <style>
        input[type="checkbox"][id^="cb"] {
            display: none;
        }

        label {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        label::before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid grey;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        booked {
            content: "✓";
            background-color: red;
            transform: scale(1);
        }

        label img {
            height: 100px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        :checked + label {
            border-color: #ddd;
        }

        :checked + label::before {
            content: "✓";
            background-color: green;
            transform: scale(1);
        }


        :checked + label img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            z-index: -1;
        }


    </style>
    <div class="row">
        <div class="col-sm-3"></div>

        <div class="col-sm-6">
            {!! Form::open(['route' => ['seat.update' ,null],'data-parsley-validate'=>'']) !!}

            {{--{{ Form::label('Bus id :') }}--}}
            {{--{{Form::text('bus_id',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}--}}
            {{--<br>--}}
            {{ Form::label('Bus id :') }}
            {{Form::text('bus_idN',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}
            {{Form::hidden('bus_id',null,null)}}
            <br>
            {{ Form::label('User id :') }}
            {{Form::text('user_idN',auth::User()->name,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}
            {{Form::hidden('user_id',auth::User()->id,null)}}
            <br>
            {{ Form::label('Trip Date :') }}
            {{Form::text('date','dd-mm-yyyy',array('class'=>"form-control",'disabled'=>''))}}
            <br>

            {{--{{ Form::label('Seat Number :') }}--}}
            {{--{{Form::text('SeatNo',null,array('class'=>"form-control", 'required','data-parsley-trigger'=>'keyup'))}}--}}


            <div class="row">
                {{--//1st row--}}
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb1" value="1"> 1
                    <label for="cb1"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb2" value="2"> 2
                    <label for="cb2"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb3" value="3"> 3
                    <label for="cb3"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb4" value="4"> 4
                    <label for="cb4"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb5" value="5"> 5
                    <label for="cb5"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
            </div>

            <div class="row">
                {{--//2nd row--}}
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb6" value="6"> 6
                    <label for="cb6"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb7" value="7"> 7
                    <label for="cb7"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb8" value="8"> 8
                    <label for="cb8"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb9" value="9"> 9
                    <label for="cb9"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
                <div class="col-sm-2" style="display: inline-block;">
                    <input type="checkbox" name="seatNo[]" id="cb10" value="10"> 10
                    <label for="cb10"><img src={{ asset('Images/bus/seat(1).png')}}></img></label>
                </div>
            </div>

            <br>
            <br>
            <div class="row" style="font-size: 20px;">
                <label>Price(Rs) : </label> <label class="text-danger" id="full_price">Rs. 0.00</label>
            </div>

            {{ Form::label('Comment :') }}
            {{Form::text('comment',null,array('class'=>"form-control", 'data-parsley-pattern'=>'^[a-zA-Z. ]+$','data-parsley-pattern-message'=>'comment is invalid', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            <input type="reset" class="form-control btn btn-danger my-1" value="clear data">
            <input type="submit" class="form-control btn btn-success my-1" value="Save Route">

            {!! Form::close() !!}
        </div>
        <div class="col-sm-3"></div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title ">Select Information..</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-plaintext" for="fromloc"> From :</label>
                                    <select class="form-control dropdown" id="fromloc" onchange="loadHalts()" required>
                                        @foreach ($loc as $dta)
                                            <option id="f{{$dta->id}}"> {{$dta->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-plaintext" for="toloc"> To :</label>
                                    <select class="form-control dropdown" id="toloc" required>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-control-plaintext" for="curdate"> Select date :</label>
                                    <input type="date" class="form-control " id="curdate" required/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="alert alert-danger collapse" role="alert" id="msg">No Bus Found For This
                                    Locations
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="loadRoutes()">
                            Continue
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div id="routeModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title ">Select Bus ..</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Select Bus :</label>
                                    <select class=" form-control dropdown" id="bus"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="busSelected()">
                            Continue
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <input type="hidden" id="onePrice" value="0">
    <script type="text/javascript">
        $(function () {
            $("#myModal").modal({backdrop: 'static', keyboard: false});
            $(":checkbox").on('change', function (evt) {
                var seatp = parseFloat($("#onePrice").val());
                var tvalue = 0;
                $.each($("input:checked").not('.booked'), function () {
                    tvalue = tvalue + seatp;
                });
                $("#full_price").text("Rs. " + tvalue);
            });

        });

        function loadPrice() {
            // alert('From:' + $('#fromloc').val() + "--TO:" + $('#toloc').val());
            $.ajax({
                    type: 'get',
                    url: '/getfair',
                    data: {'fromloc': $('#fromloc').val(), 'toloc': $('#toloc').val()},
                    success(xmlHttp, statusCode, data) {
                        var ob = JSON.parse(data.responseText);
                        $("#onePrice").val(parseInt(ob));
                        // alert(ob);
                    },
                    error(asd, code, er) {
                        console.log(er);
                        // alert(er);
                    }
                }
            );
        }


        function loadHalts() {
            $('#toloc').html('');
            var fl = $('#fromloc option:selected').val();
            $.each($('#fromloc').find('option'), function (i, val) {
                var val2 = $(val).text().toString();
                if (fl.trim() !== val2.trim()) {
                    $('#toloc').append("<option id='" + $(val).attr('id') + "'>" + $(val).text() + "</option>");
                }
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function loadRoutes() {
            // alert('From:'+$('#fromloc').val()+"--TO:"+$('#toloc').val());

            if ($("#curdate").val() != '' && $('#toloc').val() != '') {
                $.ajax({
                    type: 'get',
                    url: '/findRoutes',
                    data: {'fromloc': $('#fromloc').val(), 'toloc': $('#toloc').val()},
                    success(xmlHttp, statusCode, data) {
                        if (data.responseText === 'No Data') {
                            $('#msg').html('No Bus Found For This Locations');
                            $('#msg').show(500).delay(5000).hide(500);
                        } else {
                            var txt = "";
                            let list = JSON.parse(data.responseText);
                            for (var i = 0; i < list.length; i++) {
                                var val = list[i];
                                txt += "<option id=" + val.bus.id + " regNo=" + val.bus.b_regno + ">RegNo : " + val.bus.b_regno + " / V-Type : " + val.bus.v_type + "</option>";
                            }
                            $('#bus').append(txt);
                            $('#myModal').modal('hide');
                            $('#routeModal').modal({backdrop: 'static', keyboard: false});
                        }
                    },
                    error(asd, code, er) {
                        console.log(er);
                    }
                });
            } else {
                $('#msg').html('Please Check Date And To Location');
                $('#msg').show(500).delay(7000).hide(500);
            }


            loadPrice();
        }

        function busSelected() {
            $("[name=bus_idN]").val($('#bus :selected').attr('regNo'));
            $("[name=bus_id]").val($('#bus :selected').attr('id'));
            $("[name=bus_id]").attr('id', $('#bus :selected').attr('id'));

            if($('#bus :selected').attr('id') != undefined || $('#bus :selected').attr('id') != ''){
                $.ajax({
                    type: 'get',
                    url: '/bookedSeats',
                    data: {'date': $('#curdate').val(), 'busid': $('#bus :selected').attr('id')},
                    success(xmlHttp, statusCode, data) {
                        // alert(JSON.stringify(data) + ' ____')
                        $.each(data.responseJSON, function (i, val) {
                            var keys = val.split(',');
                            // alert(keys)
                            $.each(keys, function (i, val) {
                                $("[value='" + val + "']").attr('checked', true);
                                $("[value='" + val + "']").attr('disabled', true);
                                $("[value='" + val + "']").removeAttr('name');
                                $("[value='" + val + "']").addClass('booked');
                            });
                        });

                    },
                    error(asd, code, er) {
                       console.log(er);
                    }
                });
            }else{
                $('#msg').html('Please Select Bus Route..');
                $('#msg').show(500).delay(5000).hide(500);
            }

        }
    </script>
@endsection

