<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="{{  asset('iconos/logo-tayrona.png') }}">
        <title>@yield("title","Tayrona Pet Shop")</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
>
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">

        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
        <script src="{{ asset('js/ckeditor.js') }}" ></script>
        <script src="{{ asset('js/sample.js') }}" ></script>


        @yield("style")

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition skin-blue fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!--inicio header-->
            @include("theme/$theme/header")
            <!--inicio aside-->
            @include("theme/$theme/aside")

            <div class="content-wrapper">
                <section class="content">
                    @yield("content")
                </section>
            </div>
            <!--inicio footer -->
            @include("theme/$theme/footer")
        </div>

        <!-- jQuery 3 -->
        <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}/"></script>
        <!-- SlimScroll -->
        <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
        <!-- FastClick -->
        <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"></script>


        <script src="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.js"></script>





        <script>

            $(document).ready( function () {


                    $('.table').DataTable( {

                        "language": {
                            "decimal":        ".",
                            "emptyTable":     "No hay datos para mostrar",
                            "info":           "del _START_ al _END_ (_TOTAL_ total)",
                            "infoEmpty":      "del 0 al 0 (0 total)",
                            "infoFiltered":   "(filtrado de todas las _MAX_ entradas)",
                            "infoPostFix":    "",
                            "thousands":      "'",
                            "lengthMenu":     "Mostrar _MENU_ entradas",
                            "loadingRecords": "Cargando...",
                            "processing":     "Procesando...",
                            "search":         "Buscar:",
                            "zeroRecords":    "No hay resultados",
                            "paginate": {
                                "first":      "Primero",
                                "last":       "Último",
                                "next":       "Siguiente",
                                "previous":   "Anterior"
                            },
                            "aria": {
                                "sortAscending":  ": ordenar de manera Ascendente",
                                "sortDescending": ": ordenar de manera Descendente ",
                            }
                        }

                    } );


            });

            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

            initSample();



        </script>


        @yield("script")

    </body>
</html>

