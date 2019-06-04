@extends('layout.layout')

@section('content')
    <h1>Add New Task</h1>
    <hr>
     <form action="/tasks" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" class="form-control" id="taskTitle"  name="title">
      </div>
      <div class="form-group">
        <label for="title">Type</label>
        <select class="form-control" id="taskType"  name="type">
        <option>Update</option>
        <option>Grievance</option>
        </select>
      </div>
      <label for="title">Students Involved: </label><br>
      <div class="row">
      <div class="col-9">
        <div class="checkbox">
          <label><input type="checkbox" id="taskstudentinvolved"  name="studentinvolved[]" value="Chrsitopher Sabat">Chrsitopher Sabat</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" id="taskstudentinvolved"  name="studentinvolved[]" value="Hussien Samman">Hussien Samman</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" id="taskstudentinvolved"  name="studentinvolved[]" value="Benan Ergen">Benan Ergen</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" id="taskstudentinvolved"  name="studentinvolved[]" value=">Han-Te Tsai">Han-Te Tsai</label>
        </div>
      </div>
      </div>
      <br>
      <div class="form-group">
        <label for="description">Task Description</label>
        <input type="text" class="form-control" id="taskDescription" name="description">
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