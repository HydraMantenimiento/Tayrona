
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
            justify-content:flex-start;
            flex-wrap: wrap;
        }

        .item-product{
            width: 23%;
            display: block;
            margin: 10px 0.5%;
        }

        .menu-secundary{
            width: 100%;
            padding: 10px 20px;
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
    <div class="content">
    <div class="menu-secundary d-block d-lg-none">
        <button class="btn shadow btn-open">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="wrap shadow">
        <div class="close-menu d-block d-lg-none">
            <button class="btn"><i class="fas fa-chevron-left"></i></button>
        </div>
        <div class="store-wrapper">
            <div class="category_title pt-lg-5">
                <h6>Subcategorias</h6>
            </div>
            <div class="category_list">
                <a href="{{ url('vistascategorias/'.$name.'/alimentos') }}" class="category_item" category="all">Alimentos</a>
                <a href="{{ url('vistascategorias/'.$name.'/accesorios') }}" class="category_item" category="ordenadores">Accesorios</a>
                <a href="{{ url('vistascategorias/'.$name.'/aseo') }}" class="category_item" category="laptops">Productos Aceo</a>
                <a href="{{ url('vistascategorias/'.$name.'/juguetes') }}" class="category_item" category="smartphones">Juguetes</a>
                <a href="{{ url('vistascategorias/'.$name.'/drogueria') }}" class="category_item" category="monitores">Drogueria</a>
            </div>
        </div>
    </div>

    <div class="product_list">
    <div class="container-fluid ">
            <div class="row">
                <div class="col-12 d-block">
                    <div class="content-product">
                    @foreach($query as $producto)
                    <div class="item-product">
                        <div class="card ">
                        <!-- a la ruta de la imagen le quite ->url -->
                           <img src="{{asset(\App\Http\Controllers\viewsCategoryController::productImg($producto->id)) }}" class="card-img-top p-1 "  alt="..." height="250px">
                            <div class="card-body">
                                <small class="card-text  text-center font-lato font-weight-bold m-0 p-0 d-block" style="font-size:14px;">{{ $producto->name }}</small>
                                <p class="card-title text-danger text-center p-0 m-0" style="font-size: 14px;">$ {{ number_format($producto->precio, '0' , '.', '.') }}</p>
                            </div>
                            <div class="card-footer bg-white d-flex py-3 justify-content-center">
                                <i class="fas fa-eye"></i>
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
