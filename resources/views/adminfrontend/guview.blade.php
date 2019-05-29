@extends ('studentlayouts.master')

@section('title', 'View')

@section('content')
            <div class="container-fluid">
                <br>


                <div class="container">
                    <div>
                        <h2 style="margin-left: 100px">
                            <center>{{ $task->type }}</center>
                        </h2>
						<br>

                    </div>


                </div>
		<dl class="row jumbotron jumbotron-fluid">
  <dt class="col-sm-3">Student Name:</dt>
  <dd class="col-sm-9">Michael Palmers</dd>

  <dt class="col-sm-3">Subject:</dt>
  <dd class="col-sm-9">
    <p><b>{{ $task->title }}</b></p>
  </dd>
  <dt class="col-sm-3">Type:</dt>
  <dd class="col-sm-9">
    <p><b>{{ $task->type }}</b></p>
  </dd>
  
   <dt class="col-sm-3">Status:</dt>
  <dd class="col-sm-9"><select class="">
									  <option>New</option>
									  <option>In Progress</option>
									  <option>Supervisor Responded</option>
									  <option>Student Responded</option>
									  <option>Resolved - Closed </option>
									  <option>Re-opened </option>
									</select></dd>

  <dt class="col-sm-3">Student Involved:</dt>
  <dd class="col-sm-9"> {{ $task->studentinvolved }}</dd>

  <dt class="col-sm-3 text-truncate">Date lodged:</dt>
  <dd class="col-sm-9">{{$task->created_at->toFormattedDateString()}}</dd>

  <dt class="col-sm-3">Campus</dt>
  <dd class="col-sm-9">{{ $task->campus }}</dt>

    <dt class="col-sm-3">Description:</dt>
  <dd class="col-sm-9">{{ $task->description }}</dd>
</dl>
        @if ($task->type == 'Grievance')
          <h4>Comments</h4>
                    @include('partials._comment_replies', ['comments' => $task->comments, 'task_id' => $task->id])
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="task_id" value="{{ $task->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
                    </form>
        @endif
</div>
<br>
<a href="javascript:history.back()" class="btn btn-primary" role="button">Go Back</a>








                
                <!-- /#page-content-wrapper -->

            </div>
            <!-- /#wrapper -->



            <!-- Menu Toggle Script -->
            <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });

            </script>



</body>

  @endsection