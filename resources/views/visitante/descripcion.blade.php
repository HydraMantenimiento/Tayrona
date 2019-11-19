@extends('visitante.layouts.layout')

@section('content')
<div class="container" style=" width: 100vw;  height: 100vh;">
    <div class="row">
        <div class="my-3 con">
            <div class=" my-1 img-des">
                <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-t">
            </div>
            <div class=" my-1 img-des">
                <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-t">
            </div>
            <div class="img-des">
                <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-t">
            </div>
        </div>
        <!-- imagen grande -->
        <div class="col-5 my-3  img-m">
            <img src="{{ asset('imagenes/m.jpg') }}" alt="" class="img-m">
        </div>
        <!-- este campo es de la descripcion -->
        <div class="col-5 my-3 img-m">
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
