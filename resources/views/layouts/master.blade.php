<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('bootstrap/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/boostrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ asset('public/css/simple-sidebar.css')}}" rel="stylesheet">
    <link href="{{ asset('public/css/css2/style.css')}} " rel="stylesheet">





</header>




</head>



<body>

    @include('layouts.header')

    @include('layouts.sidebar')

    @yield('content')

    @include('layouts.footer')














</body>
</html>
