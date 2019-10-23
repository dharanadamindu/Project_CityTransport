<?php

namespace App\Http\Controllers;

use App\Halt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HaltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $hltdata = DB::table('halts')->orderBy('id', 'asc')->paginate(5);
        return view('halt.index', compact('hltdata'));
    }



    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $hltdata = DB::table('halts')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orwhere('name', 'like', '%'.$query.'%')
                    ->orWhere('haddress', 'like', '%'.$query.'%')
                    ->orWhere('lat', 'like', '%'.$query.'%')
                    ->orWhere('lng', 'like', '%'.$query.'%')
                    ->orWhere('description', 'like', '%'.$query.'%')
                    ->orWhere('timetable', 'like', '%'.$query.'%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(5);
      return view('halt.halt_data', compact('hltdata'))->render();
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('halt.create');
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
        
        return view('halt.create');

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
            'haddress' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'description' => 'required',
            'timetable' => 'required',
        ));

        $hltsave = Halt::find($id);
        $hltsave->name = $request->name;
        $hltsave->haddress = $request->haddress;
        $hltsave->lat = $request->lat;
        $hltsave->lng = $request->lng;
        $hltsave->description = $request->description;
        $hltsave->timetable = $request->timetable;

        
        $hltsave->save();
        // redirect
        
        $hltdata = DB::table('halts')->orderBy('id', 'asc')->paginate(5);
        return view('halt.index', compact('hltdata'));
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


    public function ajaxRequestPost(Request $request)
    {
        $hlt = Halt::all();
        return response()->json([$hlt]);


    }
}
