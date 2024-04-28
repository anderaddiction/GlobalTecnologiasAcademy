<?php

namespace App\Http\Controllers;

use view;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $employees = Employee::get();
            return datatables()->of($employees)
                ->make(true);
        }

        return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employee = new Employee;
        $id = Employee::select('id')->latest()->first();
        return view('employees.create', [
            'employee'  => $employee,
            'id'        => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated() + ['status' => 1]);
        return redirect()->back()->with('success', __('Data stored successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Request $request)
    {
        $employee = Employee::find($id);
        if ($request->ajax()) {
            return response()->json($id, 200);
        }

        return view('employees.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        //dd($request->all());
        $employee->update($request->validated());
        return redirect()->back()->with('success', __('Data updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json('Data deleted successfully', 200);
    }
}
