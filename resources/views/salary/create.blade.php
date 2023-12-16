@extends('pages.base')

@section('content')
    <h1>Create new Salary</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ url('salaries/store') }}" method="POST">
                @csrf

                <div class="form-group mt-2">
                    <label for="employee_id">Select Employee</label>
                    <select class="form-select" name="employee_id" id="employee_id">
                        <option disabled {{ old('employee_id') ? '' : 'selected' }}>Select Employee</option>
                        @foreach ($employees as $employeeId => $employee)
                            <option value="{{ $employeeId }}" {{ old('employee_id') == $employeeId ? 'selected' : '' }}>
                                {{ $employee }}
                            </option>
                        @endforeach
                    </select>
                    @error('employee_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="salary_amount">Salary Amount</label>
                    <input type="text" name="salary_amount" class="form-control" value="{{ old('salary_amount') }}">
                    @error('salary_amount')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="salary_date">Salary Date</label>
                    <input type="date" name="salary_date" class="form-control" value="{{ old('salary_date') }}">
                    @error('salary_date')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">
                        Add Salary
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
