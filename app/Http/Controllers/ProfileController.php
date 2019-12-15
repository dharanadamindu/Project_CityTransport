<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $userData=User::all();
        // return view('profile.index') ->with('userData',$userData);

        {
            $userData = DB::table('Users')->orderBy('id', 'asc')->paginate(5);
            return view('profile.index', compact('userData'));
        }

    }


    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $userData = DB::table('Users')
                ->where('id', 'like', '%' . $query . '%')
                ->orwhere('roleid', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('email', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('profile.profile_data', compact('userData'))->render();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if ((Auth::User()->roleid) == 1) {
            $userData = User::all();
            return \view('profile.create')->with('userData', $userData);
        } else {
            $userData = User::all();
            return \view('profile.index')->with('userData', $userData);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
        ));

        //store data
        $userSave = new User;

        //db colom name -> request name
        $userSave->name = $request->name;
        $userSave->email = $request->email;
        $userSave->roleid = $request->roleid;

        // dd($routeSave);
        $userSave->save();

        //redirect to index
        return view('profile.create');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $userData = Auth::User();
        // $userData = User::all();

        $userData = User::find($id);
        // dd ($user);
        return view('profile.show')->with('userData', $userData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userData = User::find($id);
        return \view('profile.edit')->with('userData', $userData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(// 'name' => 'required',
        ));

        //store data
        $userSave = User::find($id);

        //db colom name -> request name
        $userSave->name = $request->name;
        $userSave->email = $request->email;
        $userSave->roleid = $request->roleid;

        // dd($routeSave);
        $userSave->save();

        //redirect to index
        $userData = DB::table('Users')->orderBy('id', 'asc')->paginate(5);
        return view('profile.index', compact('userData'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userData = User::find($id);
        $userData->delete();

        $UserData = User::all();
        return \view('profile.index')->with('userData', $UserData);
    }

    public function getLocation()
    {
        $userData = User::find(Auth::User()->id);
//        $userData = DB::table('Users');
        return Response()->json($userData);
//            return Response()->json($);;
    }
}
