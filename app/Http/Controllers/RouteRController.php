<?php

namespace App\Http\Controllers;

use App\Route_r;
use Illuminate\Http\Request;

class RouteRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routeData=Route_r::all();
        return \view('route_r.index') ->with('routeData',$routeData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('route_r.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request,array(
        'routeNo' => 'required',
        // 'startLocation'=>'required',
        // 'endLocation'=>'required',
        // 'halts'=>'required',
        // 'distance'=>'required',
        ));

        //store data
        $routeSave = new Route_r;

        //db colom name -> request name
        $routeSave->routeNo = $request->routeNo;
        // $routeSave->startLocation = $request->startLocation;
        // $routeSave->endLocation = $request->endLocation;
        // $routeSave->halts = $request->halts;
        // $routeSave->distance = $request->distance;

        $routeSave->save();

        //redirect to index
        return \view('route_r.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $routeData = Route_r::find($id);
        return \view ('route_r.show')->with('routeData',$routeData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routeData = Route_r::find($id);
        return \view('route_r.edit')->with('routeData',$routeData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this -> validate($request,array(
            'routeNo' => 'required', 
        ));

        $routeSave = Route_r::find($id);
        $routeSave->routeNo = $request->routeNo;

        $routeSave->save();

        $routeData = Employee::all();
        return view('route_r.index')->with('routeData',$routeData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $routeData = Route_r::find($id);
        $routeData->delete();

        $routeData = Route_r::all();
        return redirect('route_r/')->with('routeData',$routeData);
    }
}
