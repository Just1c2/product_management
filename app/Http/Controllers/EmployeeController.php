<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
        $employees = employee::latest()->paginate(5);
        return view('employees.index',compact('employees'))->with('i',
                (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'employee_name' => 'required',
            'employee_email' => 'required',
            'employee_address' => 'required',
            'employee_phone' => 'required',
            'employee_salary' => 'required',
        ]);

        employee::create($request->all());
        return redirect()->route('employees.index')->with('success',
                                                                'Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $request->validate([
            'employee_name' => 'required',
            'employee_email' => 'required',
            'employee_address' => 'required',
            'employee_phone' => 'required',
            'employee_salary' => 'required',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success',
                                                                'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success',
                        'Employee deleted successfully.');
    }
}
