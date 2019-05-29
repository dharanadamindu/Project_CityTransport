<?php

namespace App\Http\Controllers;

use App\Pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $data = DB::table('post')->orderBy('id', 'asc')->paginate(5);
        return view('pagination', compact('data'));
    }



    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $data = DB::table('post')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orWhere('post_title', 'like', '%'.$query.'%')
                    ->orWhere('post_description', 'like', '%'.$query.'%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(5);
      return view('pagination_data', compact('data'))->render();
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
     * @param  \App\Pagination  $pagination
     * @return \Illuminate\Http\Response
     */
    public function show(Pagination $pagination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pagination  $pagination
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagination $pagination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pagination  $pagination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagination $pagination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pagination  $pagination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagination $pagination)
    {
        //
    }
}
