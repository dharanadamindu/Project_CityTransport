<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function index()
    // {
    //     $feedData = Feedback::all();
    //     return \view ('feedback.index') -> with('feedData',$feedData);
    // }

    function index()
    {
        $feedData = DB::table('feedback')->orderBy('id', 'asc')->paginate(6);
        return view('feedback.index', compact('feedData'));
    }



    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $feedData = DB::table('feedback')
                ->where('id', 'like', '%'.$query.'%')
                ->orwhere('name', 'like', '%'.$query.'%')
                ->orWhere('email', 'like', '%'.$query.'%')
                ->orWhere('contactno', 'like', '%'.$query.'%')
                ->orWhere('comment', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(6);
            return view('feedback.feedback_data', compact('feedData'))->render();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('feedback.create');
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
            'email' =>'required',
            'contactno' =>'required',
            'comment' =>'required',

        ));

        $feedSave = new Feedback;

        $feedSave->name = $request->name;
        $feedSave->email = $request->email;
        $feedSave->contactno = $request->contactno;
        $feedSave->comment = $request->comment;


        $feedSave->save();

        return view ('feedback.create');



        //AFTER TEST ADD

        // $feedData = Feedback::all();
        // return \view ('Feedback.index') -> with ('feedData',$feedData);

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
            'email' =>'required',
            'contactno' =>'required',
            'comment' =>'required',

        ));

        $feedSave = Feedback::find($id);
        $feedSave->name = $request->name;
        $feedSave->email = $request->email;
        $feedSave->contactno = $request->contactno;
        $feedSave->comment = $request->comment;

        $feedSave -> save();

        $feedData = DB::table('feedback')->orderBy('id', 'asc')->paginate(6);
        return view('feedback.index', compact('feedData'));
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
