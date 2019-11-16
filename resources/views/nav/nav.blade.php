<div class="container-fluid bg-orange z-depth-1 ">
    <div class="row">
        <div class="col-2 p-2">
            <a href="{{ route('inicio') }}" class="logo"><img src="{{ asset('iconos/logo-tayrona.png') }}" alt="" width="100%" height="90px"></a>
        </div>
        <div class="col-10">
            <nav class="navbar navbar-expand-lg navbar-dark bg-orange mx-0 px-0">
                <a href="" class="navbar-brand pl-0 ml-0 navbar-expand-lg">Donde las mascotas van </a>
                <div class="container-search " id="search">
                    <i class="fas fa-search text-white search"></i>
                    <input type="text" class="barra-busqueda" placeholder="Buscar" v-model="dataText" v-on:keyup="search()">
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
                            axios
                                .get('http://127.0.0.1/tayrona/public/products')
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
                        <li class="nav-item dropdown">
                            <a class="nav-link  active" href="{{ route('vistascategorias',$name = 'perros') }}" id="navbarDropdown" role="button" >
                                PERROS  <i class="fas fa-bone"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  active" href="{{ route('vistascategorias',$name = 'gatos') }}" id="navbarDropdown" role="button" >
                                GATOS <i class="fas fa-paw"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  active" href="{{ route('vistascategorias', $name = 'otras mascotas') }}" id="navbarDropdown" role="button" >
                                OTRAS MASCOTAS <i class="fas fa-dove"></i>
                            </a>
                        </li>
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
