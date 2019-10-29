<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{  asset('iconos/logo-tayrona.png') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/imagenes.css') }}">
        <link rel="stylesheet" href="{{ asset('css/COMENTARIO.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <title>@yield('title','Tayrona Pet Shop')</title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/all.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </head>
    <body>
        <div class="container-modal">
            <div class="modal-img">
            </div>
            <img src="{{ asset('iconos/logo-tayrona.png') }}" alt=""  id="img-modal">
        </div>
        @include('nav.nav')
        @yield('content')
        @include("nav.footer")
    </body>
</html>
