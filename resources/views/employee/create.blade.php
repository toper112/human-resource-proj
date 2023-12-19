@extends('pages.base')

@section('content')
    <h1>Create new Employee</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ url('employees/store') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="full_name">Fullname</label>
                    <input class="form-control" type="text" name="full_name">
                    @error('full_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="position">Position</label>
                    <input class="form-control" type="text" name="position">
                    @error('position')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="department">Department</label>
                    <input class="form-control" type="text" name="department">
                    @error('department')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                </div>
                <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">
                        Add Employee
                    </button>
                </div>
            </form>
        </div>
    </div>
    <style scoped>
        label{
            font-weight: bold;
            color: aqua;
            text-shadow: 3px 3px 3px black;
        }
    </style>
@endsection
