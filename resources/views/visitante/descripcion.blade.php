@extends('visitante.layouts.layout')

@section('content')
    <style>
        .content-imgs{
            height: 400px;
            width: 120px;
            overflow-y: -moz-scrollbars-vertical;
            overflow-y: scroll !important;
            padding: 10px;
            position: relative;
            background: #f5f5f5;
        }
        .content-imgs .img-des img {
            display: block;
            margin-bottom: 10px;
            width: 100px;
            border: 4px solid white;
        }
        .img-des{
            margin: 10px 0px;

        }
        .arrow-img-up{
            left: 0px;
            background: rgba(255, 255, 255, 0.67);
            padding: 10px;
            text-align: center;
            position: absolute;
            width: 100%;
        }
        .arrow-img-down{
            left: 0px;
            bottom: 0px;
            background: rgba(255, 255, 255, 0.67);
            padding: 10px;
            text-align: center;
            position: absolute;
            width: 100%;
            z-index: 200;
        }
        .img-m{
            height: 400px;
        }
    </style>

    <div class="container" style=" width: 100vw;  height: 100vh;">
    <div class="row my-2">
        <div class="content-imgs">
            <div class="arrow-img-up">
                <i class="fas fa-chevron-up"></i>
            </div>
            @foreach($imgs as $img)
                <div class="img-des ">
                    <img src="{{ asset($img->url) }}" alt="" class="img-t img-option">
                </div>
            @endforeach
            <div class="arrow-img-down">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <!-- imagen grande -->
        <div class="col-5 my-3  img-m">
            <img src="{{ asset($imgs[0]->url) }}" alt="" id="img-first" class="d-block img-fluid" style="height: 380px; padding: 10px 0px;">
        </div>
        <!-- este campo es de la descripcion -->
        <div class="col-5 my-3 ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripcion</a>
                </li>
                 @foreach($descriptions as $description)
                    <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#{{  str_replace(' ', '', $description->name) }}" role="tab" aria-controls="home" aria-selected="true">{{ $description->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="my-2" style="width: auto;  height: 130px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque beatae laboriosam doloremque dignissimos atque molestias earum velit maxime deserunt nobis sed minus expedita deleniti modi libero, rem totam, cum sapiente!
                        <div class="" style="width: auto;  height: 150px;">
                            <!-- aca ban los botones y precio -->
                            <button type="button" class="btn btn-outline btnl">10 kg</button>
                            <button type="button" class="btn btn-outline">20 kg</button>
                            <button type="button" class="btn btn-outline">20 kg</button>
                            <p class="my-2"> Precio : $50.000</p>
                            <button type="button" class="btn btn-outline-success"><i class="fas fa-shopping-basket"></i></button>
                            <button type="button" class="btn btn-outline-success"><i class="fas fa-heart"></i></button>

                        </div>
                    </div>
                </div>
                @foreach($descriptions as $description)
                    <div class="tab-pane fade" id="{{ str_replace(' ', '', $description->name) }}" role="tabpanel" aria-labelledby="profile-tab">
                        {{ $description->description }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
