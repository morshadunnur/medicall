<!--header start-->
<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Medicall" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>


    <!--logo start-->
    <a href="/" class="logo">Medi <span class="lite">Call</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text">
                </form>
            </li>
        </ul>
        <!--  search form end -->
    </div>

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
            <!-- alert notification start-->
            <li id="alert_notificatoin_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                    <i class="icon-bell-l"></i>
                    <span class="badge bg-important">7</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <div class="notify-arrow notify-arrow-blue"></div>
                    <li>
                        <p class="blue">You have 4 new notifications</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-primary"><i class="icon_profile"></i></span>
                            Friend Request
                            <span class="small italic pull-right">5 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-warning"><i class="icon_pin"></i></span>
                            John location.
                            <span class="small italic pull-right">50 mins</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-danger"><i class="icon_book_alt"></i></span>
                            Project 3 Completed.
                            <span class="small italic pull-right">1 hr</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-success"><i class="icon_like"></i></span>
                            Mick appreciated your work.
                            <span class="small italic pull-right"> Today</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">See all notifications</a>
                    </li>
                </ul>
            </li>
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" width="35" height="35" src="{{ auth()->user()->photo }}">
                            </span>
                    <span class="username">{{ auth()->user()->name }}</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i> Manage Doctor</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon_mail_alt"></i> Manage Patient</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon_clock_alt"></i> Verification</a>
                    </li>
                    <li>
                        <form action="/logout" method="post" id="logout">{{ csrf_field() }}</form>
                        <a class="" onclick="document.getElementById('logout').submit()"><i class="icon_key_alt"></i>Logout</a>
                        {{--<a href=""><i class="icon_key_alt"></i> Log Out</a>--}}
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
<!--header end-->

