<?php

namespace App\Http\Controllers;

use App\Routetime;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Nexmo\Response;

class RoutetimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create()
    {

        return view('Routetime.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, array(
//                'bus_id' => 'required',
//                'route_id' => 'required',
//                'bookdate' => 'required',
//                'booktime' => 'required',

        ));

        $routetimeSave = new Routetime;
        $routetimeSave->bus_id = $request->bus_id;
        $routetimeSave->route_id = $request->route_id;
        $routetimeSave->bookdate = $request->bookdate;
        $routetimeSave->booktime = $request->booktime;
//            dd($routetimeSave);


        $routetimeSave->save();

        flash('Bus Booked Successfully')->success();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Routetime $routetime
     * @return \Illuminate\Http\Response
     */
    public function show(Routetime $routetime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Routetime $routetime
     * @return \Illuminate\Http\Response
     */
    public function edit(Routetime $routetime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Routetime $routetime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Routetime $routetime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Routetime $routetime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Routetime $routetime)
    {
        //
    }

}
