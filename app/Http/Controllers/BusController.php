<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busData = DB::table('buses')->orderBy('id', 'asc')->paginate(6);

        return view('bus.index', compact('busData'));
    }


    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $busData = DB::table('buses')
                ->where('id', 'like', '%'.$query.'%')
                ->orwhere('b_regno', 'like', '%'.$query.'%')
                ->orWhere('v_type', 'like', '%'.$query.'%')
                ->orWhere('m_type', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(6);
            return view('bus.bus_data', compact('busData'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ((Auth::User()->roleid) == 1){
            return \view('bus.create');
        }
        else{
            $busData=Bus::all();
            return \view('bus.index') ->with('busData',$busData);
        }
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
            'b_regno' => 'required',
            'v_type' => 'required',
            'm_type' => 'required',

        ));

        //step 2 Store data
        $bussave = new Bus;

        //left side = database column name ----- right side = request name
        $bussave->b_regno = $request->b_regno;
        $bussave->v_type = $request->v_type;
        $bussave->m_type = $request->m_type;

        $bussave->save();

        //step 3 redirect to another page

        return view('Bus.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $busData = Bus::find($id);
        return view ('bus.show')->with('busData', $busData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $busData = Bus::find($id);
        return view('bus.edit')->with('busData',$busData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request,array(
            'b_regno' => 'required',
            'v_type' => 'required',
            'm_type' => 'required',

        ));



        $bussave = Bus::find($id);
        $bussave->b_regno = $request->b_regno;
        $bussave->v_type = $request->v_type;
        $bussave->m_type = $request->m_type;


        $bussave->save();

        //step 3 redirect to another page
        $busData = DB::table('buses')->orderBy('id', 'asc')->paginate(5);
        return view('bus.index', compact('busData'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $busData = Bus::find($id);
        $busData->delete();

        $busData = Bus::all();
        return redirect('bus/')->with('busData',$busData);
    }
}
