
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
                        @foreach($imgs as $img)
                            <div class="product-preview">
                                <img src="{{ asset($img->url) }}" alt="" style="width: 450px; height: 480px;">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        @foreach($imgs as $img)
                            <div class="product-preview">
                                <img src="{{ asset($img->url) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{$producto->name}}</h2>
                        <!--<div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>-->
                        <p>{{$producto->descripcion}}</p>
                        <div>
                            <h3 class="product-price">${{$producto->precio}} </h3>
                        </div>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number" value="1" name="cant">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <a href="{{ route('product.addToCart',['id'=>$producto->id ]) }}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
                        </div>

                        <ul class="product-btns">
                            <li><a href="{{ route('listadeseos', ['producto'=>$producto->id, 'user'=>$user] ) }}"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container-fluid" >
            <div class="row col-md-8">
                <div class="col-2">
                    <div class="col-5 my-3 ">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($descripcion as $descriptions )
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#{{  str_replace(' ', '', $descriptions->name) }}" role="tab" aria-controls="home" aria-selected="true">{{ $descriptions->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="my-2 col-md-8" >
                                @foreach($descripcion as $descriptions)
                                    <div class="tab-pane fade" id="{{ str_replace(' ', '', $descriptions->name) }}" role="tabpanel" aria-labelledby="profile-tab" >
                                        {{ $descriptions->description }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>

    <!-- /SECTION -->




@endsection
