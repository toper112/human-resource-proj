@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteSalaryModal" tabindex="-1" aria-labelledby="deleteSalaryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteSalaryModalLabel">Delete Salary - {{ $salaries->salary_amount }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('salaries/delete/' . $salaries->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            Are you sure you want to delete this salary information?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <h1>Edit Salary</h1>
  <div class="row">
    <div class="col-md-5">
      <form action="{{ url('salaries/' .$salaries->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Use PUT method for updates --}}
        <div class="form-group mt-2">
          <label for="employee_id">Select Employee</label>
          <select class="form-select" name="employee_id" id="employee_id">
              @foreach ($employees as $employeeId => $employee)
                  <option value="{{ $employeeId }}" {{ $salaries->employee_id == $employeeId ? 'selected' : '' }}>
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
            <input type="text" name="salary_amount" class="form-control" value="{{$salaries->salary_amount}}">
            @error('salary_amount')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group mt-2">
          <label for="salary_date">Salary Date</label>
          <input type="date" name="salary_date" class="form-control" value="{{ $salaries->salary_date }}">
          @error('salary_date')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
          <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteSalaryModal">Delete Salary</button>
          <button class="btn btn-primary me-md-2 mt-2" type="submit">Update</button>
        </div>
      </form>
    </div>
  </div>
@endsection
