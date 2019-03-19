<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedData = Feedback::all();
        return \view ('feedback.index') -> with('feedData',$feedData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('layouts.navigate.contactus_c');
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
            'name' => 'required',
        ));

        $feedSave = new Feedback;

        $feedSave->name = $request->name;
        $feedSave->address = $request->address;
        $feedSave->contactno = $request->contactno;
        $feedSave->comment = $request->comment;


        $feedSave->save();

        $feedData = Feedback::all();
        return \view ('Feedback.index') -> with ('feedData',$feedData);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedData = Feedback::find($id);
        return \view ('feedback.show') -> with ('feedData',$feedData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedData = Feedback::Find($id);
        return \view ('feedback.edit') -> with ('feedData', $feedData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, array(
            'name' => 'required',
            
        ));

        $feedSave = Feedback::find($id);
        $feedSave->name = $request->name;
        $feedSave->address = $request->address;
        $feedSave->contactno = $request->contactno;
        $feedSave->comment = $request->comment;

        $feedSave -> save();

        $feedData = Feedback::all();
        return \view ('Feedback.index') -> with ('feedData',$feedData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedData = Feedback::find($id);
        $feedData -> delete();

        $feedData = Feedback::all();
        return \redirect('feedback/') -> with ('feedData', $feedData);
    }
}