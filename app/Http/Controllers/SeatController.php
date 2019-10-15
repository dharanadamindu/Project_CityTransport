<?php

namespace App\Http\Controllers;

use App\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return \view('reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this -> validate($request,array(
//            'bus_id' => 'required',
//            'user_id' =>'required',
//            'date' => 'required',
//            'SeatNo' =>'required',
//            'comment' =>'required',
//
//        ));

        $seatSave = new Seat;

        $seatSave->bus_id = $request->bus_id;
        $seatSave->user_id = $request->user_id;
        $seatSave->date = $request->date;
//        $seatSave->SeatNo = $request->SeatNo;
        $seatSave->comment = $request->comment;
        $seatSave->seatNo = implode(",",$request->seatNo);
//        dd($seatSave);


        $seatSave->save();

//        return view ('reservation.create');
        flash('Data Successfully Inserted')->success();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit(Seat $seat)
    {
//        $finds= checkbox::whereName($name)->first();
        //$seatNo=explode(",",$finds->seatNo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seat $seat)
    {
        //
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
}
