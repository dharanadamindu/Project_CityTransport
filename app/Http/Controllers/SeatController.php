<?php

namespace App\Http\Controllers;

use App\Halt;
use App\Seat;
use App\Routetime;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nexmo\Response;


class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seatData = DB::table('seats')->orderBy('id', 'asc')->paginate(6);
        return view('reservation.index', compact('seatData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seatData = Seat::all();
        $routetimeData = Routetime::all();
        $loc = Halt::all();
        return view('reservation.create', compact('seatData','loc','routetimeData'));

    }

    public function store(Request $request)
    {
        $this -> validate($request,array(
            'bus_id' => 'required',
            'user_id' =>'required',
            'date' => 'required',
//            'SeatNo' =>'required',
            'comment' =>'required',

        ));

        $seatSave = new Seat;

        $seatSave->bus_id = $request->bus_id;
//        dd($seatSave);
        $seatSave->user_id = $request->user_id;
        $seatSave->date = $request->date;
        $seatSave->comment = $request->comment;
        $seatSave->seatNo = implode(",",$request->seatNo);


        $seatSave->save();

        flash('Bus Booked Successfully')->success();
        return redirect()->back();

    }


    public function show(Seat $seat)
    {
        //
    }


    public function edit($id)
    {
        $seatData = Seat::find($id);
        return view('reservation.edit')->with('seatData',$seatData);

    }

    public function update(Request $request, $id)
    {
        $this -> validate($request,array(
            'bus_id' => 'required',
            'user_id' =>'required',
            'date' => 'required',
//            'SeatNo' =>'required',
            'comment' =>'required',

        ));


        $seatSave = Seat::find($id);
        $seatSave->bus_id = $request->bus_id;
        $seatSave->user_id = $request->user_id;
        $seatSave->date = $request->date;
        $seatSave->comment = $request->comment;

//        $seatSave->seatNo = implode(",",$request->seatNo);
//        $getId = $id;
//        $finds = checkbox::whereName($id)->first();
//        $seatNo = explode(",",$finds->seatNo);
//
//        return view('edit',compact('getId','seatNo'));


        $seatSave->save();

        //step 3 redirect to another page
        $seatData = DB::table('Seats')->orderBy('id', 'asc')->paginate(6);
        return view('reservation.index', compact('seatData'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seat $seat)
    {
        //
    }

    public function loadSeats(Request $request){
        $fullSeats = DB::table('seats')->where(['date' => $request->get('date')]);
        $fullSeats = $fullSeats->where(['bus_id' => $request->get('busid')])->pluck('seatNo');

        return Response()->json($fullSeats);
    }
}
