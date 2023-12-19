@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteTaskModal" tabindex="-1" aria-labelledby="deleteTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteTaskModalLabel">Delete Task - {{ $task->title }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('tasks/delete/' . $task->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            Are you sure you want to delete this task?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <h1>Edit Task</h1>
  <div class="row">
    <div class="col-md-5">
      <form action="{{ url('tasks/' . $task->id) }}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="employee_id">Select Employee</label>
            <select class="form-select" name="employee_id" id="employee_id">
                @foreach ($employees as $employeeId => $employee)
                    <option value="{{ $employeeId }}" {{ $task->employee->id == $employeeId ? 'selected' : '' }}>
                        {{ $employee }}
                    </option>
                @endforeach
            </select>
            @error('employee_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mt-2">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" value="{{ $task->title }}">
          @error('title')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-group mt-2">
          <label for="description">Description</label>
          <textarea name="description" class="form-control">{{ $task->description }}</textarea>
          @error('description')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-group mt-2">
          <label for="deadline">Deadline</label>
          <input type="date" name="deadline" class="form-control" value="{{ $task->deadline }}">
          @error('deadline')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-group mt-2">
          <label for="status">Status</label>
          <select class="form-select" name="status" id="status">
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Accomplished" {{ $task->status == 'Accomplished' ? 'selected' : '' }}>Accomplished</option>
          </select>
          @error('status')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
          <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteTaskModal">Delete Task</button>
          <button class="btn btn-primary me-md-2 mt-2" type="submit">Update</button>
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
