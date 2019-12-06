<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="{{  asset('iconos/logo-tayrona.png') }}">
        <title>@yield("title","Tayrona Pet Shop")</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">



        <!-- platilla productos-->
        <link rel="stylesheet" href="{{asset("desing/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/font-awesome.min.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/nouislider.min.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/slick.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/slick-theme.css")}}">
        <link rel="stylesheet" href="{{asset("desing/css/style.css")}}">


        @yield("style")

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition skin-blue fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!--inicio header-->
            @include("theme/lteuser/headeruser")
            <!--inicio aside-->
            @include("theme/lteuser/asideuser")

           <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-body">
                                @if (isset($errors) && $errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                            @foreach ($errors->all() as $error)
                                                {{ $error }}
                                            @endforeach
                                    </div>
                                @endif

                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                            @foreach (session()->get('success') as $message)
                                              {{ $message }}
                                            @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @yield("content")
                </section>
            </div>

            <!--inicio footer -->
            @include("theme/lteuser/footeruser")
        </div>
        <!-- jQuery 3 -->
        <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <!-- Bootstrap 3.3.7 -->

        <!-- SlimScroll -->
        <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
        <!-- FastClick -->
        <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>


        <!-- platilla productos -->
        <script src="{{asset("desing/js/jquery.min.js")}}"></script>
        <script src="{{asset("desing/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("desing/js/slick.min.js")}}"></script>
        <script src="{{asset("desing/js/nouislider.min.js")}}"></script>
        <script src="{{asset("desing/js/jquery.zoom.min.js")}}"></script>
        <script src="{{asset("desing/js/main.js")}}"></script>
        @yield("script")

    </body>
</html>

