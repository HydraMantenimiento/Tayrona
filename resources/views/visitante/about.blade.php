@extends('visitante.layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/visitante/veterinaria.css') }}">

<body class="boxed_wrapper" cz-shortcut-listen="true">
    <!-- .preloader -->
    <div class="preloader" style="display: none;"></div>
    <!-- /.preloader -->

    <!-- page-title -->
    <section class="page-title centred" style="background-image: url('imagenes/baño.jpg');">
        <div class="container">
            <h1>SOBRE NOSOTROS</h1>
        </div>
    </section>
    <!-- page-title end -->
    <!-- page-info -->
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a >SOBRE</a></li>
                    <li>NOSOTROS</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-info -->


    <!-- about-style-three -->
    <section class="about-style-three">
        <div class="container">
            <div class="inner-content">
                <div class="video-gallery wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <figure class="image-box"><img src="{{asset('imagenes/baño.jpg')}}" alt=""></figure>
                    <a href="{{asset('video/video.mp4')}}" class="overlay-link lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                </div>
                <div class="lower-content centred">
                    <div class="sec-title">
                        <div class="top-title">Pocas palabras sobre la empresa</div>
                        <h1>Comercializamos alimentos todas las marcas, medicamentos y accesorios para mascotas.</h1>
                    </div>
                    <div class="text">
                        <p>
                            Somos una marca pensada en dar soluciones a las necesidades de tu mascota, buscando ofrecer un servicio de calidad contribuyendo con la felicidad de tu mascota.
                            Contamos con un amplio portafolio de productos y servicios para su mascota alimentos, accesorios y medicamentos de alta calidad y excelencia.
                            Queremos consolidarnos como líderes en el mercado ofreciéndoles a nuestros clientes un excelente servicio y atención personalizada para tu mascota.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->
    <section class="testimonial-section centred" style="background-image: url('imagenes/testimonial-bg.jpg');">

    </section>
    <!-- clients-section end -->


    <!-- team-style-two -->
    <section class="team-style-two alternate-2 centred">
        <div class="container">
            <div class="sec-title">
                <div class="top-title">Personal de Tayrona</div>
                <h1>Conócenos</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="{{asset('imagenes/baño.jpg')}}" alt="" style="height: 212px;"></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Reena Scot</a></h3>
                            <span class="designation">Groomer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="{{asset('imagenes/service-details-2.jpg')}}" alt="" style="height: 212px;"></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Luis  Parra</a></h3>
                            <span class="designation">boss</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="{{asset('imagenes/team-5.png')}}" alt="" style="height: 212px;"></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Sarah Eve</a></h3>
                            <span class="designation">Groomer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="{{asset('imagenes/baño.jpg')}}" alt="" style="height: 212px;"></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Reena Scot</a></h3>
                            <span class="designation">Groomer</span>
                            <!--<ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-style-two end -->


    <!-- testimonial-section -->
    <section class="testimonial-section centred" style="background-image: url('imagenes/testimonial-bg.jpg');">

    </section>


    <!--Scroll to top
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>
    -->


    <!-- jequery plugins-->
    <script src="<?php echo e(asset('js/visitante/popper.min.js')); ?>js/jquery.js"></script>
    <script src="<?php echo e(asset('js/visitante/owl.js')); ?>"></script>
    <script src="<?php echo e(asset('js/visitante/wow.js')); ?>"></script>
    <script src="<?php echo e(asset('js/visitante/validation.js')); ?>"></script>
    <script src="<?php echo e(asset('js/visitante/jquery.fancybox.js')); ?>"></script>
    <script src="<?php echo e(asset('js/visitante/bxslider.js')); ?>"></script>
    <script src="<?php echo e(asset('js/visitante/appear.js')); ?>"></script>
    <script src="<?php echo e(asset('js/visitante/scrpt.js')); ?>"></script>

@endsection

