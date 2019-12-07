<?php

namespace App\Http\Controllers;

use App\Cardpayment;
use Illuminate\Http\Request;

class CardpaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardData = DB::table('cardpayments')->orderBy('id', 'asc')->paginate(6);
        return view('bus.index', compact('cardData'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $cardData = DB::table('cardpayments')
                ->where('id', 'like', '%'.$query.'%')
                ->orwhere('cardNo', 'like', '%'.$query.'%')
                ->orWhere('expiry', 'like', '%'.$query.'%')
                ->orWhere('cvv', 'like', '%'.$query.'%')
                ->orWhere('balance', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(6);
            return view('card.card_data', compact('cardData'))->render();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cardData=Cardpayment::all();
        return \view('cardpayment.index') ->with('cardData',$cardData);
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
            'cardNo' => 'required',
            'expiry' => 'required',
            'cvv' => 'required',

        ));

        //step 2 Store data
        $cardSave = new Cardpayment;

        //left side = database column name ----- right side = request name
        $cardSave->cardNo = $request->cardNo;
        $cardSave->expiry = $request->expiry;
        $cardSave->cvv = $request->cvv;
        $cardSave->balance = $request->balance;

        $cardSave->save();

        //step 3 redirect to another page

        return view('cardpayment.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cardpayment  $cardpayment
     * @return \Illuminate\Http\Response
     */
    public function show(Cardpayment $cardpayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cardpayment  $cardpayment
     * @return \Illuminate\Http\Response
     */
    public function edit(Cardpayment $cardpayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cardpayment  $cardpayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cardpayment $cardpayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cardpayment  $cardpayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cardpayment $cardpayment)
    {
        //
    }
}
