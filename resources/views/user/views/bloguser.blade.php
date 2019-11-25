@extends('theme.lteuser.masteruser')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/usuariogrooming.css') }}">
    <body class="boxed_wrapper" cz-shortcut-listen="true">

    <div class="preloader" style="display: none;"></div>
    <section class="page-title centred" style="background-image: url('imagenes/page-title.jpg');">
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
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="date">09<br />Mar</div>
                        <figure class="image-box"><a href="{{ route('blogview') }}"><img src="{{asset('imagenes/news-3.png')}}" alt="" style="height: 387px; width:370px;"></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>3 Comments</li>
                            </ul>
                            <h3><a href="{{ route('blogview') }}">Don’t worry your pets are in good hands</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="{{ route('blogview') }}">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="date">09<br />Mar</div>
                        <figure class="image-box"><a href="{{ route('blogview') }}"><img src="{{asset('imagenes/news-3.png')}}" alt="" style="height: 387px; width:370px;"></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>3 Comments</li>
                            </ul>
                            <h3><a href="{{ route('blogview') }}">Don’t worry your pets are in good hands</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="{{ route('blogview') }}">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="date">09<br />Mar</div>
                        <figure class="image-box"><a href="{{ route('blogview') }}"><img src="{{asset('imagenes/news-3.png')}}" alt="" style="height: 387px; width:370px;"></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>3 Comments</li>
                            </ul>
                            <h3><a href="{{ route('blogview') }}">Don’t worry your pets are in good hands</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="{{ route('blogview') }}">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="date">09<br />Mar</div>
                        <figure class="image-box"><a href="{{ route('blogview') }}"><img src="{{asset('imagenes/news-3.png')}}" alt="" style="height: 387px; width:370px;"></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>3 Comments</li>
                            </ul>
                            <h3><a href="{{ route('blogview') }}">Don’t worry your pets are in good hands</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="{{ route('blogview') }}">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="date">09<br />Mar</div>
                        <figure class="image-box"><a href="{{ route('blogview') }}"><img src="{{asset('imagenes/news-3.png')}}" alt="" style="height: 387px; width:370px;"></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>3 Comments</li>
                            </ul>
                            <h3><a href="{{ route('blogview') }}">Don’t worry your pets are in good hands</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="{{ route('blogview') }}">Read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="news-block-one wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="date">09<br />Mar</div>
                        <figure class="image-box"><a href="{{ route('blogview') }}"><img src="{{asset('imagenes/news-3.png')}}" alt="" style="height: 387px; width:370px;"></a></figure>
                        <div class="lower-content">
                            <ul class="info-box">
                                <li>Mike Hardson</li>
                                <li>3 Comments</li>
                            </ul>
                            <h3><a href="{{ route('blogview') }}">Don’t worry your pets are in good hands</a></h3>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="link"><a href="{{ route('blogview') }}">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 message-btn ">
                <a href="{{ route('bloguser') }}" ><button class="theme-btn col-md-3">ver mas</button></a>
            </div>
        </div>
    </section>
    <!-- news-section end -->




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
