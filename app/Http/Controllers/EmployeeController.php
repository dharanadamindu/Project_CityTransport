<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
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
        
        $empData = DB::table('employees')->orderBy('id', 'asc')->paginate(6);
        
        return view('employee.index', compact('empData'));
    }



    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $empData = DB::table('employees')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orwhere('name', 'like', '%'.$query.'%')
                    ->orWhere('address', 'like', '%'.$query.'%')
                    ->orWhere('role', 'like', '%'.$query.'%')
                    ->orWhere('b_regno', 'like', '%'.$query.'%')
                    ->orWhere('nic', 'like', '%'.$query.'%')
                    ->orWhere('gender', 'like', '%'.$query.'%')
                    ->orWhere('contactno', 'like', '%'.$query.'%')
                    ->orWhere('bdate', 'like', '%'.$query.'%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(6);
      return view('employee.employee_data', compact('empData'))->render();
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //step 1 validate data
        $this -> validate($request,array(
            'name' => 'required|max:50', 
            'address' => 'required|max:255',
            // 'role' => 'required|max:15',
            'role' => 'required',
            'nic' => 'required|max:10|min:10',
            'gender' => 'required|max:1',
            'contactno' => 'required',
            'bdate' => 'required',

            
        ));

        //step 2 Store data
        $empsave = new Employee;

        //left side = database column name ----- right side = request name
        $empsave->name = $request->name;
        $empsave->address = $request->address;
        $empsave->role = $request->role;
        $empsave->b_regno = $request->b_regno;
        $empsave->nic = $request->nic;
        $empsave->gender = $request->gender;
        $empsave->contactNO = $request->contactno;
        $empsave->bdate = $request->bdate;


        $empsave->save();        

        //step 3 redirect to another page

        return view('Employee.create');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empData = Employee::find($id);
        return view ('employee.show')->with('empData', $empData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empData = Employee::find($id);
        return view('employee.edit')->with('empData',$empData);
    }

 

    public function update(Request $request, $id)
    {
      
        $this -> validate($request,array(
            'name' => 'required|max:50', 
            'address' => 'required|max:255',
            'role' => 'required|max:15',
            'role' => 'required',
            'nic' => 'required|max:10|min:10',
            'gender' => 'required|max:1',
            'contactno' => 'required|max:10',
            'bdate' => 'required',      
        ));



        $empsave = Employee::find($id);
        $empsave->name = $request->name;
        $empsave->address = $request->address;
        $empsave->role = $request->role;
        $empsave->b_regno = $request->b_regno;
        $empsave->nic = $request->nic;
        $empsave->gender = $request->gender;
        $empsave->contactNO = $request->contactno;
        $empsave->bdate = $request->bdate;


        $empsave->save();        

        //step 3 redirect to another page
        $empData = DB::table('Employees')->orderBy('id', 'asc')->paginate(6);
        return view('employee.index', compact('empData'));


    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $empData = Employee::find($id);
        $empData->delete();

        $empData = Employee::all();
        return redirect('employee/')->with('empData',$empData);


    }
}


