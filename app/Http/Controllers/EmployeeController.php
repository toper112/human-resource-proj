<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::orderBy('id')->get();

        return view('employee.index', ['employees' => $employees]);
    }

    public function create() {

        return view('employee.create');
    }
    public function store(Request $request) {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'department' => 'required',
        ]);

        Employee::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'position' => $request->position,
            'department' => $request->department,

        ]);

        return redirect('/employees')->with('message', 'A new Employee has been added to a Database');

    }

    public function edit(Employee $employee) {

        return view('employee.edit',compact('employee'));
    }

    public function update(Employee $employee, Request $request) {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'department' => 'required',
        ]);

        $employee->update($request->all());
        return redirect('/employees')->with('message', " $employee->full_name has been updated successfully");
    }

    public function delete(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees')->with('message', " $employee->full_name has been deleted successfully");
    }
}
