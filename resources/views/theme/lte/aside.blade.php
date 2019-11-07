<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('product.index') }}">
                    <i class="fa fa-book"></i> <span>Productos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('category.index') }}">
                    <i class="fa fa-book"></i> <span>Categorias</span>
                </a>
            </li>
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-users"></i> <span>Usuarios</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i> <span>Repoprtes</span>
                </a>
            </li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Blog</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
