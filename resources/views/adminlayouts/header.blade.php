<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
<link href="{{ asset('css2/style.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Professional Development</div>
            <div class="list-group list-group-flush">
                    <a href="adminstory" class="list-group-item list-group-item-action bg-light">Story Board</a>
                <a href="admingrievance" class="list-group-item list-group-item-action bg-light">Grievance&Update</a>
                <a href="adminteam" class="list-group-item list-group-item-action bg-light">Team Manage</a>


            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <center><img src="pic/uws.png" style="width: 15%;" alt="uwslogo"></center>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </nav>

            <div class="container-fluid">
                <br><br>




            </div>










            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>












                     <!-- Menu Toggle Script -->

                     <script>
                        $("#menu-toggle").click(function(e) {
                        e.preventDefault();
                        $("#wrapper").toggleClass("toggled");
                         }).click();
                    </script>





                    <script>
                        $(document).ready(function() {
                            $('[id^=detail-]').hide();
                            $('.toggle').click(function() {
                                $input = $(this);
                                $target = $('#' + $input.attr('data-toggle'));
                                $target.slideToggle();
                            });
                        });
                    </script>


                </body>
