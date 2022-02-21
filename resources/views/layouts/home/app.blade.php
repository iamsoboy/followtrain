<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<!--
Name:      Prince Charles | Issac Olujide
Company:   BlvckPhenix Technologies Limited
Email:     info@blvckphenix.com
 -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title') </title>

    <link rel="apple-touch-icon" href="{{asset('home/images/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('home/images/favicon.png')}}" type="image/png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{asset('home/styles/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('home/styles/main.css')}}">
    <link rel="stylesheet" href="{{asset('home/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/styles/style.css')}}">

    <script src="{{asset('home/scripts/vendor/modernizr.js')}}"></script>
    @livewireStyles
</head>

<body class="home additional-bar">
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- header -->
<header class="header1">
    <div class="container-fluid">

        <!-- Hamburger nav area -->
        <div class="top">
            <ul class="left-contact">
                <li>want to talk with us<a href="tel:09055560002">080152222001</a></li>

            </ul>
            <!-- Hamburger nav menu -->
            <label class="menu-ribbon menu-toggle" for="menu-toggle-input">
                <span class="gt-Menu-dot-icon"></span> menu
            </label>
            <input id="menu-toggle-input" type="checkbox" />
            <nav class="menu-hamburger">
                <div class="menu-wraper">

                    <div class="menu-column">
                        <div class="menu-list">
                            <span class="close"> <img src="{{asset('home/images/icons/close.svg')}}" alt="img" /> </span>
                            <span class="dottedbg-pattern dottedtext blackdots transparent" data-text="go"> go </span>
                            <div class="logo-row">
                                <a href="{{route('index')}}"> <span class="gt-Menu-dot-icon"></span> Here for you</a>
                            </div>
                            <ul class="list">
                                <li><a href="{{route('index')}}">Book Train</a></li>
                                <li><a href="#">Book Ride</a></li>
                                <li><a href="#.html">Book Cargo</a></li>
                                <li><a href="#.html">Find Hotels </a></li>
                                <li><a href="{{route('about.index')}}">About</a></li>
                                <li><a href="{{route('contact.index')}}">Contact us</a></li>
                                <!--
                                <li><a href="{{route('services.index')}}">Services</a></li>
                                <li><a href="{{route('offers.index')}}">offers</a></li>
                                <li><a href="{{route('blog.index')}}">Blog</a></li>




                                <li><a href="cruisebooking.html">Cruise booking </a></li>

                                <li><a href="travel-planner.html">travel planner</a></li>
                                <li><a href="travelpackages.html">travel packages</a></li>
                                  <li><a href="partners.html">Partners</a></li>
                                  <li><a href="#">bookings</a></li>
                                   -->
                            </ul>

                            <ul class="footer-policies">
                                <li><a href="{{route('privacy')}}">Privacy & Policy</a></li>
                                <li><a href="{{route('terms')}}">Term and condition</a></li>
                            </ul>

                            <!-- Ring animation  -->
                            <div class="ring__container ring-num-6">
                                <a class="ring hover">
                    <span class="ring__circles">
                      <span>
                        <span>
                          <svg viewBox="0 0 100 100">
                            <defs>
                              <linearGradient id="circle1" gradientUnits="objectBoundingBox"
                                              gradientTransform="rotate(135 0.5 0.5)">
                                <stop offset="0%" stop-color="#fff"></stop>
                                <stop offset="100%" stop-color="#fff"></stop>
                              </linearGradient>
                            </defs>
                            <circle vector-effect="non-scaling-stroke" class="circle1" r="45" cx="50" cy="50"></circle>
                          </svg>
                        </span>
                      </span>
                    </span>

                                    <span>
                      <svg viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="circle2" gradientUnits="objectBoundingBox"
                                          gradientTransform="rotate(135 0.5 0.5)">
                            <stop offset="0%" stop-color="#fff"></stop>
                            <stop offset="100%" stop-color="#fff"></stop>
                          </linearGradient>
                        </defs>
                        <circle vector-effect="non-scaling-stroke" class="circle1" r="46" cx="50" cy="50"></circle>
                      </svg>
                    </span>

                                    <span>
                      <span>
                        <svg viewBox="0 0 100 100">
                          <defs>
                            <linearGradient id="circle3" gradientUnits="objectBoundingBox"
                                            gradientTransform="rotate(135 0.5 0.5)">
                              <stop offset="0%" stop-color="#fff"></stop>
                              <stop offset="100%" stop-color="#fff"></stop>
                            </linearGradient>
                          </defs>
                          <circle vector-effect="non-scaling-stroke" class="circle1" r="46" cx="50" cy="50"></circle>
                        </svg>
                      </span>
                    </span>

                                    <span>
                      <span>
                        <svg viewBox="0 0 100 100">
                          <defs>
                            <linearGradient id="circle4" gradientUnits="objectBoundingBox"
                                            gradientTransform="rotate(135 0.5 0.5)">
                              <stop offset="0%" stop-color="#fff"></stop>
                              <stop offset="100%" stop-color="#fff"></stop>
                            </linearGradient>
                          </defs>
                          <circle vector-effect="non-scaling-stroke" class="circle1" r="46" cx="50" cy="50"></circle>
                        </svg>
                      </span>
                    </span>

                                    <span>
                      <span>
                        <svg viewBox="0 0 100 100">
                          <defs>
                            <linearGradient id="circle5" gradientUnits="objectBoundingBox"
                                            gradientTransform="rotate(135 0.5 0.5)">
                              <stop offset="0%" stop-color="#fff"></stop>
                              <stop offset="100%" stop-color="#fff"></stop>
                            </linearGradient>
                          </defs>
                          <circle vector-effect="non-scaling-stroke" class="circle1" r="46" cx="50" cy="50"></circle>
                        </svg>
                      </span>
                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="menu-column menucart-wrap">
                        <div class="cart-box">
                            <div class="menu-column">
                                <div class="cart-list">
                                    <span class="close"> <img src="{{asset('home/images/icons/close.svg')}}" alt="img" /> </span>
                                    <div class="cart-item">
                                        <i class="gt-shopping-bag"></i> <span>4</span> 4 Item added in the cart
                                    </div>

                                    <div class="user-logon">
                                        <span class="user-pic"><img src="{{asset('home/images/author-pic1.jpg')}}" alt="img"> </span>
                                        <div class="user-name">
                                            <strong>Site Vistor</strong>
                                            <span>Travel tBlogger</span>
                                        </div>
                                        <a class="logout" href="javascript:void(0);">
                                            <img src="{{asset('home/images/icons/logout.svg')}}" alt="img">
                                            <span>logout </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        <!-- logo -->
        <div class="nav-row ctrl-wraper2 clearfix">
            <a class="logo" href="{{route('index')}}">
                <img src="{{asset('home/images/logo.png')}}" alt="logo" />
                <span class="animated-logo"></span>
            </a>
        </div>

    </div>
</header>

@yield('content')

@include('includes.footer')

<!-- Serving Since -->
<div class="estb">
    <span class="est-year">2020</span>
    <span class="estfrm">serving since</span>
</div>

<div class="top-left">
    <svg class="shapes1 layer1">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes1')}}" fill="url(#gradient1)" />
    </svg>
    <svg class="shapes2 layer2">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes2')}}" />
    </svg>
    <svg class="shapes3 layer3">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes3')}}" fill="url(#dots-4)" />
    </svg>
</div>

<span class="dottedline-left"></span>

<!-- svg -->
<svg height="0" width="0" xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute; top: 0px;">
    <defs>
        <linearGradient id="gradient1" x2="1" y2="1">
            <stop offset="15%" stop-color="#f47e08" />
            <stop offset="30%" stop-color="#f68e06" />
            <stop offset="100%" stop-color="#faa004" />
        </linearGradient>
    </defs>
</svg>

<svg height="0" width="0" xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute; ">
    <defs>
        <pattern id="dots-4" patternUnits="userSpaceOnUse" width=".5" height=".5">
            <image
                xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMCcgaGVpZ2h0PScxMCc+CiAgPHJlY3Qgd2lkdGg9JzEwJyBoZWlnaHQ9JzEwJyBmaWxsPSd3aGl0ZScgLz4KICA8cmVjdCB4PScwJyB5PScwJyB3aWR0aD0nNCcgaGVpZ2h0PSc0JyBmaWxsPSdibGFjaycgLz4KPC9zdmc+"
                x="0" y="0" width=".3" height=".3"> </image>
        </pattern>
    </defs>
</svg>
<!-- for footer dotted bg -->
<svg height="0" width="0" xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute; ">
    <defs>
        <pattern id="dots-5" patternUnits="userSpaceOnUse" width=".6" height=".6">
            <image
                xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMCcgaGVpZ2h0PScxMCc+CiAgPHJlY3Qgd2lkdGg9JzEwJyBoZWlnaHQ9JzEwJyBmaWxsPSd3aGl0ZScgLz4KICA8cmVjdCB4PScwJyB5PScwJyB3aWR0aD0nNCcgaGVpZ2h0PSc0JyBmaWxsPSdibGFjaycgLz4KPC9zdmc+"
                x="0" y="0" width=".6" height=".6"> </image>
        </pattern>
    </defs>
</svg>


<script src="{{asset('home/scripts/vendor.js')}}"></script>

<script src="{{asset('home/scripts/plugins.js')}}"></script>

@livewireScripts

<!-- water ripper js -->
<script src="{{asset('home/assets/script/jquery.ripples.js')}}"></script>

<!-- extra script files -->
<script src="{{asset('home/assets/script/jquery.flipster.min.js')}}"></script>
<!-- <script src="{{asset('home/assets/script/jquery.easeScroll.js')}}"></script> -->
<script src="{{asset('home/assets/script/pricerange.js')}}"></script>
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
<!-- <script src="assets/script/smooth-scroll.polyfills.min.js"></script> -->
<script src="{{asset('home/assets/script/car-script.js')}}"></script>
<script src="{{asset('home/assets/script/gratedeal.js')}}"></script>
<script src="{{asset('home/assets/script/particles.min.js')}}"></script>
<script src="{{asset('home/assets/script/carbon-components.js')}}"></script>
<script src="{{asset('home/assets/script/anime.min.js')}}"></script>

<script src="{{asset('home/scripts/main.js')}}"></script>

     
<!-- Start of Async Drift Code -->
<script>
    "use strict";

    ! function () {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide",
                "off", "on"
            ],
                t.factory = function (e) {
                    return function () {
                        var n = Array.prototype.slice.call(arguments);
                        return n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function (e) {
                t[e] = t.factory(e);
            }), t.load = function (t) {
                var e = 3e5,
                    n = Math.ceil(new Date() / e) * e,
                    o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src =
                    "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
            };
        }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('p6rs6yxhpmn6');

</script>
<!-- End of Async Drift Code -->


</body>

</html>
