@extends('theme.lteuser.masteruser')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/usuariogrooming.css') }}">
    <body class="boxed_wrapper" cz-shortcut-listen="true">

    <div class="preloader" style="display: none;"></div>
    <section class="page-title centred" style="background-image: url({{ asset('imagenes/page-title.jpg') }});">
        <div class="container">
            <h1>Noticia</h1>
        </div>
    </section>

    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="{{ route('bloguser') }}">Homepage</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">
                        <div class="inner-box">
                            <div class="news-block-one">
                                <div class="date">{{ $blog->created_at }}</div>
                                <figure class="image"><img src="{{ asset($blog->imagen) }}" alt="" style="width: 770px; height: 470px; "></figure>
                                <div class="lower-content">
                                    <ul class="info-box">
                                        <li>Mike Hardson</li>
                                        <li>5 Comments</li>
                                    </ul>
                                    <h2>{{ $blog->title }}</h2>
                                </div>
                            </div>
                            <div class="text">
                                <!--<blockquote></blockquote>-->
                                {!!$blog->body!!}
                            </div>
                        </div>
                        <div class="comments-area">
                            <h2 class="group-title">2 Comentarios</h2>
                            <div class="comment-box">
                                <div class="comment">
                                    <figure class="author-thumb">
                                        <div class="date">14<br>Mar</div>
                                        <img src="{{asset('imagenes/news-3.png')}}" alt="">
                                    </figure>
                                    <div class="comment-inner clearfix">
                                        <h3>Kevin Martin</h3>

                                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est  dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta.</div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <figure class="author-thumb">
                                        <div class="date">15<br>Mar</div>
                                        <img src="{{asset('imagenes/news-3.png')}}" alt="">
                                    </figure>
                                    <div class="comment-inner clearfix">
                                        <h3>Jessica Brown</h3>
                                        <div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est  dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta.</div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <a href="{{ route('bloguser') }}"><button class="theme-btn">ver mas</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form-area">
                            <h2 class="group-title">Deja un comentario</h2>
                            <form action="{{ route('commentBlog', ['user'=>$user->id, 'blog'=>$blog->id]) }}" method="post" class="comment-form">
                                @csrf()
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Write here message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn">Submit comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-post sidebar-widget">
                            <h3 class="sidebar-title">Noticias recientes</h3>
                            <div class="widget-content">
                                <div class="post">
                                    <span>04 Mar, 2019</span>
                                    <div class="text"><a href="blog-single.html">Cómo cuidar a cualquier tipo de mascota</a></div>
                                </div>
                                <div class="post">
                                    <span>20 Feb, 2019</span>
                                    <div class="text"><a href="blog-single.html">Los 10 mejores consejos para pasear y entrenar perros</a></div>
                                </div>
                                <div class="post">
                                    <span>17 Feb, 2019</span>
                                    <div class="text"><a href="blog-single.html">Obtenga dietas y planes de nutrición para mascotas gratis</a></div>
                                </div>
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
