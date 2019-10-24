<?php

    namespace App\Http\Controllers;

    use App\Route_r;

// use App\User;
// use App\Auth;
    use App\Routetime;
    use http\Env\Response;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use PHPUnit\Framework\Error\Error;

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

        function index()
            // {
            //     $routeData=Route_r::all();
            //     return \view('route_r.index') ->with('routeData',$routeData);
            // }
        {
            $routeData = DB::table('route_rs')->orderBy('id', 'asc')->paginate(6);
            return view('route_r.index', compact('routeData'));
        }


        function fetch_data(Request $request)
        {
            if ($request->ajax()) {
                $sort_by = $request->get('sortby');
                $sort_type = $request->get('sorttype');
                $query = $request->get('query');
                $query = str_replace(" ", "%", $query);
                $routeData = DB::table('route_rs')
                    ->where('id', 'like', '%' . $query . '%')
                    ->orwhere('routeNo', 'like', '%' . $query . '%')
                    ->orWhere('startLocation', 'like', '%' . $query . '%')
                    ->orWhere('endLocation', 'like', '%' . $query . '%')
                    ->orWhere('halts', 'like', '%' . $query . '%')
                    ->orWhere('distance', 'like', '%' . $query . '%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(6);
                return view('route_r.route_data', compact('routeData'))->render();
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
                return \view('route_r.create');
            } else {
                $routeData = Route_r::all();
                return \view('route_r.index')->with('routeData', $routeData);
            }
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //validate data
            $this->validate($request, array(
                'routeNo' => 'required',
                'startLocation' => 'required',
                'endLocation' => 'required',
                'halts' => 'required',
                'distance' => 'required',
            ));

            //store data
            $routeSave = new Route_r;
//             dd($routeSave);

            //db colom name -> request name
            $routeSave->routeNo = $request->routeNo;
            $routeSave->startLocation = $request->startLocation;
            $routeSave->endLocation = $request->endLocation;
            $routeSave->halts = $request->halts;
            $routeSave->distance = $request->distance;

            $routeSave->save();

            //redirect to index
            return view('route_r.create');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Route_r $route_r
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $routeData = Route_r::find($id);
            return \view('route_r.show')->with('routeData', $routeData);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Route_r $route_r
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $routeData = Route_r::find($id);
            return \view('route_r.edit')->with('routeData', $routeData);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  \App\Route_r $route_r
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, array(
                'routeNo' => 'required',
            ));

            $routeSave = Route_r::find($id);
            $routeSave->routeNo = $request->routeNo;
            $routeSave->startLocation = $request->startLocation;
            $routeSave->endLocation = $request->endLocation;
            $routeSave->halts = $request->halts;
            $routeSave->distance = $request->distance;

            $routeSave->save();

            $routeData = DB::table('route_rs')->orderBy('id', 'asc')->paginate(6);
            return view('route_r.index', compact('routeData'));
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Route_r $route_r
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $routeData = Route_r::find($id);
            $routeData->delete();

            $routeData = Route_r::all();
            return redirect('route_r/')->with('routeData', $routeData);
        }

        public function getRouts(Request $request)
        {
            $dataSet = [];
            $routeData = Route_r::all();
            foreach ($routeData as $row) {
                $listv = explode(',', $row->halts);
                if (in_array($request->get('fromloc'), $listv) && in_array($request->get('toloc'), $listv)) {
                    array_push($dataSet, $row);
                }
            }
//
//            $routeId = DB::table('route_rs')
//                ->Where(['endLocation' => 'Matara'])->get();

            if (count($dataSet) > 0) {
                $fullData = Routetime::with('route')->with('bus');
                $fullData->where(['route_id' => $dataSet[0]['id']]);
                $fullData = $fullData->get();

                foreach ($fullData as $row) {
                    $listv = explode(',', $row->halts);
                    if (in_array($request->get('fromloc'), $listv) && in_array($request->get('toloc'), $listv)) {
                        array_push($dataSet, $row);
                    }

                }
                return Response()->json($fullData);
            } else {
                return "No Data";
            }
        }

    }
