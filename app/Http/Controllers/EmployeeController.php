<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empdata=Employee::all();
        return view ('employee.index') ->with('empdata',$empdata) ;
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
            'role' => 'required|max:15',
            'nic' => 'required|max:10|min:10',
            'gender' => 'required|max:1',
            'contactno' => 'required|max:10',
            'bdate' => 'required',

            
        ));

        //step 2 Store date 
        $empsave = new Employee;

        //left side = database column name ----- right side = request name
        $empsave->name = $request->name;
        $empsave->address = $request->address;
        $empsave->role = $request->role;
        $empsave->nic = $request->nic;
        $empsave->gender = $request->gender;
        $empsave->contactNO = $request->contactno;
        $empsave->bdate = $request->bdate;


        $empsave->save();        

        //step 3 redirect to another page

        return view('Employee.create');
        // return view ("ads.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp_data = Employee::find($id);
        return view ('employee.show')->with('emp_data', $emp_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $emp_data = Employee::find($id);
        $emp_data->delete();

        $empdata = Employee::all();
        return view('employee.index')->with('empdata',$empdata);


    }
}
