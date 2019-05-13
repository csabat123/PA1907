@extends ('studentlayouts.master')

@section('title', 'Update')

@section('content')
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>


        <center><h3>Updates</h3></center>
        <br>
        <div style="float: left">
	<select class="form-control form-control-medium">
	<option>20</option>
	<option>40</option>
	<option>60</option>
	<option>100</option>
	</select>
	</div>
    <div class="smallform-group mx-sm-1 mb-2" style="float:right;" >
    <label for="searchfilter" class="sr-only">search</label>
    <input type="Search" class="form-control" id="searchfilter" placeholder="Search">
  </div>
</div>
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


			</tbody>
        <tfoot>
        </tfoot>
    </table>
    <div style="float: center">

   <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
   </ul>
	</div>
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

        {{-- <script>
                $(document).ready(function() {
                $('#example').DataTable();
            } );
                </script>
                <script>
                $(document).ready(function() {
                $('#example2').DataTable();
            } );
                </script> --}}

@endsection
