<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::orderBy('id')->get();

        return view('task.index', ['task' => $task]);
    }

    public function create() {

        $employee = Employee::list();

        return view('task.create', ['employees' => $employee]);
    }

    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'employee_id' => 'required|exists:employees,id',
        'deadline' => 'required|date',
        'status' => 'required',
    ]);

    Task::create($validatedData);

    return redirect('/tasks')->with('message', 'Task created successfully');
}

    public function edit(Task $task)
    {
        $task->load('employee');
        $employees = Employee::list();

        return view('task.edit', compact('task', 'employees'));
    }
    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'employee_id' => 'required|exists:employees,id',
            'deadline' => 'required|date',
            'status' => 'required',
        ]);

        $task->update($validatedData);

        return redirect('/tasks')->with('message', 'Task updated successfully');
    }

        public function delete(Task $task)
        {
            $task->delete();
        
            return redirect('/tasks')->with('message', 'Task deleted successfully');
        }

}
