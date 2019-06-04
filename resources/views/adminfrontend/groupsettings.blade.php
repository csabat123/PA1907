@extends ('adminlayouts.master')

@section('title', 'Group Settings')

@section('content')
 <body>
 <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Group PA1907</center></h3>
                    </div>
					
					
					
					
<!-- Chris & Huss -->
<h4 class="panel-title">Case Study:</h4>
					 <ul class="list-group" >
                        <li class="list-group-item list-group-item-action" >
						<button type="button" style="float: right;" class="btn btn-outline-danger btn-sm">Remove</button>
                            <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                                <div class="col-xs-10">
                                    Insurance_Compliance_Casestudy.pdf
                                </div>
                            </div>
                        </li>
						<li class="list-group-item list-group-item-action" >
						<div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile04">
    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
  </div>
  <div class="input-group-append">
   <button type="file" class="btn btn-success btn-sm" style="float: right;"  id="myFile">Upload</button>
  </div>
</div>
</li>
						</ul>
 <p id="demo"></p>
 <h4 class="panel-title">Group Members:</h4>

                    <ul class="list-group" >
                        <li class="list-group-item list-group-item-action" >
						<button type="button" style="float: right;" class="btn btn-outline-danger btn-sm">Remove</button>
                            <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                                <div class="col-xs-10">
                                    Han-Te Tsai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 17344832
                                </div>
                            </div>
                            
                        </li>
                        <li class="list-group-item list-group-item-action">
						<button type="button" style="float: right;" class="btn btn-outline-danger btn-sm">Remove</button>
                            <div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2">
                                <div class="col-xs-10">
                                    Christopher Sabat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 17256185
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
						<button type="button" style="float: right;" class="btn btn-outline-danger btn-sm">Remove</button>
                            <div class="row toggle" id="dropdown-detail-3" data-toggle="detail-3">
                                <div class="col-xs-10">
                                    Hussein Samman &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 17213452
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
						<button type="button" style="float: right;" class="btn btn-outline-danger btn-sm">Remove</button>
                            <div class="row toggle" id="dropdown-detail-3" data-toggle="detail-4">
                                <div class="col-xs-10">
                                    Benan Ergen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 17213332
                                </div>
                            </div>
                        </li>
						</ul>
						<br>
						<button type="button" class="btn btn-success float-right" >Add</button>
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