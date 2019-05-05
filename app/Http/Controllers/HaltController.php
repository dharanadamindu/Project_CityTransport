<?php

namespace App\Http\Controllers;

use App\Halt;
use Illuminate\Http\Request;

class HaltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hltdata=Halt::all();
        return view ('halt.index') ->with('hltdata',$hltdata) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('halts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, array(
            'name' => 'required|max:255',
            'haddress' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'description' => 'required',
            'timetable' => 'required',
        ));

        // dd($request);
        // store data
        $hltsave = new Halt;

        $hltsave->name = $request->name;
        $hltsave->haddress = $request->haddress;
        $hltsave->lat = $request->lat;
        $hltsave->lng = $request->lng;
        $hltsave->description = $request->description;
        $hltsave->timetable = $request->timetable;

        
        $hltsave->save();
        // redirect
        
        return view('halts.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Halt  $halt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hltdata = Halt::find($id);
        return view ('halt.show')->with('hltdata', $hltdata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Halt  $halt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hltdata = Halt::find($id);
        return view('halt.edit')->with('hltdata',$hltdata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Halt  $halt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ));

        $hltsave = Halt::find($id);
        $hltsave->name = $request->name;
        $hltsave->description = $request->description;
        $hltsave->lat = $request->lat;
        $hltsave->lng = $request->lng;

        
        $hltsave->save();
        // redirect
        
        $hltdata = Halt::all();
        return view('Halt.index')->with('hltdata',$hltdata);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Halt  $halt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hltdata = Halt::find($id);
        $hltdata->delete();

        $hltdata = Halt::all();
        return redirect('halt/')->with('hltdata',$hltdata);
    }
}
