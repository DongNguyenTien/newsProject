<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | EBaoHiem</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('admin-lte/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin-lte/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
<!--
    <link rel="stylesheet" href="{{ asset('admin-lte/ionicons/css/ionicons.min.css') }}">
-->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/skins/skin-yellow.min.css') }}">

<!--
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables/dataTables.bootstrap.min.css') }}">
-->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/custom.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--datatable-->
    <link rel="stylesheet" href="{{asset('admin-lte/plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            @component('components.admin_header')@endcomponent
        </header>
        <aside class="main-sidebar">
            @component('components.admin_main_sidebar')@endcomponent
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            @component('components.admin_footer')@endcomponent
        </footer>
        <aside class="control-sidebar control-sidebar-dark">

        </aside>
    </div>
    <!-- jQuery 3 -->
    <script src="{{ asset('admin-lte/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('admin-lte/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/jqueryValidation/jquery.validate.min.js') }}"></script>

<!--
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
-->

    <!-- Select 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin-lte/dist/js/custom.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('admin-lte/dist/css/bootstrap-datetimepicker.min.css') }}" />
    <script src="{{ URL::asset('admin-lte/dist/js/moment-with-locales.min.js') }}"></script>
    <script src="{{ URL::asset('admin-lte/dist/js/bootstrap-datetimepicker.min.js') }}"></script>
    @yield('scripts')

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. -->
</body>
</html>
