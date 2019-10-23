{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")


    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <div class="row">
        <div class="col-sm-3"></div>

        <div class="col-sm-6">
            {!! Form::open(['route' => ['seat.update' ,null],'data-parsley-validate'=>'']) !!}

            {{--{{ Form::label('Bus id :') }}--}}
            {{--{{Form::text('bus_id',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}--}}
            {{--<br>--}}
            {{ Form::label('Bus id :') }}
            {{Form::text('bus_id',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('User id :') }}
            {{Form::text('user_id',null,array('class'=>"form-control", 'required', 'data-parsley-trigger'=>'keyup'))}}
            <br>
            {{ Form::label('Trip Date :') }}
            {{Form::date('date',null,array('class'=>"form-control",'data-parsley-trigger'=>'onload','hidden'))}}
            <br>

            {{--{{ Form::label('Seat Number :') }}--}}
            {{--{{Form::text('SeatNo',null,array('class'=>"form-control", 'required','data-parsley-trigger'=>'keyup'))}}--}}
            <br>

            <div class="row">
                {{--//1st row--}}
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="1"> 1
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="2"> 2
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="3"> 3
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="4"> 4
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="5"> 5
                </div>
            </div>

            <div class="row">
                {{--//2nd row--}}
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="6"> 6
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="7"> 7
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="8"> 8
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="9"> 9
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="10"> 10
                </div>
            </div>


            <div class="row">
                {{--//3rd row--}}
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="11"> 11
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="12"> 12
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="13"> 13
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="14"> 14
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="seatNo[]" value="15"> 15
                </div>
            </div>
            <br>


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
                        <p><h4 class="modal-title ">Select Information..</h4></p>
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
                                <div class="alert alert-danger" role="alert" id="msg">No Bus Found For This Locations
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
                        <p><h4 class="modal-title ">Select Bus ..</h4></p>
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

    <script type="text/javascript">
        $(function () {
            $("#myModal").modal({backdrop: 'static', keyboard: false});
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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

        function loadRoutes() {
            $.ajax({
                    type: 'post',
                    url: '/findRoutes',
                    data: {'fromloc': $('#fromloc').val(), 'toloc': $('#toloc').val()},
                    success(xmlHttp, statusCode, data) {
                        // alert(JSON.stringify(data))
                        if (data.responseText === 'No Data') {
                            $('.alert').alert();
                        } else {
                            var txt = "";
                            let list = JSON.parse(data.responseText);
                            for (var i = 0; i < list.length; i++) {
                                var val = list[i];
                                txt += "<option id=" + val.bus.id + ">RegNo : " + val.bus.b_regno + " / V-Type : " + val.bus.v_type + "</option>";
                            }
                            $('#bus').append(txt);
                            $('#myModal').modal('hide');
                            $('#routeModal').modal({backdrop: 'static', keyboard: false});
                        }
                    },
                    error(asd, code, er) {
                        alert(er);
                    }
                }
            );
        }

        function busSelected() {
            $("[name=bus_id]").val($('#bus :selected').attr('id'));
            $("[name=bus_id]").attr('id', $('#bus :selected').attr('id'));
            $.ajax({
                    type: 'post',
                    url: '/bookedSeats',
                    data: {'date': '2019-10-09', 'busid': '1'},
                    success(xmlHttp, statusCode, data) {
                        // alert(JSON.stringify(data) + ' ____')
                        $.each(data.responseJSON, function (i, val) {
                            var keys = val.split(',');
                            $.each(keys, function (i, val) {
                                alert(val);

                                alert(JSON.stringify( $(':checkbox [value="1"]')  ));

                                $(':checkbox [value="1"]').attr('checked',true);
                            });
                        });
                        // if (data.responseText === 'No Data') {
                        //     $('.alert').alert();
                        // } else {
                        //     var txt = "";
                        //     let list = JSON.parse(data.responseText);
                        //     for (var i = 0; i < list.length; i++) {
                        //         var val = list[i];
                        //         txt += "<option id=" + val.bus.id + ">RegNo : " + val.bus.b_regno + " / V-Type : " + val.bus.v_type + "</option>";
                        //     }
                        //     $('#bus').append(txt);
                        //     $('#myModal').modal('hide');
                        //     $('#routeModal').modal({backdrop: 'static', keyboard: false});
                        // }
                    },
                    error(asd, code, er) {
                        alert('Error :  ' + er);
                    }
                }
            );
        }
    </script>
@endsection

