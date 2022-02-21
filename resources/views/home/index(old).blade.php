@extends('layouts.home.app')

@section('title', 'Home')

@section('content')
    <!-- banner -->
    <div class="fixedbanner-area clearfix">
        <div class="container-fluid">

            <div class="ctrl-wraper2">
                <div class="bannertext">
                    <h1 class="rellax" data-rellax-speed="3" data-rellax-percentage="0.3">
                        <strong>lets<span> go</span></strong>
                        <strong>there</strong>

                        <!-- <span class="banner-innertext rellax" data-rellax-speed="1"
                        data-rellax-percentage="0.35" data-title="lets go"></span> -->
                    </h1>

                    <span class="rellax" data-rellax-speed="2" data-rellax-percentage="0.1">Book train tickets from the comfort of your home</span>
                </div>

                <div class="parallax-dots">
                    <ul>
                        <li><a data-scroll href="#trainbooking">Book Train Tickets</a></li>
                        <li><a data-scroll href="#hotelbooking">book ride</a></li>
                        <li><a data-scroll href="#cabbooking">book cargo</a></li>
                        <li><a data-scroll href="#cabbooking">find hotels</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Train Booking -->
    <div class="bookingsec sec-trainbooking" id="trainbooking">
        <div class="container-fluid">
            <div class="ctrl-wraper2">
                <span class="animated-gt-train section-icon rellax" data-rellax-speed="2" data-rellax-percentage="0.1"></span>

                <img class="secmain-img rellax" data-rellax-speed="3" data-rellax-percentage=".9" src="{{asset('home/images/train-LGT.gif')}}"
                     alt="train" />
                <!-- <span class="animatiomn-train"><img src="./images/train-anim/" /></span> -->

                <div class="ctrl-inner-wraper">
                    <div class="cntbox">
                        <h1 class="sec-heading ">train ticket <br /> booking</h1>
                        <span class="sec-subheading ">Experience the most hassle free train booking <br />and get great deals with
              reasonable rates</span>

                    <!--<div class="deals-row">
                            <div class="leftbox">
                                <h2 class="">Great deals <br /> and great offers</h2>
                                <p class="">with reasonable rates in top airlince <br /> and destinations</p>

                                <span class="visitnow">Get something more!</span>
                                <a href="trainbooking.html" class="btn btn-visit" data-os-animation="fadeInRight"><span>Visit
                    Now</span></a>

                            </div>

                            <div class="partners">
                                <span data-os-animation="zoomIn"><img src="{{asset('home/images/partners1.png')}}" alt="partners" /></span>
                                <span data-os-animation="zoomIn"><img src="{{asset('home/images/partners2.png')}}" alt="partners" /></span>
                            </div>

                        </div> -->

                    </div>
                    <div class="formbox">
                        <div class="pnl-header" data-os-animation="fadeInUp" data-os-animation-delay="1s">
                            <!--<ul class="trip-switch default">
                                <li class="oneway active"><span>1 way</span></li>
                                <li class="roundtrip"><span>Round trip</span></li>
                            </ul> -->
                            <p> instant train booking system <br />for abuja and kaduna trips </p>
                        </div>

                        <div class="pnl-body">
                            <form method="post" action="{{ route('booking.create') }}">
                                @csrf
                                <div class="form-field icon-location srcby-counter ">
                                    <label>form</label>
                                    <select class="inputype1 @error('from') is-invalid @enderror" name="from">
                                        <!--<option value="" disabled selected>Kubwa, Abuja</option>-->
                                        @forelse($locations as $location)
                                            <option value="{{$location->name}}">{{$location->name}}</option>
                                        @empty
                                            <option value="" disabled selected>Not Available</option>
                                        @endforelse
                                    </select>
                                    @error('from')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-field icon-location srcby-counter ">
                                    <label>to</label>
                                    <select class="inputype1 @error('from') is-invalid @enderror" name="to">
                                        <!--<option value="" disabled selected>Asham, Kaduna</option>-->
                                        @forelse($locations as $location)
                                        <option value="{{$location->name}}">{{$location->name}}</option>
                                        @empty
                                        <option value="" disabled selected>Not Available</option>
                                        @endforelse
                                    </select>
                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div data-date-picker data-date-picker-type="single"
                                     class="form-field icon-calendar bx--date-picker bx--date-picker--single ">
                                    <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                                    <label>departure</label>
                                    <input type="text" id="date-picker-6" class="inputype1 bx--date-picker__input form-control @error('departure_date') is-invalid @enderror"
                                           pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" name="departure_date" data-date-picker-input />
                                    @error('departure_date')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!--<div data-date-picker data-date-picker-type="single"
                                     class="form-field icon-calendar bx--date-picker bx--date-picker--single ">
                                    <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                                    <label>return</label>
                                    <input type="text" id="date-picker-7" class="inputype1 bx--date-picker__input"
                                           pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" data-date-picker-input />
                                </div> -->

                                <div class="form-field icon-passenger srcby-counter ">
                                    <label>Passengers</label>
                                    <select class="inputype1 @error('passenger') is-invalid @enderror" name="passenger">
                                        <option value="" disabled selected>2 adult </option>
                                        <option value="1">1 adult </option>
                                        <option value="2">2 adult</option>
                                        <option value="3">3 adult</option>
                                        <option value="4">4 adult</option>
                                        <option value="5">5 adult </option>
                                        <option value="6">6 adult</option>
                                    </select>
                                    @error('passenger')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-field icon-catagory srcby-counter ">
                                    <label>class</label>
                                    <select class="inputype1 @error('ticket_class') is-invalid @enderror" name="ticket_class">
                                        @foreach($tickets as $ticket)
                                        <option value="{{$ticket->ticket_class}}">{{$ticket->ticket_class}}</option>
                                        @endforeach
                                    </select>
                                    @error('ticket_class')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="btn-group">
                                    <div class="btn-avdsrc"><a href="#"><span>advance search</span></a></div>
                                    <button class="btn btn-trpsrc" data-os-animation="fadeInRight">search now</button>
                                </div>
                            </form>

                        </div>

                        <span class="gt-shape" data-os-animation="zoomIn"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Train Booking -->

    <!-- Destination Template -->

    <div class="destination-sec">
        <div class="container-fluid">
            <!-- jay -->
            <div class="ctrl-wraper2">

                <div class="top-destination">
                    <div class="product-img explore-place">

                        <div class="product-img__item" id="img1">
                            <img src="{{asset('home/images/destination-kubwa.jpg')}}" alt="star wars" class="product-img__img">
                            <a href="#" class="product-img__bottom">
                                <div class="product-img__cart">
                                    <span>explore!</span> Kubwa Abuja
                                </div>
                                <img src="{{asset('home/images/arwith-border.png')}}" alt="" />
                            </a>
                        </div>

                        <div class="product-img__item" id="img2">
                            <img src="{{asset('home/images/destination-rigasa.jpg')}}" alt="star wars" class="product-img__img">
                            <div class="product-img__bottom">
                                <a href="#" class="product-img__cart">
                                    <span>explore!</span> Rigasa Kaduna
                                </a>
                                <img src="{{asset('home/images/arwith-border.png')}}" alt="" />
                            </div>
                        </div>

                        <div class="product-img__item" id="img3">
                            <img src="{{asset('home/images/destination-idu.jpg')}}" alt="star wars" class="product-img__img">
                            <div class="product-img__bottom">
                                <a href="#" class="product-img__cart">
                                    <span>explore!</span> Idu Abuja
                                </a>
                                <img src="{{asset('home/images/arwith-border.png')}}" alt="" />
                            </div>
                        </div>

                        <div class="product-img__item" id="img4">
                            <img src="{{asset('home/images/destination-asham.jpg')}}" alt="star wars" class="product-img__img">
                            <div class="product-img__bottom">
                                <a href="#" class="product-img__cart">
                                    <span>explore!</span> Asham, Kaduna
                                </a>
                                <img src="{{asset('home/images/arwith-border.png')}}" alt="" />
                            </div>
                        </div>

                    </div>

                    <div class="product-slider">
                        <div class="product-slider__wrp swiper-wrapper">

                            <div class="product-slider__item swiper-slide" data-target="img1">
                                <div class="product-slider__card">
                                    <div class="product-slider__content">

                                        <strong class="product-slider__title">OUR </strong>
                                        <h3 class="product-slider__price">desti nations</h3>

                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">more happening</div>
                                                <p class="product-inf__title">
                                                    <strong>Kubwa, Abuja Station</strong> located at Arab Road, Kubwa - Abuja. Best for residents/travelers at the out-skirt of the the municipal area of Abuja.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-slider__item swiper-slide" data-target="img2">
                                <div class="product-slider__card">
                                    <div class="product-slider__content">

                                        <strong class="product-slider__title">OUR </strong>
                                        <h3 class="product-slider__price">Adven ture </h3>

                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">more happening</div>
                                                <p class="product-inf__title">
                                                    <strong>Idu Station</strong>  located along Airport Junction - Abuja. Best for residents/travelers in the municipal area of the city of Abuja.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="product-slider__item swiper-slide" data-target="img3">
                                <div class="product-slider__card">
                                    <div class="product-slider__content">

                                        <strong class="product-slider__title">OUR</strong>
                                        <h3 class="product-slider__price">desti nations</h3>

                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">more happening</div>
                                                <p class="product-inf__title">
                                                    <strong>Rigasa Station</strong> located at Rigasa, just a few miles from Kawo, Kaduna. Best for residents/travelers in the city of Kaduna.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="product-slider__item swiper-slide" data-target="img4">
                                <div class="product-slider__card">
                                    <div class="product-slider__content">

                                        <strong class="product-slider__title">OUR </strong>
                                        <h3 class="product-slider__price">desti nations</h3>

                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">more happening</div>
                                                <p class="product-inf__title">
                                                    <strong>Asham Station</strong> located at Asham, Kaduna. Best for residents/travelers at the out-skirt of the city of Kaduna.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="counter">
                        <span class="current-item">01</span>
                        <span class="tot-item"> </span>
                    </div>
                </div>

            </div>

        </div>

        <span class="destination-sec-bgdots rellax" data-rellax-speed="-4"
              data-rellax-percentage="1"></span>


    </div>

    <!-- End Destination -->
<!--
    <div class="travel-store childheader-ctrl">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="sec-header">
                    <div class="left">
                        <span>Shop now before</span>
                        <h2>travel store</h2>
                    </div>
                    <div class="right">
                        <p>visit our <a href="offers.html"> online store</a></p>
                    </div>
                </div>

            </div>
        </div>
-->
       <!-- <div class="slider__warpper travel-store-slider"> -->
            <!-- slider item
            <div class="flex__container flex--active" data-slide="1">

                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <h3>CANVAS HIKING TRAVEL <br> MILITARY BACKPACK </h3>
                        <p>vintage canvas hiking travel military backpack messenger tote bag</p>
                        <ul class="travel-accessories">
                            <li><span><img src="{{asset('home/images/travel-bag1.png')}}" alt="img" /> </span></li>
                            <li><span><img src="{{asset('home/images/travel-bag2.png')}}" alt="img" /> </span></li>
                            <li><span><img src="{{asset('home/images/travel-bag1.png')}}" alt="img" /> </span></li>
                        </ul>
                        <strong class="price">$299.00<del>$375.00</del></strong>
                        <a class="btn-shopnow" href="travelpackages.html">shop now</a>
                    </div>
                    <span class="bg-counter">01</span>
                </div>
                <div class="flex__item flex__item--right">
                    <span class="bg-counter">01</span>
                    <img class="model" src="{{asset('home/images/travelslider-model1.png')}}" alt="img" />
                </div>


            </div> -->
            <!-- slider item
            <div class="flex__container flex--piplup animate--start" data-slide="2">
                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <h3>CANVAS HIKING TRAVEL <br> MILITARY BACKPACK </h3>
                        <p>vintage canvas hiking travel military backpack messenger tote bag</p>
                        <ul class="travel-accessories">
                            <li><span><img src="{{asset('home/images/travel-bag1.png')}}" alt="img" /> </span></li>
                            <li><span><img src="{{asset('home/images/travel-bag2.png')}}" alt="img" /> </span></li>
                            <li><span><img src="{{asset('home/images/travel-bag1.png')}}" alt="img" /> </span></li>
                        </ul>
                        <strong class="price">$299.00<del>$375.00</del></strong>
                        <a class="btn-shopnow" href="travelpackages.html">shop now</a>
                    </div>
                    <span class="bg-counter">02</span>
                </div>
                <div class="flex__item flex__item--right">
                    <span class="bg-counter">02</span>
                    <img class="model" src="{{asset('home/images/travelslider-model1.png')}}"  alt="img" />
                </div>

            </div> -->
            <!-- slider item
            <div class="flex__container flex--blaziken animate--start" data-slide="3">
                <div class="flex__item flex__item--left">
                    <div class="flex__content">
                        <h3>CANVAS HIKING TRAVEL <br> MILITARY BACKPACK </h3>
                        <p>vintage canvas hiking travel military backpack messenger tote bag</p>
                        <ul class="travel-accessories">
                            <li><span><img src="{{asset('home/images/travel-bag1.png')}}" alt="img" /> </span></li>
                            <li><span><img src="{{asset('home/images/travel-bag2.png')}}" alt="img" /> </span></li>
                            <li><span><img src="{{asset('home/images/travel-bag1.png')}}" alt="img" /> </span></li>
                        </ul>
                        <strong class="price">$299.00<del>$375.00</del></strong>
                        <a class="btn-shopnow" href="travelpackages.html">shop now</a>
                    </div>
                    <span class="bg-counter">03</span>
                </div>
                <div class="flex__item flex__item--right">
                    <span class="bg-counter">03</span>
                    <img class="model" src="{{asset('home/images/travelslider-model1.png')}}"  alt="img" />
                </div>

            </div>


            <a href="javascript:void(0);" class="btn-slide-pvs" id="pre">
                <img src="{{asset('home/images/slider-arrow-left.svg')}}">
            </a>
            <a href="javascript:void(0);" class="btn-slide-nxt" id="next">
                <img src="{{asset('home/images/slider-arrow-left.svg')}}">
            </a>
        </div> -->

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
                        <span>Get travel knowledge</span>
                        <h2>Read blog</h2>
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

                                        <div class="copy author">
                                            <span class="author-pic"><img src="{{asset('home/images/author-pic1.jpg')}}" alt="img" /></span>
                                            <strong>Heather Harper</strong>
                                            <span> 1 Traveler</span>
                                        </div>
                                        <div class="txt-wrapper">
                                            <span class="copy">Traveler</span>
                                            <p><strong>Adventure</strong> - These book titles will tend to fit epic tales of grand journeys best. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="{{asset('home/images/travel-blog1.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide" data-order="2">
                                    <div class="slide-content txt">
                                        <div class="copy author">
                                            <span class="author-pic"><img src="{{asset('home/images/author.jpg')}}" alt="img" /></span>
                                            <strong>Heather Harper</strong>
                                            <span>2 Traveler</span>
                                        </div>
                                        <div class="txt-wrapper">
                                            <span class="copy">Traveler</span>
                                            <p><strong>New York City</strong> - comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="../../s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide2.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide " data-order="3">
                                    <div class="slide-content txt">

                                        <div class="copy author">
                                            <span class="author-pic"><img src="{{asset('home/images/author-pic1.jpg')}}" alt="img" /></span>
                                            <strong>Heather Harper</strong>
                                            <span>Traveler</span>
                                        </div>
                                        <div class="txt-wrapper">
                                            <span class="copy">Traveler</span>
                                            <p><strong>Adventure</strong> - These book titles will tend to fit epic tales of grand journeys best. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="../../s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide3.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide " data-order="4">
                                    <div class="slide-content txt">

                                        <div class="copy author">
                                            <span class="author-pic"><img src="{{asset('home/images/author-pic1.jpg')}}" alt="img" /></span>
                                            <strong>Heather Harper</strong>
                                            <span>Traveler</span>
                                        </div>
                                        <div class="txt-wrapper">
                                            <span class="copy">Traveler</span>
                                            <p><strong>Adventure</strong> - These book titles will tend to fit epic tales of grand journeys best. </p>
                                        </div>

                                    </div>
                                    <div class="slide-content img">
                                        <img src="../../s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide4.jpg" alt="" />
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
