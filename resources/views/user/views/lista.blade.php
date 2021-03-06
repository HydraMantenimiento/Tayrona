
@extends('theme.lteuser.masteruser')

@section('content')
    <style>
        body{
            background: #fff;
        }
        .store-wrapper{
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }

        /* PRODUCTOS ============*/

        .products-list{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }
        .products-list .product-item{
            width: 20%;
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

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="products-tabs">
                            <div id="tab2" class="tab-pane fade in active">
                                @foreach($deseos as $deseo)
                                    <div class="col-md-3 col-xs-6">
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="{{asset(\App\Http\Controllers\viewsCategoryController::productImg($deseo->product_id)->url ?? 'imagenes/default.png') }}" alt="">
                                                <div class="product-label">
                                                    <a href="{{ route('listdelete', $deseo->id) }}">
                                                        <span class="sale">
                                                            <i class="fa fa-close"></i>
                                                       </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $deseo->product->name }}</p>
                                                <h3 class="product-name"><a href="#"></a></h3>
                                                <h4 class="product-price">$ {{ $deseo->product->precio }}</h4>
                                                <div class="product-rating">
                                                </div>
                                                <div class="product-btns">
                                                    <button class="quick-view" >
                                                        <a href="{{ route('descripcionuser',$deseo->product_id) }}">
                                                            <i class="fa fa-eye"></i>
                                                            <span class="tooltipp">quick view</span>
                                                        </a>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn">
                                                    <a href="{{ route('product.addToCart',['id'=>$deseo->product_id]) }}">
                                                        <i class="fa fa-cart-arrow-down"></i> add to cart
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
