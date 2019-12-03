
@extends('theme.lteuser.masteruser')
@section('content')

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{asset("desing/img/product06.png")}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{asset("desing/img/product06.png")}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{asset("product_img")}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{asset("desing/img/product06.png")}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{asset("desing/img/product06.png")}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{asset("product_img")}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{asset("desing/img/product06.png")}}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{asset("desing/img/product06.png")}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{$producto->name}}</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">${{$producto->precio}} <del class="product-old-price">$990.00</del></h3>
                        </div>
                        <p>{{$producto->descripcion}}</p>
                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number" value="1">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <a href="{{ route('product.addToCart',['id'=>$producto->id ]) }}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-10 " >
                    @foreach($descripcion as $des)
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">{{$des->name}}</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                       <p>{{$des->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                        @endforeach
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <!-- /SECTION -->




@endsection
