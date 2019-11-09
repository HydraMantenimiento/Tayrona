

@extends('theme.lteuser.masteruser')

<!-- style="width: 18%; height: 200px;"
-->
@section('content')
    <style>


        .store-wrapper{
            display: flex;
            flex-wrap: wrap;
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
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Products tab & slick -->
                <div class="col-md-10">
                    <div class="row">
                        @foreach($query as $q)
                            <div class="col-md-3">
                                <div class="products-tabs">
                                    <!-- tab -->
                                    <div id="tab2" class="tab-pane fade in active">
                                        <div class="products-slick" data-nav="#slick-nav-2">
                                            <!-- product -->
                                            <div class="product">
                                                <div class="product-img">
                                                    <img src="{{asset("desing/img/product06.png")}}" alt="">
                                                    <div class="product-label">
                                                        <span class="sale">-30%</span>
                                                        <span class="new">NEW</span>
                                                    </div>
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">Category</p>
                                                    <h3 class="product-name"><a href="#">{{$q->name}}</a></h3>
                                                    <h4 class="product-price">${{$q->precio}} <del class="product-old-price">${{$q->precio}}</del></h4>
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="product-btns">
                                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                        <button class="quick-view"><a href="{{ route('descripcionuser') }}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                                                    </div>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="slick-nav-2" class="products-slick-nav"></div>
                                    </div>
                                    <!-- /tab -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            {{$query -> links()}}
            <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection
