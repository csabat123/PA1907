
@extends ('layouts.master')

@section('title', 'Grivience&Update')

@section('content')





<div class="card" style="float:left;">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Campus </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
				<div class="custom-control custom-checkbox">
				  	<input type="checkbox" class="custom-control-input" id="Check1">
				  	<label class="custom-control-label" for="Check1">Parramatta South</label>
				</div> <!-- form-check.// -->

				<div class="custom-control custom-checkbox">
				  	<input type="checkbox" class="custom-control-input" id="Check2">
				 	<label class="custom-control-label" for="Check2">Kingswood</label>
				</div> <!-- form-check.// -->

				<div class="custom-control custom-checkbox">
				  	<input type="checkbox" class="custom-control-input" id="Check3">
				  	<label class="custom-control-label" for="Check3">Campbelltown</label>
				</div> <!-- form-check.// -->

				<div class="custom-control custom-checkbox">
				  	<input type="checkbox" class="custom-control-input" id="Check4">
				  	<label class="custom-control-label" for="Check4">Other Campuses</label>
				</div> <!-- form-check.// -->
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
	
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Event </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
				<div class="custom-control custom-checkbox">
				  	<input type="checkbox" class="custom-control-input" id="Check5">
				  	<label class="custom-control-label" for="Check5">Update</label>
				</div> <!-- form-check.// -->

				<div class="custom-control custom-checkbox">
				  	<input type="checkbox" class="custom-control-input" id="Check6">
				 	<label class="custom-control-label" for="Check6">Grievance</label>
				</div> 

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
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
	<a href="javascript:history.back()" class="btn btn-primary" role="button">Go Back</a>
	<div class="modal fade" id="eventmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Update / Grievance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>	  
      <div class="modal-body">
       <div class="container">
<form action="/action.page.php">

<fieldset class="form-group">
Type:
<select class="form-control"> 
  <option>Update</option>
  <option>Grievance</option>
</select>
<br>
<div class="form-group">
  <label for="comment">Subject:</label>
  <textarea class="form-control" rows="1" id="comment"></textarea>
</div>
<br>
<div class="row">

<legend class="col-form-label col-3">Student's Involved</legend>

<div class="col-9">
    <div class="checkbox">
      <label><input type="checkbox" value="">Chrsitopher Sabat</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Hussien Samman</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="" >Benan Ergen</label>
    </div>
	<div class="checkbox">
      <label><input type="checkbox" value="" >Han-Te Tsai</label>
    </div>
</div>
</div>
<br>
<div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
</fieldset>
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

</div>
</div>  
 
        </div>
        <!-- /#page-content-wrapper -->

    </div>

  @endsection
