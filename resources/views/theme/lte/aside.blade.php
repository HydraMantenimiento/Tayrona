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
            <li class="treeview">
                <a href="#" ><i class="fa fa-commenting"></i> <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('blogCategory.index') }}"><i class="fa fa-circle-o"></i> Categoria Blog</a></li>
                    <li><a href="{{ route('blog.index') }}"><i class="fa fa-circle-o"></i>Blogs</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('carrousel.index') }}">
                    <i class="fa fa-users"></i> <span>Carrousel</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
