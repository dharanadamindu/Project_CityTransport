<?php

namespace App\Http\Controllers;

use App\Fair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fairData = DB::table('fairs')->orderBy('id', 'asc')->paginate(6);
        return view('fair.index', compact('fairData'));
    }

    function fetch_data(Request $request){
        if($request->ajax()){
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $fairData = DB::table('fair')
                ->where('id', 'like', '%'.$query.'%')
                ->orwhere('from', 'like', '%'.$query.'%')
                ->orWhere('to', 'like', '%'.$query.'%')
                ->orWhere('bfair', 'like', '%'.$query.'%')
                ->orWhere('duration', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(6);
            return view('fair.fair_data', compact('fairData'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('fair.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,array(
            'from' => 'required',
            'to' =>'required',
            'bfair' => 'required',
            'duration' =>'required',

        ));

        $fairSave = new Fair;

        $fairSave->from = $request->from;
        $fairSave->to = $request->to;
        $fairSave->bfair = $request->bfair;
        $fairSave->duration = $request->duration;


        $fairSave->save();

        return view ('fair.create');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fairData = Fair::find($id);
        return \view ('fair.show') -> with ('fairData',$fairData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fairData = Fair::Find($id);
        return \view ('fair.edit') -> with ('fairData', $fairData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, array(
            'from' => 'required',
            'to' =>'required',
            'bfair' =>'required',
            'duration' =>'required',

        ));

        $fairSave = Fair::find($id);
        $fairSave->from = $request->from;
        $fairSave->to = $request->to;
        $fairSave->bfair = $request->bfair;
        $fairSave->duration = $request->duration;

        $fairSave -> save();

        $fairData = DB::table('fairs')->orderBy('id', 'asc')->paginate(6);
        return view('fair.index', compact('fairData'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fairData = fair::find($id);
        $fairData -> delete();

        $fairData = Fair::all();
        return \redirect('fair/') -> with ('fairData', $fairData);
    }
}
