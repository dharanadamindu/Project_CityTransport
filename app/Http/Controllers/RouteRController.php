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
        return \view('route_r.index')->with('routeData',$routeData);
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
        'RouteNo'=>'required|max:5',
        'StartLocation'=>'required|max:15',
        'EndLocation'=>'required|max:15',
        'Halts'=>'required|max:255',
        'Distance'=>'required|max:5',
        ));

        //store data
        $routeSave=new Route_r;

        //db colom name -> request name
        $routeSave->routeNo = $request->RouteNo;
        $routeSave->startLocation = $request->StartLocation;
        $routeSave->endLocation = $request->EndLocation;
        $routeSave->halts = $request->Halts;
        $routeSave->distance = $request->Distance;

        $routeSave->save();

        //redirect to index
        return \view('Route_r.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function show(Route_r $route_r)
    {
        $routeData = Route_r::find($id);
        return \view ('route_r.show'->with('routeData',$routeData));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function edit(Route_r $route_r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route_r $route_r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route_r  $route_r
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route_r $route_r)
    {
        //
    }
}
