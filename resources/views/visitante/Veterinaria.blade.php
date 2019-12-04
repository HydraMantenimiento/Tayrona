@extends('visitante.layouts.layout')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/visitante/veterinaria.css') }}">

<body class="boxed_wrapper">
<!-- page-title -->
<section class="page-title centred" style="background-image:url({{ asset('imagenes/page-title.jpg') }});">
    <div class="container">
        <h1>CONTROL DE SALUD</h1>
    </div>
</section>
<!-- page-title end -->


<!-- page-info -
<section class="page-info">
    <div class="container">
        <div class="content-box clearfix">
            <ul class="bread-crumb">
                <li><a href="{{ route('inicio') }}">Home</a></li>
                <li>Servicios</li>
            </ul>
        </div>
    </div>
</section>->
<!-- page-info -->


<!-- service-details -->
<section class="sidebar-page-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details">
                    <div class="inner-box">
                        <div class="content-style-one">
                            <figure class="image-box"><img src="{{asset('imagenes/service-details-1.jpg')}}" alt=""></figure>
                            <h2>Chequeos de salud regulares</h2>
                            <div class="text">
                                <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor erat lectus, euismod posuere erat aliquet quis. Etiam sit amet nunc sed quam dapibus non efficitur at in metus. Nam et metus eget arcu volutpat rhoncus et eu mi. Donec id tellus sed nulla faucibus aliquam.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi est nibh, hendrerit bibendum enim eu, vehicula porta nisi. Donec at ligula sed turpis mollis commodo in convallis magna. Aliquam a mi mauris. Maecenas volutpat dui vel mauris tempus placerat. Proin blandit eu tortor vel pellentesque. Fusce laoreet ipsum lorem, at aliquet ipsum varius tempus.</p>
                            </div>
                        </div>
                        <div class="content-style-two">
                            <h3>Estándares de seguridad incluidos</h3>
                            <div class="text">
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere id cubilia Curae; Maecenas nec tellus vehicula lorem ultricies condimentum. Sed consectetur urna eget et finibus posuere. Sed tempus orci erat, sit amet pretium lorem tincidunt eget. Maecenas porta risus on neque rhoncus, sed pharetra diam vulputate. Nunc in ligula vel sem porttitor consequat. Ut porttitor non ante at bibendum. Praesent posuere turpis lacus, vel tempor felis eleifend eu. Morbi velit odio, pulvinar vel ligula donec, consectetur faucibus elit.</p>
                            </div>
                            <div class="image-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image">
                                            <img src="{{asset('imagenes/service-details-2.jpg')}}" alt="">
                                            <div class="icon-box"><a href="{{asset('imagenes/service-details-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                        </figure>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image">
                                            <img src="{{asset('imagenes/service-details-3.jpg')}}" alt="">
                                            <div class="icon-box"><a href="{{asset('imagenes/service-details-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-style-three">
                            <h3>Por qué somos diferentes</h3>
                            <ul class="list">
                                <li>Somos un centro de mascotas totalmente asegurado a nivel nacional. </li>
                                <li>Todo el trabajo está respaldado por nuestra exclusiva "Garantía sin rayas". </li>
                                <li>Ofrecemos múltiples servicios para cuidar a sus mascotas. </li>
                                <li>Nuestros servicios son más asequibles de lo que piensas. </li>                                                                                            
                            </ul>
                            <div class="text">
                                <p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry has been the ndustry standard dummy text ever sincer they llam id condimentum purus In non ex at ligula fringilla bortis. Ut et mauris auctor, aliquet nulla sed, aliquam mauris. Vestibulum sed malesuada dolor. Integer fringilla odio a dolor aliquet, eu euismod lectus porttitor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar sidebar">
                    <div class="sidebar-category sidebar-widget gray-bg wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible;">
                        <h3 class="sidebar-title">Servicios</h3>
                        <div class="widget-content">
                            <ul class="category-list">
                                <li class="active">CONSULTA VETERINARIA</li>
                                <li >PESO, SIGNOS VITALES</li>
                                <li>ECOGRAFÍAS RADIOGRAFÍAS </li> <!--&amp;  -->
                                <li>REVISIÓN DE ESTRUCTURAS</li>
                                <li>EXÁMENES DE LABORATORIO</li>
                                <li>VACUNACIÓN</li>
                                <li>PROFILAXIS EN CANINOS &amp; FELINOS</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-appointment sidebar-widget wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible;">
                        <div class="widget-content centred">
                            <div class="text">Contactanos</div>
                            <h1>Carrera 19 No 18-43 Sur Restrepo
                                TEL: 2392673</h1>
                            <!--<a href="contact.html">Learn More</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Scroll to top
<button class="scroll-top scroll-to-target open" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>
-->



</body>
@endsection
