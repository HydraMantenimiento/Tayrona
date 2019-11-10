
@extends('layouts.layout')

@section('content')

    <style>
        .wrap{
            max-width: 1250px;
            width: 100%;
            margin: auto;
        }

        .store-wrapper{
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
            background: #E84C3D;

            text-align: center;
            text-decoration: none;
            color: #fff;
        }

        .category_list .ct_item-active{
            background: #2D3E50;
        }

        /* PRODUCTOS ============*/

        .products-list{
            width: 82%;
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

        /* RESPONSIVE */

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
                width: 100%;
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
            .products-list .product_item{
                width: 100%;
                margin-left: 0px;
            }
        }

    </style>

    <div class="wrap">
        <h1></h1>
        <div class="store-wrapper">
            <div class="category_list">
                <a href="#" class="category_item" category="all">Todo</a>
                <a href="#" class="category_item" category="ordenadores">Ordenadores</a>
                <a href="#" class="category_item" category="laptops">Laptops</a>
                <a href="#" class="category_item" category="smartphones">Smartphones</a>
                <a href="#" class="category_item" category="monitores">Monitores</a>
                <a href="#" class="category_item" category="audifonos">Audifonos</a>
            </div>
            <section class="products-list">
                @foreach($query as $q)
                    <div class="product-item" category="laptops">
                        <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/comida-perro.png') }}" alt="" ></a>
                        <a href="#">{{$q->name}}</a>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
    {{$query -> links()}}
</div>
@endsection