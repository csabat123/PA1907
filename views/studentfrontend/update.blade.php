@extends ('studentlayouts.master')

@section('title', 'Update')

@section('content')
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/jquerybootstrap4.js')}}"></script>
<script src="{{ asset('js/jquerydatatables.js')}}"></script>



        <center><h3>Updates</h3></center>
        <br>
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
          <label><input type="checkbox" name="studentinvolved[]" value="Chrsitopher Sabat">Chrsitopher Sabat</label>
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
        </div>





        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
		<tr>
                <th></th>
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
				<th>Type</th>
				<th>Group</th>
                <th>Name</th>
				<th>Subject</th>
                <th>Status</th>
                <th>Students Involved</th>
				<th>Date</th>
                <th>Campus</th>
				<th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
				<td>Update</td>
				<td>Group PA1909</td>
                <td>Michael Rodgers</td>
                <td><a href=event1.html>System Architect</td>
				<td></td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>61</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1907</td>
                <td>Garrett Winters</td>
                <td>Accountant</td>
				<td></td>
                <td>Tokyo</td>
				<td>2009/01/12</td>
                <td>63</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1903</td>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
				<td></td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>66</td>
			<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1906</td>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
				<td></td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>22</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Grievance</td>
			<td>Group PA1904</td>
                <td>Airi Satou</td>
                <td>Accountant</td>
				<td>In Progress</td>
                <td>Tokyo</td>
				<td>2009/01/12</td>
                <td>33</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1901</td>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
				<td></td>
                <td>New York</td>
				<td>2009/01/12</td>
                <td>61</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1902</td>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
				<td></td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>59</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Grievance</td>
			<td>Group PA1903</td>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
				<td>New</td>
                <td>Tokyo</td>
				<td>2009/01/12</td>
                <td>55</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1908</td>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
				<td></td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>39</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1909</td>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
				<td></td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>23</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1907</td>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
				<td></td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>30</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1907</td>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
				<td></td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>22</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Update</td>
			<td>Group PA1907</td>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
				<td></td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>36</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Grievance</td>
			<td>Group PA1907</td>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
				<td>Resolved - Closed</td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>43</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Grievance</td>
			<td>Group PA1907</td>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
				<td></td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>19</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
            <tr>
			<td>Grievance</td>
			<td>Group PA1907</td>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
				<td>New</td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>66</td>
				<td><a href="event1.html" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon-option-vertical"></span> View
        </a>
		</td>
            </tr>
			</tbody>
        <tfoot>
        </tfoot>
    </table>
      
      

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

@endsection
