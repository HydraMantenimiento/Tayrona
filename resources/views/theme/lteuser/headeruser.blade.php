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
                    <a href="{{ route('product.shoppingCart') }}">
                        <i class="fa fa-shopping-basket "></i>
                        <span class="label label-warning text-black">
                            @if( session('cartproduct'))
                                {{ session('cartproduct')->totalQty }}
                            @endif
                        </span>
                    </a>
                   <!-- <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>

                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>-->
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
                        <span class="hidden-xs text-black">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu ">
                        <!-- User image -->
                        <li class="user-header bg-orange">
                            <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

                            <p class="text-black">
                                {{ Auth::user()->name }} - Web Developer
                                <small>{{ Auth::user()->created_at }}</small>
                            </p>
                        </li>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer " style="background: #2D3E50;">
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
