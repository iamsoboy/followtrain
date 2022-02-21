<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<!--
Name:      Prince Charles | Issac Olujide
Company:   BlvckPhenix Technologies Limited
Email:     info@blvckphenix.com
 -->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title') </title>

    <link rel="apple-touch-icon" href="{{asset('home/images/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('home/images/favicon.png')}}" type="image/ico">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{asset('home/styles/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('home/styles/main.css')}}">

    <script src="{{asset('home/scripts/vendor/modernizr.js')}}"></script>

</head>
@if (route('blog.index'))
    <body class="blognews">
@elseif (route('about.index'))
<body class="about-page">
@elseif (route('booking.create'))
<body class="flightbooking-list">
@elseif (route('cart.index'))
<body class="seatbooking">
@else
    <body class="blogdtls">
@endif

<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="innerwrapper">

        @include('includes.header')

        @include('includes.mainmenu')

        <!-- main content area -->

        @yield('content')

        <!-- end main content area -->

        @include('includes.footer')

    </div>

<div class="estb">
    <span class="est-year">2020</span>
    <span class="estfrm">serving since</span>
</div>

<div class="top-left">
    <svg class="shapes1 layer1 primary-gradient ">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes1')}}" fill="url(#gradient1)" />
    </svg>
    <svg class="shapes2 layer2 ">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes2')}}" />
    </svg>
    <svg class="shapes3 layer3">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes3')}}" fill="url(#dots-4)" />
    </svg>
</div>

<!-- svg -->
<svg height="0" width="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <linearGradient id="gradient1" x2="1" y2="1">
            <stop offset="15%" stop-color="#f47e08" />
            <stop offset="30%" stop-color="#f68e06" />
            <stop offset="100%" stop-color="#faa004" />
        </linearGradient>
    </defs>
</svg>

<svg height="0" width="0" xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute; ">
    <defs> <pattern id="dots-4" patternUnits="userSpaceOnUse" width=".5" height=".5"> <image xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMCcgaGVpZ2h0PScxMCc+CiAgPHJlY3Qgd2lkdGg9JzEwJyBoZWlnaHQ9JzEwJyBmaWxsPSd3aGl0ZScgLz4KICA8cmVjdCB4PScwJyB5PScwJyB3aWR0aD0nNCcgaGVpZ2h0PSc0JyBmaWxsPSdibGFjaycgLz4KPC9zdmc+" x="0" y="0" width=".3" height=".3"> </image> </pattern> </defs>
</svg>

<script src="{{asset('home/scripts/vendor.js')}}"></script>

<!-- <script src="assets/script/greensock.js"></script> -->


<script src="{{asset('home/scripts/plugins.js')}}"></script>

<!-- water ripper js -->
<script src="{{asset('home/assets/script/jquery.ripples.js')}}"></script>

<!-- extra script files -->
<script src="{{asset('home/assets/script/jquery.flipster.min.js')}}"></script>
<script src="{{asset('home/assets/script/jquery.easeScroll.js')}}"></script>
<script src="{{asset('home/assets/script/pricerange.js')}}"></script>
<!-- <script src="home/assets/script/TweenMax.min.js"></script> -->
<script src="{{asset('home/assets/script/ScrollToPlugin.min.js')}}"></script>

<!-- pb calendar -->
<script src="{{asset('home/assets/script/pb.calendar.js')}}"></script>
<script src="{{asset('home/assets/script/moment.min.js')}}"></script>
<script src="{{asset('home/assets/script/materialize.js')}}"></script>
<script src="{{asset('home/assets/script/mosaic.js')}}"></script>
<script src="{{asset('home/assets/script/swiper.js')}}"></script>

<!-- for dotted svg line -->
<script src="{{asset('home/assets/script/Draggable.min.js')}}"></script>
<script src="{{asset('home/assets/script/ThrowPropsPlugin.min.js')}}"></script>
<script src="{{asset('home/assets/script/DrawSVGPlugin.min.js')}}"></script>
<script src="{{asset('home/assets/script/AnticipateEase.min.js')}}"></script>
<script src="{{asset('home/assets/script/MorphSVGPlugin.min.js')}}"></script>

<script src="{{asset('home/assets/script/GSDevTools.min.js')}}"></script>
<script src="{{asset('home/assets/script/moment-with-locales.min.js')}}"></script>
<script src="{{asset('home/assets/script/rescalendar.min.js')}}"></script>

<!-- smooth page scroll script -->
<script src="{{asset('home/assets/script/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('home/assets/script/car-script.js')}}"></script>
<script src="{{asset('home/assets/script/gratedeal.js')}}"></script>
<script src="{{asset('home/assets/script/particles.min.js')}}"></script>
<script src="{{asset('home/assets/script/carbon-components.js')}}"></script>
<script src="{{asset('home/assets/script/anime.min.js')}}"></script>

<script src="{{asset('home/scripts/main.js')}}"></script>
</body>

</html>
