<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i>
                    <span>PERRO</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('visistacategoriauser', $category = 'perros') }}"><i class="fa fa-circle-o"></i>TODOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/alimentos') }}"><i class="fa fa-circle-o"></i>ALIMENTOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/accesorios') }}"><i class="fa fa-circle-o"></i>ACCESORIOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/aseo') }}"><i class="fa fa-circle-o"></i>PRODUCTOS PARA ASEO</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/juguetes') }}"><i class="fa fa-circle-o"></i>JUGUETES</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/drogueria') }}"><i class="fa fa-circle-o"></i>DROGUERÍA</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-circle-o text-aqua"></i>
                    <span>GATOS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('visistacategoriauser', $category = 'gatos') }}"><i class="fa fa-circle-o"></i>TODOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/alimentos') }}"><i class="fa fa-circle-o"></i>ALIMENTOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/accesorios') }}"><i class="fa fa-circle-o"></i>ACCESORIOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/aseo') }}"><i class="fa fa-circle-o"></i>PRODUCTOS PARA ASEO</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/juguetes') }}"><i class="fa fa-circle-o"></i>JUGUETES</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/drogueria') }}"><i class="fa fa-circle-o"></i>DROGUERÍA</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle-o text-aqua"></i>
                    <span>OTRAS MASCOTAS</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('visistacategoriauser', $category = 'otras mascotas') }}"><i class="fa fa-circle-o"></i>TODOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/alimentos') }}"><i class="fa fa-circle-o"></i>ALIMENTOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/accesorios') }}"><i class="fa fa-circle-o"></i>ACCESORIOS</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/aseo') }}"><i class="fa fa-circle-o"></i>PRODUCTOS PARA ASEO</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/juguetes') }}"><i class="fa fa-circle-o"></i>JUGUETES</a></li>
                    <li><a href="{{ url('visistacategoriauser/'.$category.'/drogueria') }}"><i class="fa fa-circle-o"></i>DROGUERÍA</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('grominguser') }}">

                    <i class="fa fa-circle-o text-aqua"></i> <span>Gromming</span>
                </a>
            </li>
            <li>
                <a href="{{ route('veterinariauser') }}">
                    <i class="fa fa-circle-o text-aqua"></i> <span>Veterinaria</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bloguser') }}">
                    <i class="fa fa-circle-o text-aqua"></i> <span>Blog</span>
                </a>
            </li>
            <li>
                <a href="{{ route('lista') }}">
                    <i class="fa fa-circle-o text-aqua"></i> <span>Lista de deseos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('product.shoppingCart') }}">
                    <i class="fa fa-shopping-basket text-aqua"></i> <span>Carro de compras</span>
                    <span class="label label-warning text-black">
                            @if( session('cartproduct'))
                            {{ session('cartproduct')->totalQty }}
                        @endif
                    </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
