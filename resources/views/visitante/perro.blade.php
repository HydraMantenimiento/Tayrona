
@extends('layouts.layout')

@section('content')

<div class="container" style=" width: 100vw; height: 100vh;">
    <div class="row">
        @foreach($query as $q)
            <div class="col-sm-3 my-3">
                <div class="card btn btn-outline ">
                    <a href="{{ route('descripcion') }}"><img src="{{ asset('imagenes/comida-perro.png') }}" alt="" class="card-img-top cimg" ></a>
                    <div class="card-body">
                        <p class="card-text">{{$q->name}}</p>
                    </div>
                </div>
            </div>
        @endforeach
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
