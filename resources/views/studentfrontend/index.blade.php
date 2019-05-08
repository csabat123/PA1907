
@extends ('studentlayouts.master')

@section('title', 'Home')

@section('content')

<head>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</head>



<section class="page-section clearfix">
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">PA1907</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Case Study: Insurance Compliance</li>
      <li class="list-group-item">Comments: 12 </li>
       <li class="list-group-item">Grievances: 2</li>
    </ul>
          <a href="StudentView.html" class="btn btn-primary btn-lg">
            <span class="glyphicon glyphicon-option-vertical"></span> View
          </a>

  </div>
</section>

  @endsection
