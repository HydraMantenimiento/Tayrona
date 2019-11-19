@extends('visitante.layouts.layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/veterinaria.css') }}">

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
                    <a href="https://www.youtube.com/watch?v=8PnwumgBufE&amp;t=28s" class="overlay-link lightbox-image" data-caption=""><i class="fa flaticon-play-button"></i></a>
                </div>
                <div class="lower-content centred">
                    <div class="sec-title">
                        <div class="top-title">Pocas palabras sobre la empresa</div>
                        <h1>Centro de aseo &amp; cuidado de mascotas</h1>
                    </div>
                    <div class="text">
                        <p>There are many variations of passages of available but the majority have suffered alteration in some form, by injected hu randomised words which don look even slightly believable. If you are going to use a passage of you need to be sure there lipsim is simply free text now isn't anything embarr assing hidden in the middle of text.</p>
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
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="{{asset('imagenes/service-details-2.jpg')}}" alt="" style="height: 212px;"></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Mike Albert</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="{{asset('imagenes/team-5.png')}}" alt="" style="height: 212px;"></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Sarah Eve</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="{{asset('imagenes/baño.jpg')}}" alt="" style="height: 212px;"></a></figure>
                        <div class="lower-content">
                            <h3><a href="#">Reena Scot</a></h3>
                            <span class="designation">Groomer</span>
                            <ul class="social-style-one">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-style-two end -->


    <!-- testimonial-section -->
    <section class="testimonial-section centred" style="background-image: url('imagenes/testimonial-bg.jpg');">
        <!--<div class="container">
            <div class="inner-content">
                <div class="testimonial-carousel owl-theme owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2088px, 0px, 0px); transition: all 0s ease 0s; width: 4872px;">
                        <div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                            <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                            <span>- Mark Twain</span>
                            </div>
                                </div>
                                    <div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                <span>- Mark Twain</span>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                <span>- Mark Twain</span>
                            </div>
                            </div>
                                <div class="owl-item" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                <span>- Mark Twain</span>
                            </div>
                            </div><div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                <span>- Mark Twain</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <div class="owl-prev">
                            <span class="fa fa-angle-left"></span>
                        </div>
                        <div class="owl-next">
                            <span class="fa fa-angle-right"></span>
                        </div>
                    </div>
                    <div class="owl-dots">
                        <div class="owl-dot">
                            <span></span>
                        </div>
                        <div class="owl-dot active">
                            <span></span>
                        </div>
                        <div class="owl-dot">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section>


    <!--Scroll to top
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>
    -->



@endsection
