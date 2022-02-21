<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

    <link href="{{asset('admin/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" />

</head>
<body>
<!-- BEGIN #app -->
<div id="app" class="app">
    @include('includes.admin.header')

    @include('includes.admin.sidebar')

<!-- BEGIN #content -->
<div id="content" class="app-content">
    <h1 class="page-header mb-3">
        Hi, Admin. <small>here's what's happening.</small>
    </h1>

    @yield('content')

</div>
<!-- END #content -->

<!-- BEGIN btn-scroll-top -->
<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
<!-- END btn-scroll-top -->
</div>
<!-- END #app -->

<!-- ================== BEGIN core-js ================== -->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
<!-- ================== END core-js ================== -->

<!-- ================== BEGIN page-js ================== -->
<script src="{{asset('admin/assets/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/js/demo/dashboard.demo.js')}}"></script>
<!-- required js -->
<script src="{{asset('admin/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js')}}"></script>

<script src="{{asset('admin/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>



<!-- ================== END page-js ================== -->
@yield('pagescript')
<!-- ================== BEGIN page-js ================== -->






<!-- ================== END page-js ================== -->

</body>

</html>
