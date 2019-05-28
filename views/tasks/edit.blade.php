@extends('layout.layout')

@section('content')
    <h1>Edit Task</h1>
    <hr>
     <form action="{{url('tasks', [$task->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" value="{{$task->title}}" class="form-control" id="taskTitle"  name="title" >
      </div>
      <div class="form-group">
        <label for="title">Type</label>
        <select class="form-control" id="taskType" value="{{$task->type}}" name="type">
        <option>Update</option>
        <option>Grievance</option>
        </select>
      </div>
      <label for="description">Students Involved</label>
      <div class="col-9">
        <div class="checkbox">
          <label><input type="checkbox" name="studentinvolved[]" value="Christopher Sabat">Chrsitopher Sabat</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="studentinvolved[]" value="Hussien Samman">Hussien Samman</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="studentinvolved[]" value="Benan Ergen">Benan Ergen</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="studentinvolved[]" value="Han-Te Tsai">Han-Te Tsai</label>
        </div>
      </div>
      <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" value="{{$task->description}}" class="form-control" id="taskDescription" name="description" style="width: 730px; height: 250px;">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection