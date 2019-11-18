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
            <div class="nav-content">
                <a class="nav-link  active" href="{{ route('vistascategorias',$name = 'perros') }}"  >
                    <div class="nav-item">
                        <div class="nav-img">
                            <h5><i class="fas fa-bone"></i></h5>
                        </div>
                        <div class="nav-title">
                            PERROS
                        </div>
                    </div>
                </a>
                <a class="nav-link  active" href="{{ route('vistascategorias',$name = 'perros') }}" >
                    <div class="nav-item">
                        <div class="nav-img">
                                <img src="{{ asset('assets/img/Cat-icon_30345.ico') }}" alt="" width="40px">
                        </div>
                        <div class="nav-title">
                            GATOS
                        </div>
                    </div>
                </a>
                <a class="nav-link  active" href="{{ route('vistascategorias', $name = 'otras mascotas') }}" >
                    <div class="nav-item">
                        <div class="nav-img">
                            <img src="{{ asset('assets/img/pet-animal-pets-fish-gold_108547.ico') }}" alt="" width="40px">
                        </div>
                        <div class="nav-title">
                            OTRAS MASCOTAS
                        </div>
                    </div>
                </a>
                <a href="{{ route('groming') }}" class="nav-link  active">
                    <div class="nav-item">
                        <div class="nav-img">
                            <img src="{{ asset('assets/img/cuttingscissors_corte_1578.ico') }}" alt="" width="40px">
                        </div>
                        <div class="nav-title">
                             GROMING
                        </div>
                    </div>
                </a>
                <a href="{{ route('blog') }}" class="nav-link active">
                    <div class="nav-item">
                        <div class="nav-img">
                            <img src="{{ asset('assets/img/article_blog_sign_icon-icons.com_51086.ico') }}" alt="" width="40px">
                        </div>
                        <div class="nav-title">
                            BLOG
                        </div>
                    </div>
                </a>
                <a href="{{ route('politicas') }}" class="nav-link active">
                    <div class="nav-item">
                        <div class="nav-img">
                            <img src="{{ asset('assets/img/wpsofficedoc_103611.ico') }}" alt="" width="40px">
                        </div>
                        <div class="nav-title">
                            POLITICAS
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
