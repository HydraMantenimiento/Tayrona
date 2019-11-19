
@extends('layouts.layout')

@section('content')

    <style>
        .wrap{
            max-width: 100%;
            width: 100%;
            padding: 10px;
        }

        .store-wrapper{
            display: flex;
            flex-wrap: wrap;
        }

        .category_list{
            display: flex;
            flex-direction: column;
            width: 12%;
        }

        .category_list .category_item{
            display: block;
            width: 100%;
            padding: 15px 0;
            margin-bottom: 10px;
            background: #FE7A00;
            text-align: center;
            text-decoration: none;
            color: #fff;
        }

        .category_list .ct_item-active{
            background: #2D3E50;
        }

        /* PRODUCTOS ============*/

        .products-list{
            width: 88%;
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
            width: 90%;
        }

        .products-list .product-item a{
            display: block;
            width: 90%;
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
        <div class="store-wrapper">
            <div class="category_list">
                <a href="{{ url('vistascategorias/'.$name.'/alimentos') }}" class="category_item" category="all">Alimentos</a>
                <a href="{{ url('vistascategorias/'.$name.'/accesorios') }}" class="category_item" category="ordenadores">Accesorios</a>
                <a href="{{ url('vistascategorias/'.$name.'/aseo') }}" class="category_item" category="laptops">Productos Aceo</a>
                <a href="{{ url('vistascategorias/'.$name.'/juguetes') }}" class="category_item" category="smartphones">Juguetes</a>
                <a href="{{ url('vistascategorias/'.$name.'/drogueria') }}" class="category_item" category="monitores">Drogueria</a>
            </div>
            <section class="products-list" >
                <div class="container">
                    <div class="products-tabs">
                         <div class="row">
                             @foreach($query as $producto)
                                 <div class="col-md-3 col-xs-6">
                                     <div class="product">
                                         <div class="product-img">
                                             <img src="{{asset("desing/img/product06.png")}}" alt="">
                                             <div class="product-label">
                                                 <span class="sale">-30%</span>
                                             </div>
                                         </div>
                                         <div class="product-body">
                                             <p class="product-category">Category</p>
                                             <h3 class="product-name"><a href="#">{{$producto->name}}</a></h3>
                                             <h4 class="product-price">${{$producto->precio}} <del class="product-old-price">$990.00</del></h4>
                                             <div class="product-rating">
                                             </div>
                                             <div class="product-btns">
                                                 <button class="quick-view" >
                                                     <a href="{{ route('descripcionuser',$producto->id) }}">
                                                         <i class="fa fa-eye"></i>
                                                         <span class="tooltipp">quick view</span>
                                                     </a>
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                    </div>
                    {{$query -> links()}}
                </div>
            </section>
        </div>
    </div>

@endsection
