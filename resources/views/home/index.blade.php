@extends('layouts.home.app')

@section('title', 'Home')

@section('content')

    <!-- banner -->
    <div class="fixedbanner-area clearfix" >
        <div class="container-fluid" >

            <div class="ctrl-wraper2">

                <div class="bannertext">
                    <h1 class="rellax" data-rellax-speed="3" data-rellax-percentage="0.3">

                        <strong>Here  </strong>
                        <strong>For <span> You</span></strong>
                        <!-- <span class="banner-innertext rellax" data-rellax-speed="1"
                        data-rellax-percentage="0.35" data-title="lets go"></span> -->
                    </h1>


                    <span class="rellax" data-rellax-speed="2" data-rellax-percentage="0.1">...book Train Tickets across Nigeria from the comfort of your home</span>
                </div>
            </div>
        </div>
    </div>

    <div class="train-ticket-booking">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

            @livewire('places')

            </div>
        </div>
    </div>

    <div class="travelspots-sec">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="travelspots">
                    <div class="left">
                        <h3>Instant Train Tickets</h3>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- <svg class="hidden" hidden>
      <symbol id="icon-arrow-left" viewBox="0 0 32 32">
        <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
      </symbol>
      <symbol id="icon-arrow-right" viewBox="0 0 32 32">
        <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
      </symbol>
    </svg> -->

    <div class="travel-store childheader-ctrl">
        <div class="container-fluid">

            <div class="slider__warpper travel-store-slider">
                <!-- slider item  -->
                <div class="flex__container flex--active" data-slide="1">

                    <div class="flex__item flex__item--left">
                        <div class="flex__content">
                            <h3 style="font-weight: 900; font-size: 80px; color: #000;">Coming Soon </h3>
                            <h3 style="font-weight: 700; font-size: 48px; color: #000;">Lagos to Abuja<br> </h3>
                        </div>
                    </div>
                    <div class="flex__item flex__item--right">
                        <img class="model" src="{{asset('home/images/coming-soon1.png')}}" alt="img" />
                    </div>

                </div>

                <!-- slider item  -->
                <div class="flex__container flex--piplup animate--start" data-slide="2">
                    <div class="flex__item flex__item--left">
                        <div class="flex__content">
                            <h3 style="font-weight: 900; font-size: 80px; color: #000;">Coming Soon </h3>
                            <h3 style="font-weight: 700; font-size: 48px; color: #000;">Lagos to Ibadan<br> </h3>
                        </div>
                    </div>
                    <div class="flex__item flex__item--right">
                        <img class="model" src="{{asset('home/images/coming-soon2.png')}}" alt="img" />
                    </div>

                </div>


                <a href="javascript:void(0);" class="btn-slide-pvs" id="pre">
                    <img src="{{asset('home/images/slider-arrow-left.svg')}}">
                </a>
                <a href="javascript:void(0);" class="btn-slide-nxt" id="next">
                    <img src="{{asset('home/images/slider-arrow-left.svg')}}">
                </a>
            </div>
        </div>

        <!-- <div class="slider__navi">
          <a href="#" class="slide-nav active" data-slide="1">pikachu</a>
          <a href="#" class="slide-nav" data-slide="2">piplup</a>
          <a href="#" class="slide-nav" data-slide="3">blaziken</a>
        </div> -->



    </div>

    <div class="travel-blog childheader-ctrl">
        <div class="container-fluid">
            <div class="ctrl-wraper2">
                <div class="sec-header">
                    <div class="left">
                        <h2>Our Destinations</h2>
                    </div>
                </div>

                <div class="tb-slider">
                    <svg id="icons" xmlns="http://www.w3.org/2000/svg">
                        <symbol id="icon-arrow" viewBox="0 0 476.213 476.213" >
                            <polygon fill="inherit" points="347.5,324.393 253.353,418.541 253.353,0 223.353,0 223.353,419.033 128.713,324.393 107.5,345.607
                    238.107,476.213 368.713,345.606 "/>
                        </symbol>
                    </svg>

                    <div class="slider-content">
                        <div class="nav-wrapper">
                            <div class="nav-arrows">
                                <div class="nav-up">
                                    <svg id="arrow-up">
                                        <use xlink:href="#icon-arrow"></use>
                                    </svg>
                                </div>
                                <div class="nav-down">
                                    <svg id="arrow-down">
                                        <use xlink:href="#icon-arrow"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="slider-wrapper">
                            <div class="slider-container">

                                <div class="slide active" data-order="1">
                                    <div class="slide-content txt">
                                        <div class="txt-wrapper">
                                            <p><strong>Kubwa, Abuja</strong> - located at Arab Road, Kubwa - Abuja. Best for residents/travelers at the out-skirt of the the municipal area of Abuja. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="{{asset('home/images/destination-kubwa.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide" data-order="2">
                                    <div class="slide-content txt">
                                        <div class="txt-wrapper">
                                            <p><strong>Idu, Abuja</strong> - located along Airport Junction - Abuja. Best for residents/travelers in the municipal area of the city of Abuja. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="{{asset('home/images/destination-idu.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide " data-order="3">
                                    <div class="slide-content txt">
                                        <div class="txt-wrapper">
                                            <p><strong>Rigasa, Kaduna</strong> - located at Rigasa, just a few miles from Kawo, Kaduna. Best for residents/travelers in the city of Kaduna. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="{{asset('home/images/destination-rigasa.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide " data-order="4">
                                    <div class="slide-content txt">
                                        <div class="txt-wrapper">
                                            <p><strong>Asham, Kaduna</strong> - located at Asham, Kaduna. Best for residents/travelers at the out-skirt of the city of Kaduna. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="{{asset('home/images/destination-asham.jpg')}}" alt="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- flying elements -->
        <span class="travel-blog-bgdots rellax" data-rellax-speed="7"
              data-rellax-percentage="1"></span>
        <span class="travel-blog-gotxt rellax" data-title="blog" data-rellax-speed="-3"
              data-rellax-percentage="-1"></span>

    </div>


@endsection
