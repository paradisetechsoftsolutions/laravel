<header class="top-menu-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="resources/img/icons/logo-mini.png" class="img-circle" alt="Logo Mini"/></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Taxi</b>Admin</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a class="sidebar-toggle fa-icon" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-top-menu">
            <ul class="nav navbar-nav">
                <!-- Navbar Search -->
                
                <!-- /. Navbar Search -->
                <!--Fullscreen-->
                <li>  		
                    <a id="fullscreen-page" role="button"><i class="fa fa-arrows-alt"></i></a>
                </li>
                
                <!-- /.messages-menu -->
                <!-- Notifications Menu -->
                
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->fname }} {{ Auth::user()->lname }}<i class="fa fa-angle-down pull-right"></i></span>
                        <!-- The user image in the navbar-->
                        <img src="resources/img/icons/icon-user.png" class="user-image" alt="User Image">
                    </a>
                    <ul class="dropdown-menu user-menu animated flipInY">
                        <li><a href="{{ route('profile.index') }}"><i class="ti-user"></i> Profile</a></li>
                        <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off"></i>  {{ __('Logout') }}
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>                                
                    </ul>
                </li>
            </ul>
            
        </div>
    </nav>
</header>