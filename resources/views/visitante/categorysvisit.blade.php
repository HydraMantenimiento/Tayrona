
@extends('visitante.layouts.layout')

@section('content')
    <style>
        .content{
            position: relative;
        }
        .close-menu {
            display: block;
            width: 100%;
            float: left;
        }
        .close-menu .btn{
            float: right;
            border-radius: 30px;
           margin: 20px 10px;
        }
        .wrap{
            padding-top: 0px;
            width: 260px;
            background: #fafafa;
            display: block;
            float: left;
            height: 860px;
            transition: 1s;
        }
        .category_item{
            display: block;
            padding:15px 30px;
            width: 100%;
            text-decoration: none;
            border-bottom: 1px solid  #eeeeee;
        }
        .category_title {
            padding:10px 20px;
            transition: 5s;
        }

        .category_item:hover{
            background: #FC7D3F;
            color:white;
            transition: 1s;
        }
        .product_list{

        }
        .content-product{
            display: flex;
            justify-content:center;
            flex-wrap: wrap;
        }

        .item-product{
            width: 18%;
            display: block;
            margin: 10px 0.5%;
        }

        .menu-secundary{
            width: 100%;
            padding: 10px 20px;
        }
        .desc {
            position: absolute;
            background: #FC7D3F;
            padding: 5px 10px ;
            color: white;
            top:10px;
            right: 10px;
        }
        .prod-info{
            padding: 5px 0px;
        }

        .like{
            position: absolute;
            top:10px;
            left: 10px;
            background: rgba(255, 255, 255, 0.66);
            padding: 5px 10px 5px 10px;
        }

        @media only screen and (max-width: 960px){
            .item-product {
                width: 32%;
            }
            .wrap{
                top:0px;
                z-index: 20;
                position: absolute;
                left: -260px;
            }

        }

        @media only screen and (max-width: 720px) {
            .item-product {
                width: 48%;
            }
        }

        @media only screen and (max-width: 576px) {

            .item-product{
                width: 100%;
            }

            .content-product{
                overflow-y: auto;
            }
        }




    </style>
    

    <div class="product_list">
    <div class="container-fluid ">
            <div class="col-12">
            <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for($i = 0; $i < count($carrousels); $i++ )
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' :'' }} "></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                <?php $i = 0 ?>
                @foreach($carrousels as $carrousel)
                <div class="carousel-item {{ $i == 0 ? 'active' :'' }} ">
                    <img src="{{ asset($carrousel->img) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $carrousel->title }}</h5>
                        <p>{{ $carrousel->description }}</p>
                    </div>
                </div>
                    <?php $i++ ?>
                @endforeach
                    @if(count($carrousels)  == 0)
                        @for($i = 0; $i < 3; $i++)
                            <div class="carousel-item {{ $i == 0 ? 'active' :'' }} ">
                                <img src="holder.js/500x600" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>TITULO</h5>
                                    <p></p>
                                </div>
                            </div>
                        @endfor
                    @endif
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            </div>
            <div class="row">
                <div class="col-12 d-block">
                    <div class="content-product">
                    @foreach($query as $producto)

                            <div class="item-product">

                        <div class="card ">
                            <div class="desc bg-danger">
                                20 %
                            </div>
                            <div class="like">
                                <i class="fas fa-heart"></i>
                            </div>
                            <a href="{{ route('description.visitors', $producto->id) }}">
                                <img src="{{asset(\App\Http\Controllers\viewsCategoryController::productImg($producto->id)->url ?? 'imagenes/default.png') }}" class="card-img-top p-1 "  alt="..." height="200px">
                            </a>
                            <div class="prod-info">
                                <small class="  text-center font-lato font-weight-bold m-0 p-0 d-block" style="font-size:12px;">
                                    {{ strtoupper($producto->name) }}
                                </small>
                                <p class="text-center">
                                    <small style="text-decoration: line-through;">${{ number_format($producto->precio, '0' , '.', '.') }}</small>
                                    <?php
                                        $desc = $producto->precio * 20 / 100;
                                    ?>
                                    <small> - </small>
                                    <small class="text-danger">${{ number_format($producto->precio - $desc, '0' , '.', '.') }}</small>
                                </p>
                                <div class="px-1">
                                <button class="btn btn-block btn-dark">Comprar <i class="fas fa-shopping-cart"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    </div>
                </div>
        </div>
        {{$query -> links()}}
    </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn-open').click(function () {
                $('.wrap').css({ 'left' : '0px' })
            });
           $('.close-menu').click(function () {
               $('.wrap').css({ 'left' : '-260px' })
           });
        });
    </script>
@endsection
