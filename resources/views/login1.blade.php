
@extends('layouts.app')
<head>

<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>





<body>







    <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">

            <img src="pic\123.jpg">
            <html>

            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                    }






                    /* Center the image and position the close button */
                    .imgcontainer {
                        text-align: center;
                        margin: 24px 0 12px 0;
                        position: relative;
                    }

                    img.avatar {
                        width: 40%;
                        border-radius: 50%;
                    }

                    .container {
                        padding: 16px;
                    }

                    span.psw {
                        float: right;
                        padding-top: 16px;
                    }

                    /* The Modal (background) */
                    .modal {
                        display: none;
                        /* Hidden by default */
                        position: fixed;
                        /* Stay in place */
                        z-index: 1;
                        /* Sit on top */
                        left: 0;
                        top: 0;
                        width: 100%;
                        /* Full width */
                        height: 100%;
                        /* Full height */
                        overflow: auto;
                        /* Enable scroll if needed */
                        background-color: rgb(0, 0, 0);
                        /* Fallback color */
                        background-color: rgba(0, 0, 0, 0.4);
                        /* Black w/ opacity */
                        padding-top: 60px;
                    }






                    /* Zoom Animation */
                    .animate {
                        -webkit-animation: animatezoom 0.6s;
                        animation: animatezoom 0.6s
                    }

                    @-webkit-keyframes animatezoom {
                        from {
                            -webkit-transform: scale(0)
                        }

                        to {
                            -webkit-transform: scale(1)
                        }
                    }

                    @keyframes animatezoom {
                        from {
                            transform: scale(0)
                        }

                        to {
                            transform: scale(1)
                        }
                    }

                </style>

            </head>


            @section('content')

            <body style="background-color:#0000000">
                <title>Login Page</title>
                <h2>Professional Development</h2>


                <div id="id01" class="modal">

                    <form class="modal-content animate" action="/action_page.php">
                        <div class="imgcontainer">
                            <img src="pic/123.jpg" class="avatar">
                        </div>
                    </form>

                </div>





            </body>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



            <script>
                document
                    .getElementById("formwrap")
                    .addEventListener("submit", function(e) {
                        e.preventDefault();
                        window.location.href = "formwrap";
                    });

            </script>



</body>


