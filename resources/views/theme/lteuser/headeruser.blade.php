    <header class="main-header bg-orange">
    <!-- Logo -->
    <a href="{{route('dashboard')}}" class="logo bg-orange">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini "><b>T</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg bg-orange"><b>Tayrona</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top bg-orange">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu ">
            <ul class="nav navbar-nav ">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu ">
                        <!-- User image -->
                        <li class="user-header bg-orange">
                            <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::user()->name }} - Web Developer
                                <small>{{ Auth::user()->created_at }}</small>
                            </p>
                        </li>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer header">
                            <div class="pull-right ">
                                <a class="dropdown-item btn btn-default btn-flat" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>