@extends('theme.lteuser.masteruser')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/usuariogrooming.css') }}">
 <body class="boxed_wrapper" cz-shortcut-listen="true">

    <div class="preloader" style="display: none;"></div>
    <section class="page-title centred" style="background-image: url('imagenes/page-title.jpg');">
        <div class="container">
            <h1>Noticia</h1>
        </div>
    </section>

    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="{{ route('bloguser') }}">Homepage</a></li>
                    <li>noticias</li>
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
                                <div class="date">30<br>Feb</div>
                                <figure class="image"><img src="{{asset('imagenes/news-3.png')}}" alt="" style="width: 770px; height: 470px; "></figure>
                                <div class="lower-content">
                                    <ul class="info-box">
                                        <li>Jaiber Vargas</li>
                                        <li>2 Comments</li>
                                    </ul>
                                    <h2>Refugia y alimenta a los animales que lo necesitan</h2>
                                </div>
                            </div>
                            <div class="text">
                                <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor erat lectus, euismod posuere erat aliquet quis. Etiam sit amet nunc sed quam dapibus non efficitur at in metus. Nam et metus eget arcu volutpat rhoncus et eu mi. Donec id tellus sed nulla faucibus aliquam.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi est nibh, hendrerit bibendum enim eu, vehicula porta nisi. Donec at ligula sed turpis mollis commodo in convallis magna. Aliquam a mi mauris. Maecenas volutpat dui vel mauris tempus placerat. Proin blandit eu tortor vel pellentesque. Fusce laoreet ipsum lorem, at aliquet ipsum varius tempus.</p>
                                <blockquote>
                                    Anyone can write code that a computer can understand. Good programmers write code that humans can understand. Intuitive design is how we give the user new superpowers.
                                </blockquote>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere id cubilia Curae; Maecenas nec tellus vehicula lorem ultricies condimentum. Sed consectetur urna eget et finibus posuere. Sed tempus orci erat, sit amet pretium lorem tincidunt eget. Maecenas porta risus on neque rhoncus, sed pharetra diam vulputate. Nunc in ligula vel sem porttitor consequat. Ut porttitor non ante at bibendum. Praesent posuere turpis lacus, vel tempor felis eleifend eu. Morbi velit odio, pulvinar vel ligula donec, consectetur faucibus elit.</p>
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
                            <form action="#" method="post" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Full name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
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
                        <div class="sidebar-category sidebar-widget">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="widget-content">
                                <ul class="category-list">
                                    <li><a href="#">Perros</a></li>
                                    <li><a href="#">Gatoa</a></li>
                                    <li><a href="#">Otras &amp; Mascotas</a></li>
                                    <li><a href="#">Mascotas &amp; Otras</a></li>
                                </ul>
                            </div>
                        </div>
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
                            <div class="widget-content centred" style="background-image: url('imagenes/page-title.jpg');">
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
