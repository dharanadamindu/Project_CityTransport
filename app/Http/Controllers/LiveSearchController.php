<?php

namespace App\Http\Controllers;

use App\LiveSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $empdta = DB::table('post')->orderBy('id', 'asc')->paginate(5);
        return view('live', compact('empdta'));
    }



    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $empdta = DB::table('post')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orWhere('post_title', 'like', '%'.$query.'%')
                    ->orWhere('post_description', 'like', '%'.$query.'%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(5);
      return view('live_data', compact('empdta'))->render();
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LiveSearch  $liveSearch
     * @return \Illuminate\Http\Response
     */
    public function show(LiveSearch $liveSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LiveSearch  $liveSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(LiveSearch $liveSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LiveSearch  $liveSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiveSearch $liveSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LiveSearch  $liveSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiveSearch $liveSearch)
    {
        //
    }
}
