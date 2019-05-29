@extends ('adminlayouts.master')

@section('title', 'Group View')

@section('content')
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/jquerybootstrap4.js')}}"></script>
<script src="{{ asset('js/jquerydatatables.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
			    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



                <div class="container-fluid">
                <br><br>
				<div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Group PA1907</center></h3>
                    </div>
					         </div>
</div>
					
					
					
<!-- Chris -->
<br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Project Brief</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Updates</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Grievance</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
	  <h3>Insurane Claim</h3>
	  <p>The directors of a company in financial distress appoint an
		administrator who subsequently puts the company into liquidation.
		The liquidator alleges the directors have allowed the company to
		trade while insolvent during the six months leading up to the
		administrator’s appointment. Defence costs and the directors’
         liability have the potential to reach a 7 figure sum.  </p>
		 <button class="btn btn-primary btn-lrg"><i class="fa fa-download"></i> Download PDF</button>
		 <br>
		 <br>
		 		<h3>Group Members</h4>
		<div class="row">
			<br>
  <div class="col-md-3">
    <div class="card">
      <img src="pic/1234.png" style="width:75%">
      <div class="container">
        <h4>Hussein Samman</h4>
        <p class="title">Student</p>
		<p><a href="mailto:18494626@student.westernsydney.edu.au">18494626@student.westernsydney.edu.au</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card">
      <img src="pic/1234.png" style="width:75%">
      <div class="container">
        <h4>Christopher Sabat</h4>
        <p class="title">Student</p>
		<p><a href="mailto:18607420@student.westernsydney.edu.au">18607420@student.westernsydney.edu.au</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <img src="pic/1234.png" style="width:75%">
      <div class="container">
        <h4>Han-Te Tsai</h4>
        <p class="title">Student</p>
        <p><a href="mailto:17344832@student.westernsydney.edu.au">17344832@student.westernsydney.edu.au</a></p>  
      </div>
    </div>
  </div>
    <div class="col-md-3">
    <div class="card">
      <img src="pic/1234.png" style="width:75%">
      <div class="container">
        <h4>Benan Ergen</h4>
        <p class="title">Student</p>
		<p><a href="mailto:18044889@student.westernsydney.edu.au">18044889@student.westernsydney.edu.au</a></p>
  
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
	
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Updates</h3>
     <table id="example2" class="table table-striped table-bordered" style="width:100%">
        <thead>
		<tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
				<th colspan="4">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#eventmodal">
				 Add
				</button>
				</th>
            </tr>
            <tr class="table-warning ">
              <th scope="col">#</th>
              <th scope="col">Task Title</th>
              <th scope="col">Task Type</th>
              <th scope="col">Students Involved</th>
              <th scope="col">Created At</th>
              <th scope="col">Campus</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        @if ($task->type == 'Update')
            <tr>
              <th scope="row">{{$task->id}}</th>
              <td><a href="/tasks/{{$task->id}}">{{$task->title}}</a></td>
              <td>{{$task->type}}</td>
              <td>{{$task->studentinvolved}}</td>
              <td>{{$task->created_at->toFormattedDateString()}}</td>
              <td>{{$task->campus}}</td>
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('tasks/' . $task->id . '/edit') }}">
                  	<button type="button" class="btn btn-warning">Edit</button>
                  </a>&nbsp;
                  <form action="{{url('tasks', [$task->id])}}" method="POST">
    					<input type="hidden" name="_method" value="DELETE">
   						<input type="hidden" name="_token" value="{{ csrf_token() }}">
   						<input type="submit" class="btn btn-danger" value="Delete"/>
   				  </form>
              </div>
			</td>
            </tr>
            @endif
            @endforeach
      
			</tbody>
        <tfoot>
        </tfoot>
    </table>
	<div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
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
      </div>
      <br>
      <div class="form-group">
        <label for="description">Task Description</label>
        <textarea type="text" class="form-control" id="taskDescription" name="description" rows="5"></textarea>
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
      

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </div>
	</div>
	</div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Grievances</h3>
	  <br>
	  <h4> Lodged Grievances </h4>
      <p>      
      <table id="example2" class="table table-striped table-bordered" style="width:100%">
        <thead>
		<tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
				<th colspan="4">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#eventmodal">
				 Add
				</button>
				</th>
            </tr>
            <tr class="table-warning ">
              <th scope="col">#</th>
              <th scope="col">Task Title</th>
              <th scope="col">Task Type</th>
              <th scope="col">Students Involved</th>
              <th scope="col">Created At</th>
              <th scope="col">Campus</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        @if ($task->type == 'Grievance')
            <tr>
              <th scope="row">{{$task->id}}</th>
              <td><a href="/tasks/{{$task->id}}">{{$task->title}}</a></td>
              <td>{{$task->type}}</td>
              <td>{{$task->studentinvolved}}</td>
              <td>{{$task->created_at->toFormattedDateString()}}</td>
              <td>{{$task->campus}}</td>
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('tasks/' . $task->id . '/edit') }}">
                  	<button type="button" class="btn btn-warning">Edit</button>
                  </a>&nbsp;
                  <form action="{{url('tasks', [$task->id])}}" method="POST">
    					<input type="hidden" name="_method" value="DELETE">
   						<input type="hidden" name="_token" value="{{ csrf_token() }}">
   						<input type="submit" class="btn btn-danger" value="Delete"/>
   				  </form>
              </div>
			</td>
            </tr>
            @endif
            @endforeach
      
			</tbody>
        <tfoot>
        </tfoot>
    </table>

















	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Grievance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
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
      </div>
      <br>
      <div class="form-group">
        <label for="description">Task Description</label>
        <textarea type="text" class="form-control" id="taskDescription" name="description" rows="5"></textarea>
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
      

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
	</p>
	<p> </p>
    </div>
  </div>
</div>
</div>
        <a href="javascript:history.back()" class="btn btn-primary" role="button">Go Back</a>

      <script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>
	<script>
	$(document).ready(function() {
    $('#example2').DataTable();
} );
	</script>
      <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });

            </script>

@endsection
