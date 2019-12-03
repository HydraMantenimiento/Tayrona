    <header class="main-header bg-orange">
    <!-- Logo -->
    <a href="{{route('cliente')}}" class="logo bg-orange">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini text-black "><b>T</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg bg-orange text-black"><b>Tayrona</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top bg-orange">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle bg-orange text-black" data-toggle="push-menu" role="button">
            <span class="sr-only text-black">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu ">
            <ul class="nav navbar-nav ">
                <li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset(Auth::user()->avatar)}}" class="user-image" alt="User Image">
                        <span class="hidden-xs text-black">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu ">
                        <!-- User image -->
                        <li class="user-header bg-orange">
                            <img src="{{asset(Auth::user()->avatar)}}" class="img-circle" alt="User Image">

                            <p class="text-black">
                                {{ Auth::user()->name }} - Web Developer
                                <small>{{ Auth::user()->created_at }}</small>
                            </p>
                        </li>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer " style="background: #2D3E50;">
                            <div class="pull-left">

                                <a href="{{ route('vistaperfil' ) }}" class="btn btn-default btn-flat"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></a>
                            </div>
                            <div class="pull-right" >

                                <a class="dropdown-item btn btn-default btn-flat"  href="{{ route('logout') }}"
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
