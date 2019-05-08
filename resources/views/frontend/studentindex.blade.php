@extends ('layouts.master')

@section('title', 'Home')

@section('content')


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
	<a href="javascript:history.back()" class="btn btn-primary" role="button">Go Back</a>
	
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Updates</h3>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
		<tr>
                <th></th>
				<th colspan="4">
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#eventmodal">
				 Add
				</button>
				</th>
            </tr>
            <tr class="table-warning ">
                <th>Name</th>
                <th>Subject</th>
                <th>Students Involved</th>
				<th>Date</th>
                <th>Campus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href=event1.html>Australia Date Event</a></td>
                <td>System Architect</td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
				<td>2009/01/12</td>
                <td>63</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>66</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>22</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
				<td>2009/01/12</td>
                <td>33</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
				<td>2009/01/12</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>59</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
				<td>2009/01/12</td>
                <td>55</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>39</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>23</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>22</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
				<td>2009/01/12</td>
                <td>36</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>43</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>19</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
				<td>2009/01/12</td>
                <td>66</td>
            </tr>
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
<form action="/action.page.php">

<fieldset class="form-group">
Type:
<select class="form-control"> 
  <option>Event</option>
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
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Grievances</h3>
	  <br>
	  <h4> Lodged Grievances </h4>
      <p>      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
		<tr>
		<th></th>
		<th colspan="4">
		<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
		 Add
		</button>
		</th>

         </tr>
            <tr class="table-warning ">
                <th>Name</th>
                <th>Subject</th>
                <th>Students Involved</th>
				<th>Date</th>
                <th>Campus</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            <tr>
                <td><a href=event1.html>Australia Date Event</a></td>
                <td>System Architect</td>
                <td>Edinburgh</td>
				<td>2009/01/12</td>
                <td>61</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
				<td>2009/01/12</td>
                <td>63</td>
            </tr>
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
<form action="/action.page.php">

<fieldset class="form-group">
Type:
<select class="form-control"> 
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
	</p>
	<p> </p>
    </div>
  </div>
</div>
</div>




  @endsection
