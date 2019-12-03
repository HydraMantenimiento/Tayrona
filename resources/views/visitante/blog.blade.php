@extends('visitante.layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/visitante/veterinaria.css') }}">
    <body class="boxed_wrapper" cz-shortcut-listen="true">

    <div class="preloader" style="display: none;"></div>
    <section class="page-title centred" style="background-image: url({{ asset('imagenes/page-title.jpg') }});">
        <div class="container">
            <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nuestras noticias</font></font></h1>
        </div>
    </section>

    <section class="page-info">
        <div class="container">
            <div class="content-box ">
                <ul class="bread-crumb">
                    <li><a href="#">Home</a></li>
                    <li>Noticias</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- news-section -->
    <section class="news-section blog-grid">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                        <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <?php \Carbon\Carbon::setLocale('es'); ?>
                            <div class="date" style="font-size: 20px;">{{ \Carbon\Carbon::now()->diffForHumans($blog->created_at) }}</div>
                            <figure class="image-box"><a href="{{ route('viewblog', $blog->id) }}"><img src="{{ asset($blog->imagen) }}" alt="" style="height: 387px; width:370px;"></a></figure>
                            <div class="lower-content">
                                <ul class="info-box"></ul>
                                <h3><a href="{{ route('viewblog', $blog->id) }}">{{ $blog->title}}</a></h3>
                                <div class="link"><a href="{{ route('viewblog', $blog->id) }}">Read more</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        {{$blogs -> links()}}
        <!-- <div class="col-lg-12 col-md-12 col-sm-12 message-btn ">
                <a href="" ><button class="theme-btn col-md-3">ver mas</button></a>
            </div>-->
        </div>
    </section>




    <!-- jequery plugins-->
    <script src="{{asset('js/visitante/popper.min.js')}}"></script>
    <script src="{{asset('js/visitante/owl.js')}}"></script>
    <script src="{{asset('js/visitante/wow.js')}}"></script>
    <script src="{{asset('js/visitante/validation.js')}}"></script>
    <script src="{{asset('js/visitante/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/visitante/bxslider.js')}}"></script>
    <script src="{{asset('js/visitante/appear.js')}}"></script>

    <script src="{{asset('js/visitante/script.js')}}"></script>
@endsection

