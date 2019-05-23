@extends('layout.layout')

@section('content')
            <h1>Showing Task {{ $task->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $task->title }}<br>
            <strong>Type:</strong> {{ $task->type }}<br>
            <strong>Students Involved:</strong> {{ $task->studentinvolved }}<br>
            <strong>Description:</strong> {{ $task->description }}<br>
            <strong>Campus:</strong> {{ $task->campus }}
        </p>
    </div>
@endsection