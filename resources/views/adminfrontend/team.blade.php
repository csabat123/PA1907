
@extends ('adminlayouts.master')

@section('title', 'Team View')

@section('content')
<head>


    <link href="{{ asset('css/css2/team.css') }}" rel="stylesheet">

</head>


<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
            <h5 class="card-title">Card title</h5>
            @foreach($query as $var)

      <p class="card-text"> {{ $var-> firstName}} {{ $var-> lastName}}  </p>


      @endforeach
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>







        <button class="btn btn-primary" onclick="location.href='{{ url('teamedit') }}'" style="margin-left: 2%; width:8%; float:right;"> Edit </button>

</div>



@endsection
