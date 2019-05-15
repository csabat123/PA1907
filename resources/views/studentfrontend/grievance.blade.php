


@extends ('studentlayouts.master')

@section('title', 'Grievance')

@section('content')



    <h3>Grievances</h3>
    <br>
    <center><h4> Lodged Grievances </h4></center>
    <br>
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


</section>
@endsection
