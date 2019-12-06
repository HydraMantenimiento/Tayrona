<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','Tayrona Pet Shop')</title>

        <link href="{{ asset('css/login.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('iconos/logo-tayrona.png') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <!-- platilla productos-->
        <link rel="stylesheet" href="{{asset("desing/css/font-awesome.min.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/nouislider.min.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/slick.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/slick-theme.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/style.css")}}">
    </head>
    <body>
       <div class="container-modal">
            <div class="modal-img">
            </div>
            <img src="{{ asset('iconos/tayrona.png') }}" alt=""  id="img-modal">
        </div>
        @include('visitante.layouts.nav')
        @yield('content')
        @include("visitante.layouts.footer")

        <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}" ></script>
        <script src="{{ asset('js/jquery.mlens-1.7.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('assets/js/holder.min.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
