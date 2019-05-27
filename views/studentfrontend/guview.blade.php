@extends ('studentlayouts.master')

@section('title', 'View')

@section('content')
            <div class="container-fluid">
                <br><br>


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
                

               
					<br>
<h5>Comments:</h5> <br>
<div class="col-sm-2">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" width="50" height="50">
</div> 
</div>

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>Rhys Tague</strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
Hi Jeremy,

Sorry to hear your have been experiencing this, can you provide further details on the matter for my review.

Regards,

Rhys Tague
</div>
</div>
</div>

<div class="col-sm-2 float-right">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" width="50" height="50">
</div> 
</div>

<div class="col-sm-5 float-right">
<div class="panel panel-default float-right">
<div class="panel-heading float-right">
<strong>Jeremy Lock</strong> <span class="text-muted">commented 3 days ago</span>
</div>
<div class="panel-body ">
Hi Rhys,

The following events occured, hfih;fhsfhsdfhsadfklhsadfhsadfkhsadfklsadsdaklhsafklhsadkfhsadkfhsad

Regards,

Jeremy 
</div>
</div>
</div>
<br>
<br>
<div class="container">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="comment"><h6>Comment:</h6></label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

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