<div class="container-fluid bg-orange shadow " >
    <div class="row">
        <div class="col-12 py-2 d-block d-lg-none">
            <a href="{{ route('inicio') }}" ><img src="{{ asset('iconos/logo-tayrona.png') }}" alt="" width="35%" height="45px"></a>
            <a href="{{ route('register') }}" class="btn float-right text-white">Registrate <i class="fas fa-dog"></i></a>
            <a href="{{ route('login') }}" class="btn float-right text-white">Login <i class="fas fa-cat"></i></a>
        </div>
        <div class="col-2 p-2  d-none  d-lg-block">
            <a href="{{ route('inicio') }}" class="logo4"><img src="{{ asset('iconos/logo-tayrona.png') }}" alt="" width="100%" height="90px"></a>
        </div>
        <div class="col-12 col-md-12 col-lg-10">
            <nav class="navbar navbar-expand-lg navbar-dark bg-orange mx-0 px-0">
                <a href="" class="navbar-brand  d-none  d-lg-block pl-0 ml-0 navbar-expand-lg">Donde las mascotas van </a>
                <div class="container-search " id="search">
                    <i class="fas fa-search text-white search"></i>
                    <input type="text" class="barra-busqueda " placeholder="Buscar" v-model="dataText" v-on:keyup="search()">
                    <div class="list-search" v-if="dataText.length > 0 || data.length  > 0">
                        <div class="content-list" v-for="product of data" v-on:focus="show()">
                            <a href="">
                                <div class="item-search">
                                    <span class="d-block">@{{ product.name }}</span>
                                </div>
                                <div class="img-search">
                                    <i class="fas fa-search d-block"></i>
                                </div>
                            </a>
                        </div>
                        <div class="item-search w-100 text-center" v-if="data.length == 0">
                            <span class="d-block ">No hay ningun produto.</span>

                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/vue"></script>
                <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
                <script>
                    var vue = new Vue({
                        el: '#search',
                        mounted() {
                            axios.get('http://127.0.0.1/tayrona/public/products')
                                .then(response => {
                                    this.products = response.data
                                    console.log(response);
                                })
                        },
                        data: {
                            dataText: '',
                            products: [],
                            data: []
                        },
                        methods: {
                            search: function() {
                                this.data = this.products.filter((prod) => {
                                    if (this.dataText !== '') {
                                        return prod.name.substr(0, this.dataText.length).toLowerCase().trim()  === this.dataText.toLowerCase().trim();
                                    }
                                });
                            },
                            show() {
                                console.log('total');
                            }
                        }
                    });
                </script>
                <div class="collapse navbar-collapse d-none d-md-none d-lg-block justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-0 pr-0">
                        <!-- esto es para que se muestre solo cuando no se a iniciado session -->
                        <a href="{{ route('register') }}" class="btn text-white">Registrate <i class="fas fa-dog"></i></a>
                        <a href="{{ route('login') }}" class="btn text-white">Login <i class="fas fa-cat"></i></a>
                    </div>
                </div>
            </nav>
            <hr class="bg-white p-0 m-0">
            <nav class="navbar navbar-dark navbar-expand-lg navbar-adapter">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <div class="navbar-nav">
                        <a class="nav-link d-block text-center nav-item {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}"  >
                            <i class="fas fa-home"></i> Home
                        </a>
                        <a class="nav-link d-block text-center nav-item  {{ (request()->is('vistascategorias/perros')) ? 'active' : '' }}" href="{{ route('vistascategorias',$name = 'perros') }}"  >
                            <i class="fas fa-bone"></i>  Perros
                        </a>
                        <a class="nav-link  d-block text-center  nav-item {{ (request()->is('vistascategorias/gatos')) ? 'active' : '' }} " href="{{ route('vistascategorias',$name = 'gatos') }}" >
                            <i class="fas fa-paw"></i> Gatos
                        </a>
                        <a class="nav-link   d-block text-center nav-item {{ (request()->is('vistascategorias/otras mascotas')) ? 'active' : '' }}" href="{{ route('vistascategorias', $name = 'otras mascotas') }}" >
                            <i class="fas fa-carrot"></i> Otras Mascotas
                        </a>
                        <a href="{{ route('groming') }}" class="nav-link nav-item  d-block text-center {{ (request()->is('groming')) ? 'active' : '' }}">
                            <i class="fas fa-cut"></i> Groming
                        </a>
                        <a href="{{ route('Veterinaria') }}" class="nav-link nav-item   d-block text-center  {{ (request()->is('Veterinaria')) ? 'active' : '' }}">
                            <i class="fas fa-store-alt"></i> Veterinaria
                        </a>
                        <a href="{{ route('about') }}" class="nav-link  nav-item d-block text-center {{ (request()->is('about')) ? 'active' : '' }}">
                            <i class="fas fa-info"></i>  Nosotros
                        </a>
                        <a href="{{ route('mostrarblog.index') }}" class="nav-link nav-item  d-block text-center {{ (request()->is('mostrarblog')) ? 'active' : '' }}">
                            <i class="fas fa-blog"></i> Blog
                        </a>
                        <a href="{{ route('politicas') }}" class="nav-link nav-item d-block text-center  {{ (request()->is('politicas')) ? 'active' : '' }}">
                            <i class="fas fa-handshake"></i> Políticas
                        </a>
                    </div>
                </div>
            </nav>
         </div>
    </div>
</div>
