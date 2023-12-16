<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        $salaries = Salary::orderBy('id')->get();

        return view('salary.index', ['salaries' => $salaries]);
    }

    public function edit($id)
    {
        $employees = Employee::list(); 
        $salaries = Salary::findOrFail($id);
        return view('salary.edit', compact('employees', 'salaries'));
    }

    public function create() {
        $employees = Employee::list();
        return view('salary.create', ['employees' => $employees]);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'salary_amount' => 'required|numeric',
            'salary_date' => 'required|date',
        ]);

        Salary::create($request->all());

        return redirect('/salaries')->with('message', 'Salary created successfully!');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_id' => 'required',
            'salary_amount' => 'required|numeric',
            'salary_date' => 'required|date',
        ]);

        $salary = Salary::findOrFail($id);

        $salary->update([
            'employee_id' => $request->input('employee_id'),
            'salary_amount' => $request->input('salary_amount'),
            'salary_date' => $request->input('salary_date'),
        ]);

        return redirect('/salaries')->with('message', 'Salary updated successfully!');
    }


    public function delete($id)
    {
        $salary = Salary::findOrFail($id);
        $salary->delete();

        return redirect('/salaries')->with('message', 'Salary deleted successfully!');
    }

}
