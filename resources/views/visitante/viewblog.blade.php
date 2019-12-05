@extends('visitante.layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/visitante/veterinaria.css') }}">

    <body class="boxed_wrapper" cz-shortcut-listen="true">

    <div class="preloader" style="display: none;"></div>
    <section class="page-title header centred" style="background-image: url({{ asset('imagenes/page-title.jpg') }});">
        <div class="container">
            <h1 class="d-block">Noticia</h1>
        </div>
    </section>
<!--
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="{{ route('mostrarblog') }}">Homepage</a></li>
                    <li>noticias</li>
                </ul>
            </div>
        </div>
    </section>
-->
    <section class="sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">
                        <div class="inner-box">
                            <div class="news-block-one">
                                <?php \Carbon\Carbon::setLocale('es'); ?>
                            <div class="date" style="font-size: 20px;">{{ \Carbon\Carbon::now()->diffForHumans($blog->created_at) }}</div>
                            <figure class="image"><img src="{{ asset($blog->imagen) }}" alt="" style="width: 770px; height: 470px; "></figure>
                            <div class="lower-content">

                                <h2>{{ $blog->title }}</h2>
                            </div>
                        </div>
                            <div class="text">
                            <!--<blockquote></blockquote>-->
                                {!!$blog->body!!}
                            </div>
                        </div>
                        <div class="comments-area">
                            <h2 class="group-title mb-0">{{ count($comentarios) }} Comentarios</h2>
                            <div class="comment-box">
                                @foreach($comentarios as $comentario)
                                    <div class="comment d-block">
                                        <figure class="author-thumb d-block">
                                            <div class="date">14<br>Mar</div>
                                            <img class="" src="{{ asset($comentario->user->avatar) }}" alt="" width="50px">
                                        </figure>
                                        <div class="comment-inner clearfix">
                                            <h3>{{ $comentario->user->name }}</h3>
                                            <div class="text mt-0">{{$comentario->comment}}</div>
                                        </div>
                                    </div>
                                @endforeach
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn">Submit comment</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-post sidebar-widget">
                            <h3 class="sidebar-title">blog recientes</h3>
                            <div class="widget-content">
                                @foreach( $blogs as $blog)
                                    <div class="post">
                                        <?php \Carbon\Carbon::setLocale('es'); ?>
                                        <span>{{ \Carbon\Carbon::now()->diffForHumans($blog->created_at) }}</span>
                                        <div class="text"><a href="blog-single.html">Cómo cuidar a cualquier tipo de mascota</a></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="featured-widget sidebar-widget">
                            <h3 class="sidebar-title">Featured Post</h3>
                            <div class="widget-content centred" style="background-image:url({{ asset('imagenes/page-title.jpg') }});">
                                <h2>No te preocupes, tus mascotas están en buenas manos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="{{asset('js/visitante/popper.min.js')}}"></script>
    <script src="{{asset('js/visitante/owl.js')}}"></script>
    <script src="{{asset('js/visitante/wow.js')}}"></script>
    <script src="{{asset('js/visitante/validation.js')}}"></script>
    <script src="{{asset('js/visitante/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/visitante/bxslider.js')}}"></script>
    <script src="{{asset('js/visitante/appear.js')}}"></script>

    <script src="{{asset('js/visitante/script.js')}}"></script>

    </body>


@endsection
