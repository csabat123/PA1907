
@extends ('adminlayouts.master')

@section('title', 'Home')

@section('content')



<div class="container-fluid">
        <br><br>
<div role="flatdoc-content" class="content">

    <h3 style="position: relative">Latest Updates</h3>

    <table id="example" class="table table-striped table-bordered" style="width:75%">
<thead class="table-warning">
    <tr>
        <th>Name</th>
        <th>Status</th>
        <th>Subject</th>
        <th>Students Involved</th>
        <th>Date</th>
        <th>Campus</th>
        <th></th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>George Martins</td>
        <td>New</td>
        <td><a href=event1.html>Australia Date</a></td>
        <td>Edinburgh</td>
        <td>2009/01/12</td>
        <td>Parramatta South</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
    <tr>
        <td>Garrett Winters</td>
        <td>New</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>2009/01/12</td>
        <td>Kingswood</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
    </tbody>
<tfoot>

</tfoot>
</table>

<h3 style="position: relative; margin-top: 5%">Latest Grievances</h3>
     <table id="example" class="table table-striped table-bordered" style="width:75%">
<thead class="table-warning">
    <tr>
        <th>Name</th>
        <th>Status</th>
        <th>Subject</th>
        <th>Students Involved</th>
        <th>Date</th>
        <th>Campus</th>
        <th></th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>Michelle Howard</td>
        <td>New</td>
        <td><a href=event1.html>Work Distribution and Contribution</a></td>
        <td>Edinburgh</td>
        <td>2009/01/12</td>
        <td>Parramatta South</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
    <tr>
        <td>Garrett Winters</td>
        <td>New</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>2009/01/12</td>
        <td>Campbelltown</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
    </tbody>
<tfoot>

</tfoot>
</table>
</div>



<h3 style="position: relative; margin-top: 5%">Require Attention:</h3>
     <table id="example" class="table table-striped table-bordered" style="width:75%">
<thead class="table-warning">
    <tr>
        <th>Type</th>
        <th>Name</th>
        <th>Status</th>
        <th>Subject</th>
        <th>Students Involved</th>
        <th>Date</th>
        <th>Campus</th>
        <th></th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>Grievance</td>
        <td>Michelle Howard</td>
        <td>Student Responded</td>
        <td><a href=event1.html>Work Distribution and Contribution</a></td>
        <td>Edinburgh</td>
        <td>2009/01/12</td>
        <td>Parramatta South</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
     <tr>
        <td>Update</td>
        <td>George Martins</td>
        <td>New</td>
        <td><a href=event1.html>Australia Date</a></td>
        <td>Edinburgh</td>
        <td>2009/01/12</td>
        <td>Parramatta South</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
    <tr>
        <td>Grievance</td>
        <td>Garrett Winters</td>
        <td>New</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>2009/01/12</td>
        <td>Campbelltown</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
       <tr>
        <td>Update</td>
        <td>Garrett Winters</td>
        <td>New</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>2009/01/12</td>
        <td>Kingswood</td>
        <td><a href="event1.html" class="btn btn-primary btn-xs">
  <span class="glyphicon glyphicon-option-vertical"></span> View
</a>
    </tr>
    </tbody>
<tfoot>

</tfoot>
</table>
</div>
</section>







</div>
@endsection
