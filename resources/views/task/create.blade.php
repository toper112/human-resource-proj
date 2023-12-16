@extends('pages.base')

@section('content')
    <h1>Create new Task</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('tasks/store')}}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="title">Task Title</label>
                    <input class="form-control" type="text" name="title">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="description">Task Description</label>
                    <textarea class="form-control" name="description"></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="employee_id">Select Employee</label>
                    <select class="form-select" name="employee_id" id="employee_id">
                        <option disabled selected>Select Employee</option>
                        @foreach ($employees as $employeeId => $employee)
                            <option value="{{ $employeeId }}">{{ $employee}}</option>
                        @endforeach
                    </select>
                    @error('employee_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="deadline">Deadline</label>
                    <input class="form-control" type="date" name="deadline">
                    @error('deadline')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="status">Status</label>
                    <select class="form-select" name="status" id="status">
                        <option value="Pending" selected>Pending</option>
                        <option value="Accomplished">Completed</option>
                    </select>
                    @error('status')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">
                        Add Task
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
