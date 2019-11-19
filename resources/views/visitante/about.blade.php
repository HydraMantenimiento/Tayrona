@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/veterinaria.css') }}">

    <body class="boxed_wrapper" cz-shortcut-listen="true">


    <!-- .preloader -->
    <div class="preloader" style="display: none;"></div>
    <!-- /.preloader -->


    <!-- Main Header -->
    <header class="main-header">

        <div class="page-header-mobile-info">
            <div class="page-header-mobile-info-content">
                <div class="header-info clearfix">
                    <ul class="info-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>660 Broklyn Street, 88 New York </span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>666 888 0000, Fax: +21 000 333</span>
                        </li>
                        <li>
                            <i class="fa fa-clock"></i>
                            <span>Mon - Fri 9:00 am - 6:00 pm</span>
                        </li>
                    </ul>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="toggle-box clearfix">
                <div class="page-header-mobile-info-toggle"></div>
                <div class="link"><a href="contact.html" class="theme-btn">Appointment</a></div>
            </div>
        </div>

        <div class="header-top">
            <div class="container">
                <div class="header-info clearfix">
                    <ul class="info-list pull-right">
                        <li>
                            <i class="flaticon-mail"></i>
                            <strong><a href="mailto:example@gmail.com">example@gmail.com</a></strong>
                            Email address
                        </li>
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <strong><a href="tel:+886668880000">666 888 0000</a></strong>
                            Phone line
                        </li>
                        <li>
                            <i class="flaticon-clock"></i>
                            <strong>Mon - Fri 9:00 am - 6:00 pm</strong>
                            Working hours
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="nav-outer clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="#">Home</a>
                                            <ul style="display: none;">
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul style="display: none;">
                                                        <li><a href="index.html">Header Style 01</a></li>
                                                        <li><a href="index-2.html">Header Style 02</a></li>
                                                    </ul>
                                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                        <li class="current dropdown"><a href="#">About</a>
                                            <ul style="display: none;">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul style="display: none;">
                                                <li><a href="service.html">Our Services</a></li>
                                                <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                                                <li><a href="single-service-2.html">Health Checkups</a></li>
                                                <li><a href="single-service-3.html">Styling Your Pets</a></li>
                                                <li><a href="single-service-4.html">Bath, Dry &amp; Brush</a></li>
                                                <li><a href="single-service-5.html">Cleaning &amp; Plucking</a></li>
                                                <li><a href="single-service-6.html">Coat Handler Pets</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li class="dropdown"><a href="#">News</a>
                                            <ul style="display: none; height: 104px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                                <li><a href="blog.html">Our News</a></li>
                                                <li><a href="blog-single.html">Single News</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="social-style-one">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index.html"><img src="images/small-logo.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="#">Home</a>
                                    <ul style="display: none; height: 155px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                        <li><a href="index.html">Home Page 01</a></li>
                                        <li><a href="index-2.html">Home Page 02</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul style="display: none;">
                                                <li><a href="index.html">Header Style 01</a></li>
                                                <li><a href="index-2.html">Header Style 02</a></li>
                                            </ul>
                                            <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li class="current dropdown"><a href="#">About</a>
                                    <ul style="display: none; height: 104px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul style="display: none;">
                                        <li><a href="service.html">Our Services</a></li>
                                        <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                                        <li><a href="single-service-2.html">Health Checkups</a></li>
                                        <li><a href="single-service-3.html">Styling Your Pets</a></li>
                                        <li><a href="single-service-4.html">Bath, Dry &amp; Brush</a></li>
                                        <li><a href="single-service-5.html">Cleaning &amp; Plucking</a></li>
                                        <li><a href="single-service-6.html">Coat Handler Pets</a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li class="dropdown"><a href="#">News</a>
                                    <ul style="display: none; height: 104px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                        <li><a href="blog.html">Our News</a></li>
                                        <li><a href="blog-single.html">Single News</a></li>
                                    </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->


    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>
    <!-- page-title end -->


    <!-- page-info -->
    <section class="page-info">
        <div class="container">
            <div class="content-box clearfix">
                <ul class="bread-crumb">
                    <li><a href="index.html">Homepage</a></li>
                    <li>About Us</li>
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
                    <figure class="image-box"><img src="images/resource/video-image.jpg" alt=""></figure>
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image" data-caption=""><i class="flaticon-play-button"></i></a>
                </div>
                <div class="lower-content centred">
                    <div class="sec-title">
                        <div class="top-title">Few Words About Poopet Company</div>
                        <h1>Pet Grooming &amp; Care Center</h1>
                    </div>
                    <div class="text">
                        <p>There are many variations of passages of available but the majority have suffered alteration in some form, by injected hu randomised words which don look even slightly believable. If you are going to use a passage of you need to be sure there lipsim is simply free text now isn't anything embarr assing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->


    <!-- clients-section -->
    <section class="clients-section gray-bg">
        <div class="container">
            <div class="clients-outer">
                <ul class="clients-carousel owl-carousel owl-loaded owl-drag">





                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1728px, 0px, 0px); transition: all 0s ease 0s; width: 2880px;"><div class="owl-item cloned" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-1.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-2.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-3.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-4.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-5.png" alt=""></a></figure>
                                </li></div><div class="owl-item" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-1.png" alt=""></a></figure>
                                </li></div><div class="owl-item" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-2.png" alt=""></a></figure>
                                </li></div><div class="owl-item" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-3.png" alt=""></a></figure>
                                </li></div><div class="owl-item" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-4.png" alt=""></a></figure>
                                </li></div><div class="owl-item active" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-5.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned active" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-1.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned active" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-2.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned active" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-3.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned active" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-4.png" alt=""></a></figure>
                                </li></div><div class="owl-item cloned" style="width: 162px; margin-right: 30px;"><li class="slide-item">
                                    <figure class="image-box"><a href="#"><img src="images/clients/clients-5.png" alt=""></a></figure>
                                </li></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><span class="fa fa-angle-left"></span></div><div class="owl-next"><span class="fa fa-angle-right"></span></div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></ul>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- team-style-two -->
    <section class="team-style-two alternate-2 centred">
        <div class="container">
            <div class="sec-title">
                <div class="top-title">Pet Care Staff</div>
                <h1>Meet Our Groomers</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 staff-column">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <figure class="image-box"><a href="#"><img src="images/resource/team-4.png" alt=""></a></figure>
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
                        <figure class="image-box"><a href="#"><img src="images/resource/team-5.png" alt=""></a></figure>
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
                        <figure class="image-box"><a href="#"><img src="images/resource/team-6.png" alt=""></a></figure>
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
                        <figure class="image-box"><a href="#"><img src="images/resource/team-7.png" alt=""></a></figure>
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
    <section class="testimonial-section centred" style="background-image: url(images/background/testimonial-bg.jpg);">
        <div class="container">
            <div class="inner-content">
                <div class="testimonial-carousel owl-theme owl-carousel owl-loaded owl-drag">



                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2088px, 0px, 0px); transition: all 0s ease 0s; width: 4872px;"><div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div></div><div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div></div><div class="owl-item" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div></div><div class="owl-item active" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div></div><div class="owl-item" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div></div><div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div></div><div class="owl-item cloned" style="width: 690px; margin-right: 6px;"><div class="testimonial-content">
                                    <h2>If you pick up a starving dog and make him prosperous he will not bite you. This is the principal difference between a dog and man.</h2>
                                    <span>- Mark Twain</span>
                                </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><span class="fa fa-angle-left"></span></div><div class="owl-next"><span class="fa fa-angle-right"></span></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- faq-section -->
    <section class="faq-section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="sec-title">
                            <div class="top-title">Recent Question Answers</div>
                            <h1>We’ll Take Care of your Pets Friends</h1>
                        </div>
                        <figure class="image-box wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;"><img src="images/resource/faq-image.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 faq-column">
                    <div class="faq-content">
                        <!--Accordion Box-->
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>How to take care of your pets</h4>
                                </div>
                                <div class="acc-content" style="display: none;">
                                    <div class="content">
                                        <div class="text">Aliquam erat volutpat In id ferme ntum augue ut pelle ntes que leo. Maecenas at arcu risus onec commodo ales ex scele risque laoreet nibh hendrerit idn aliquet magna nec lobort maxi etiam rhoncus leo a dolor ipsum conval.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>Get bathing in our vet bath</h4>
                                </div>
                                <div class="acc-content current" style="display: none;">
                                    <div class="content">
                                        <div class="text">Aliquam erat volutpat In id ferme ntum augue ut pelle ntes que leo. Maecenas at arcu risus onec commodo ales ex scele risque laoreet nibh hendrerit idn aliquet magna nec lobort maxi etiam rhoncus leo a dolor ipsum conval.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>Your pet is in good hands with us</h4>
                                </div>
                                <div class="acc-content" style="display: none;">
                                    <div class="content">
                                        <div class="text">Aliquam erat volutpat In id ferme ntum augue ut pelle ntes que leo. Maecenas at arcu risus onec commodo ales ex scele risque laoreet nibh hendrerit idn aliquet magna nec lobort maxi etiam rhoncus leo a dolor ipsum conval.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                    <h4>The best care takers of any kind of pets</h4>
                                </div>
                                <div class="acc-content" style="display: block;">
                                    <div class="content">
                                        <div class="text">Aliquam erat volutpat In id ferme ntum augue ut pelle ntes que leo. Maecenas at arcu risus onec commodo ales ex scele risque laoreet nibh hendrerit idn aliquet magna nec lobort maxi etiam rhoncus leo a dolor ipsum conval.</div>
                                    </div>
                                </div>
                            </li>
                        </ul><!--End Accordion Box-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->


    <!-- cta-section -->
    <section class="cta-section centred">
        <div class="container">
            <div class="inner-box">
                <h1>Poopet is here to Support Every<br>Aspect of your Pet’s Life</h1>
                <div class="text">Looking for proessional groomer or trainer?</div>
                <a href="contact.html" class="theme-btn">Contact with us</a>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- main-footer -->
    <footer class="main-footer gray-bg">
        <div class="footer-top">
            <div class="container">
                <div class="top-content clearfix">
                    <figure class="footer-logo"><a href="index.html"><img src="images/footer-logo.png" alt=""></a></figure>
                    <ul class="social-style-one">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <h3 class="widget-title">Explore</h3>
                            <div class="widget-content">
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <h3 class="widget-title">Links</h3>
                            <div class="widget-content">
                                <ul class="link">
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Location</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <h3 class="widget-title">Contact</h3>
                            <div class="widget-content">
                                <div class="text">660 Broklyn Street,<br>88 New York U.S.A
                                    <a href="mailto:example@gmail.com">example@gmail.com</a>
                                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                                </div>
                                <div class="phone"><a href="tel:+886668880000">666 888 0000</a></div>
                                <div class="phone"><a href="tel:+88333555999">333 555 999</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <h3 class="widget-title">About</h3>
                            <div class="widget-content">
                                <div class="text">Etiam rhoncu sit amet adip scing simply thin sed ipsum dolor sit amet adip dine scing not avilable in the martket lorem ipsum sem neque.</div>
                                <div class="subscribe-form">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required="">
                                            <button type="submit"><i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred black-bg">
            <div class="container">
                <div class="copyright">© Copyrights 2019. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>



    <!-- jequery plugins -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/bxslider.js"></script>
    <script src="js/appear.js"></script>

    <!-- main-js -->
    <script src="js/script.js"></script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Traductor de Google"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texto original</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Sugiere una traducción mejor</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>



    <div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body>
@endsection
