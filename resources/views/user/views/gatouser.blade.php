
@extends('theme.lteuser.masteruser')

@section('content')

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body{
            background: #E0E4E5;
            font-family: 'Open Sans', sans-serif;
            /*overflow: hidden; -----> ocultar el scroll de desplazamiento*/
        }


        .store-wrapper{
            padding: 15px;
            display: flex;
            flex-wrap: wrap;
        }

        .category_list{
            display: flex;
            flex-direction: column;
            width: 18%;
        }

        .category_list .category_item{
            display: block;
            width: 90%;
            padding: 15px 0;
            margin-bottom: 20px;
            background: #1A2226;

            text-align: center;
            text-decoration: none;
            color: #fff;
        }

        .category_list .ct_item-active{
            background: #2D3E50;
        }
        /* PRODUCTOS ============*/

        .products-list{
            width: 60%;
            display: flex;
            flex-wrap: wrap;
        }

        .products-list .product-item{
            width: 22%;
            margin-left: 3%;
            margin-bottom: 25px;
            box-shadow: 0px 0px 6px 0px rgba(0,0,0,0.22);

            display: flex;
            flex-direction: column;
            align-items: center;
            align-self: flex-start;

            transition: all .4s;
        }

        .products-list .product-item img{
            width: 100%;
        }

        .products-list .product-item a{
            display: block;
            width: 100%;
            padding: 8px 0;
            background: #2D3E50;

            color: #fff;
            text-align: center;
            text-decoration: none;
        }

        /* RESPONSIVE ================================*/

        @media screen and (max-width: 1100px){
            .products-list .product-item{
                width: 30.3%;
            }
        }

        @media screen and (max-width: 900px){
            .category_list,
            .products-list{
                width: 100%;
            }

            .category_list{
                flex-direction: row;
                justify-content: space-between;
            }

            .category_list .category_item{
                align-self: flex-start;
                width: 15%;
                font-size: 14px;
            }

            .products-list .product-item{
                margin-left: 4.5%;
            }

            .products-list .product-item:nth-child(3n+1){
                margin-left: 0px;
            }
        }

        @media screen and (max-width: 700px){
            .category_list{
                flex-direction: column;
            }
            .category_list .category_item{
                width: 90%;
                margin-bottom: 10px;
            }
        }

        @media screen and (max-width: 600px){

            .products-list .product-item{
                width: 47.5%;

            }

            .products-list .product-item:nth-child(3n+1){
                margin-left: 4.5%;
            }

            .products-list .product-item:nth-child(2n+1){
                margin-left: 0px;
            }

        }

        @media screen and (max-width: 350px){
            .products-list,
            .product_item {
                width: 100%;
                margin-left: 0px;
            }
        }
    </style>

<div class="container" style=" width: 100vw; height: 100vh;">


    <div class="row">

            <div class="store-wrapper">
                <div class="category_list">
                    <a href="#" class="category_item" category="all">Todo</a>
                    <a href="#" class="category_item" category="ordenadores">Alimentos</a>
                    <a href="#" class="category_item" category="laptops">Juguetes</a>
                    <a href="#" class="category_item" category="smartphones">Juguetes Comestibles</a>
                    <a href="#" class="category_item" category="monitores">Accesorios</a>
                    <a href="#" class="category_item" category="audifonos">Medicamentos</a>
                </div>
                <section class="products-list">
                    <div class="product-item" category="laptops">
                        <img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" >
                        <a href="#">Laptop Hp</a>
                    </div>
                    <div class="product-item" category="laptops">
                        <img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" >
                        <a href="#">Laptop Hp</a>
                    </div>
                    <div class="product-item" category="laptops">
                        <img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" >
                        <a href="#">Laptop Hp</a>
                    </div>
                    <div class="product-item" category="laptops">
                        <img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" >
                        <a href="#">Laptop Hp</a>
                    </div>
                </section>
        </div>
        <!--<div class="col-sm-3 my-3">
            <div class="card btn btn-outline " >
                <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/gato-alimento.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body ">
                    <p class="card-text">Nombre Productos</p>
                </div>
            </div>
        </div>-->

    </div>
    <div class="my-2">
        <div class="row">
            <nav>
                <ul class="pagination" style="margin-left: 190%;">
                    <li class="page-item"><a href="" class="page-link">previus</a></li>
                    <li class="page-item"><a href="" class="page-link">1</a></li>
                    <li class="page-item"><a href="" class="page-link">2</a></li>
                    <li class="page-item"><a href="" class="page-link">3</a></li>
                    <li class="page-item"><a href="" class="page-link">next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


@endsection
@section('scripts')

@endsection
