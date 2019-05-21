@extends ('studentlayouts.master')

@section('title', 'Home')

@section('content')

<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>

 <!-- Nav tabs -->


  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
	  <center><h3>Insurane Claim</h3></center>
	  <p>The directors of a company in financial distress appoint an
		administrator who subsequently puts the company into liquidation.
		The liquidator alleges the directors have allowed the company to
		trade while insolvent during the six months leading up to the
		administrator’s appointment. Defence costs and the directors’
         liability have the potential to reach a 7 figure sum.  </p>
		 <button class="btn btn-primary btn-lrg"><i class="fa fa-download"></i> Download PDF</button>
		 <br>
		 <br>
                 <center><h3>Group Members</h4></center>
                    <br>
		<div class="row">
			<br>
  <div class="col-md-3 col-sm-5">
    <div class="card">
      <img src="pic/1234.png" style="width:75%">
      <div class="container">
        <h4>Hussein Samman</h4>
        <p class="title">Student</p>
		<p><a href="mailto:18494626@student.westernsydney.edu.au">18494626@student.westernsydney.edu.au</a></p>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-5">
    <div class="card">
      <img src="pic/1234.png" style="width:75%">
      <div class="container">
        <h4>Christopher Sabat</h4>
        <p class="title">Student</p>
		<p><a href="mailto:18607420@student.westernsydney.edu.au">18607420@student.westernsydney.edu.au</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-5">
    <div class="card">
      <img src="pic/1234.png" style="width:75%">
      <div class="container">
        <h4>Han-Te Tsai</h4>
        <p class="title">Student</p>
        <p><a href="mailto:17344832@student.westernsydney.edu.au">17344832@student.westernsydney.edu.au</a></p>
      </div>
    </div>
  </div>
    <div class="col-md-3 col-sm-5">
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





  @endsection
