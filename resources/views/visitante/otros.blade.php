@extends('layouts.layout')


@section('content')

<div class="container" style=" width: 100vw; height: 100vh;">
    <div class="row">
        <div class="col-sm-3 my-3 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 my-3 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 my-3 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 my-3 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 my-1 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 my-1 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 my-1 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 my-1 ">
            <div class="card btn btn-outline">
            <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/medicamentos.jpg') }}" alt="" class="card-img-top cimg" ></a>
                <div class="card-body">
                    <p class="card-text">Nombre Producto</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-2">
        <div class="row">
            <nav>
                <ul class="pagination" style="margin-left: 190%;">
                    <li class="page-item"><a href="" class="page-link">previus</a></li>
                    <li class="page-item"><a href="" class="page-link">1</a></li>
                    <li class="page-item"><a href="" class="page-link">2</a></li>
                    <li class="page-item"><a href="" class="page-link">3</a></li>
                    <li class="page-item"><a href="" class="page-link">next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>


@endsection
