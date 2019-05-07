<header>

<div class="d-flex" id="wrapper">


    {{-- {!! $navbar->asUl() !!} --}}

        <!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Professional Development</div>
        <div class="list-group list-group-flush">
            <a href="index.html" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="team.html" class="list-group-item list-group-item-action bg-light">Team Manager</a>
            <a href="update.html" class="list-group-item list-group-item-action bg-light">Group Update</a>
            <a href="event.html" class="list-group-item list-group-item-action bg-light">Updates</a>
            <a href="story.html" class="list-group-item list-group-item-action bg-light">Story Board</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->



        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button href="{{ route('navbtn') }}" class="btn btn-primary" id="menu-toggle" type="button">Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <center><img src="pic/uws.png" style="width: 15%;" alt="uwslogo"></center>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Admin</a>
                                <a class="dropdown-item" href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=644d5fde-8af0-40c6-a3a3-1ed84826f937&protectedtoken=true&domain_hint=student.westernsydney.edu.au&nonce=636890685184757533.eea7595b-87db-47b6-9b30-08ed718a0fff&state=DcvBDYAgDEBR0CGcAi2B0nIw7uAGICV6MjEY15fD-7evlVJjN3QaehQFFzhCYLTsCQmdm0USYcRsmEo2nnIwMTswwFLIcoJaq-7vtNxfWrb0tnOXcj1ytLU9r_w">Email</a>
                                <a class="dropdown-item" href="profile.html">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>










            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Group PA1907</center></h3>
                    </div>












                     <!-- Menu Toggle Script -->

    <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>


        <script>
            $('.expando-list__item').on('click', e => {
                const isOpen = $(e.currentTarget).hasClass('expando-list__item--open');

                $('.expando-list__item').removeClass('expando-list__item--open');

                if (isOpen) return;

                $(e.currentTarget).addClass('expando-list__item--open');
            });
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

