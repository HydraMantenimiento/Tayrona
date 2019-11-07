@extends('layouts.layout')

@section('content')

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
@endsection




