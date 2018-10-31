<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | @yield('content-title', 'Inicio')</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="/assets/load/load.css">
    <link rel="stylesheet" href="/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    {{--<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">--}}

    <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

@yield('styles')

<!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="/assets/toastr/toastr.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet">
    <!-- sweet alert css-->
    <link rel="stylesheet" href="/assets/sweet-alert/sweetalert2.min.css">

    <link rel="stylesheet" href="/assets/custom.css">


</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="loading" id="loading">
    <div class="load-box">
        <div class="spinner"></div>
        <div class="pulsate" style="color: white;">Espere un momento por favor...</div>
    </div>
</div>
<div class="wrapper">

@include('template.layout.header')

<!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
    @include('template.layout.sidebar')
    <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                @yield('content-title', 'Nueva Página')
                <small> @yield('content-subtitle', 'Nueva Página')</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
                @yield('breadcrumb')
            </ol>
        </section>
        <section class="content">


            @yield('content')


        </section>

    </div>


    @include('template.layout.footer')

</div>


<!-- jQuery 3 -->

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="/assets/toastr/toastr.min.js"></script>
<!-- sweet alert -->
<script src="/assets/sweet-alert/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="/assets/required/helper.js"></script>


@yield('scripts')

</body>
</html>
