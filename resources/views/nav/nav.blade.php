<div class="container-fluid bg-orange z-depth-1 ">
    <div class="row">
        <div class="col-2 p-2">
            <a href="{{ route('inicio') }}" class="logo"><img src="{{ asset('iconos/logo-tayrona.png') }}" alt="" width="100%" height="90px"></a>
        </div>
        <div class="col-10">
            <nav class="navbar navbar-expand-lg navbar-dark bg-orange mx-0 px-0">
                <a href="" class="navbar-brand pl-0 ml-0 navbar-expand-lg">Donde las mascotas van </a>
                <div class="container-search ">
                    <i class="fas fa-search text-white"></i>
                    <input type="text" class="barra-busqueda" placeholder="Buscar">
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-0 pr-0">
                        <!-- esto es para que se muestre solo cuando no se a iniciado session -->
                        <a href="{{ route('register') }}" class="btn text-white">Registrate <i class="fas fa-dog"></i></a>
                        <a href="{{ route('login') }}" class="btn text-white">Login <i class="fas fa-cat"></i></a>
                    </div>
                </div>
            </nav>
            <hr class="bg-white p-0 m-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-orange pl-0 ml-0">
                <div class="collapse navbar-collapse  pl-0 ml-0" id="navbarNavAltMarkup">
                    <div class="navbar-nav  pl-0 ml-0">

                        <a class="nav-link  active" href="{{ route('vistascategorias',$name = 'perros') }}" id="navbarDropdown" role="button" >PERROS  <i class="fas fa-bone"></i></a>
                        <a class="nav-link  active" href="{{ route('vistascategorias',$name = 'gatos') }}" id="navbarDropdown" role="button" >GATOS <i class="fas fa-paw"></i></a>
                        <a class="nav-link  active" href="{{ route('vistascategorias', $name = 'otras mascotas') }}" id="navbarDropdown" role="button" >OTRAS MASCOTAS <i class="fas fa-dove"></i></a>
                        <a href="{{ route('groming') }}" class="nav-item nav-link active">Groming <i class="fas fa-cut"></i></a>
                        <a href="#" class="nav-item nav-link active">Veterinaria <i class="fas fa-cut"></i></a>
                        <a href="{{ route('blog') }}" class="nav-item nav-link active">Blog <i class="fab fa-blogger"></i></a>
                        <a href="{{ route('politicas') }}" class="nav-item nav-link active">Politicas <i class="fas fa-handshake"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
