@extends('layouts.home.app')

@section('title', 'Car Booking')

@section('content')

    <div class="innerbanner trainbkng-bnr clearfix">
        <div class="ctrl-wraper2">
            <img class="fb-bnr-img" src="{{asset('home/images/book-ride.png')}}" alt="flight" />
            <div class="cap banner-main-txt">
                <h1 class="rellax" data-rellax-speed="3"
                    data-rellax-percentage="0.45">Order <br> a car </h1>
                <p class="rellax" data-rellax-speed="1"
                   data-rellax-percentage="0.45">book a ride to and from all train stations</p>
            </div>
        </div>
    </div>

    <div class="train-ticket-booking">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="formbox-square">
                    <div class="pnl-header">
                        <ul class="trip-switch default">
                            <li class="oneway"><span>1 way</span></li>
                        </ul>
                        <p> instant taxi booking system <br />to and from train stations to any location </p>
                    </div>
                    <div class="pnl-body">
                        <form>

                            <div class="form-field icon-location srcby-counter">
                                <label>from</label>
                                <input type="text" placeholder="Your Location" name="ride_location">
                            </div>


                            <div class="form-field icon-location srcby-counter">
                                <label>to</label>
                                <input type="text" placeholder="Your Destination" name="ride_destination">
                            </div>

                            <div data-date-picker data-date-picker-type="single"
                                 class="form-field icon-calendar bx--date-picker bx--date-picker--single">
                                <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                                <label>departure</label>
                                <input type="text" id="date-picker-3" class="inputype1 bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" data-date-picker-input />
                            </div>



                            <div class="btn-group">
                                <button class="btn btn-trpsrc btn-right" type="submit">search now</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="travelspots-sec">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="travelspots">
                    <div class="left">
                        <h3>Let’s take  <br />you there!</h3>
                        <p>We provide our customers with a one-stop booking portal for Affordable Rail Tickets, Cargo, Train Station Shuttle Service, Local Hotel Booking and much more.  </p>
                    </div>
                    <div class="right">
                        <ul class="foursquare">
                            <li> <img src="{{asset('home/images/travlespot1.jpg')}}" alt=""> </li>
                            <li> <img src="{{asset('home/images/travlespot2.jpg')}}" alt=""> </li>
                            <li> <img src="{{asset('home/images/travlespot3.jpg')}}" alt=""> </li>
                            <li> <img src="{{asset('home/images/travlespot4.jpg')}}" alt=""> </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
                                    Kubwa<span>Abuja</span>
                                </div>
                                <img src="{{asset('home/images/arwith-border.png')}}" alt="" />
                            </a>
                        </div>

                        <div class="product-img__item" id="img2">
                            <img src="{{asset('home/images/destination-idu.jpg')}}" alt="star wars" class="product-img__img">
                            <div class="product-img__bottom">
                                <a href="#" class="product-img__cart">
                                    Idu<span>Abuja</span>
                                </a>
                                <img src="{{asset('home/images/arwith-border.png')}}" alt="" />
                            </div>
                        </div>

                        <div class="product-img__item" id="img3">
                            <img src="{{asset('home/images/destination-rigasa.jpg')}}" alt="star wars" class="product-img__img">
                            <div class="product-img__bottom">
                                <a href="#" class="product-img__cart">
                                    Rigasa<span>Kaduna</span>
                                </a>
                                <img src="{{asset('home/images/arwith-border.png')}}" alt="" />
                            </div>
                        </div>

                        <div class="product-img__item" id="img4">
                            <img src="{{asset('home/images/destination-asham.jpg')}}" alt="star wars" class="product-img__img">
                            <div class="product-img__bottom">
                                <a href="#" class="product-img__cart">
                                    Rigasa<span>Kaduna</span>
                                </a>
                                <img src="{{asset('home/images/arwith-border.png')}}')}}" alt="" />
                            </div>
                        </div>

                    </div>

                    <div class="product-slider">
                        <div class="product-slider__wrp swiper-wrapper">

                            <div class="product-slider__item swiper-slide" data-target="img1">
                                <div class="product-slider__card">
                                    <div class="product-slider__content">

                                        <strong class="product-slider__title">OUR  </strong>
                                        <h3 class="product-slider__price">desti nations</h3>

                                        <div class="product-ctr">
                                            <div class="product-labels">
                                                <div class="product-labels__title">more happening</div>
                                                <p class="product-inf__title">
                                                    <strong>Kubwa Station</strong> located at Arab Road, Kubwa - Abuja. Best for residents/travelers at the out-skirt of the the municipal area of Abuja.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-slider__item swiper-slide" data-target="img2">
                                <div class="product-slider__card">
                                    <div class="product-slider__content">

                                        <strong class="product-slider__title"> OUR </strong>
                                        <h3 class="product-slider__price">desti nations </h3>

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

                                        <strong class="product-slider__title">OUR </strong>
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

                                        <strong class="product-slider__title">OUR  </strong>
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

@endsection
