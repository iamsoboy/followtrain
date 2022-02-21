@extends('layouts.home.homepage')

@section('title', 'Our Services')

@section('content')

    <div class="service-banner-area">
        <img src="{{asset('home/images/service-banner.png')}}" alt="img" />
        <div class="banner-cap-box ctrl-wraper2">
            <h2>All your <br /> travel queries</h2>
            <span>ends here!</span>
            <p>From flight booking to delicious food.
                from hotel booking to travel accessories
                all in one place</p>

            <img src="{{asset('home/images/service-banner-bgimg.png')}}" alt="img" />
        </div>
    </div>

    <div class="airline-route">
        <img src="{{asset('home/images/airline-route.png')}}" alt="img" />
    </div>
    <div class="service-wrapper">
        <div class="ctrl-wraper2">
            <div class="row">
                <ul class="our-services">
                    <li>
                        <a href="travelpackages.html">
                            <div class="srvsdtls-left">
                                <figure><img src="{{asset('home/images/holiday.jpg')}}" alt="img" /></figure>
                                <span class="cap-img"><img src="{{asset('home/images/icons/holiday-icon.svg')}}" alt="img" /></span>
                            </div>
                            <div class="srvsdtls-right">
                                <h4>Holidays</h4>
                                <p>instant and most realtime dynamic <br>
                                    flight booking experience</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="hotelbooking.html">
                            <div class="srvsdtls-left">
                                <figure><img src="{{asset('home/images/hotel-booking.jpg')}}" alt="img" /></figure>
                                <span class="cap-img"><img src="{{asset('home/images/icons/hotel-booking-icon.svg')}}" alt="img" /></span>
                            </div>
                            <div class="srvsdtls-right">
                                <h4>Hotel booking</h4>
                                <p>instant and most realtime dynamic <br>
                                    flight booking experience</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="cruisebooking.html">
                            <div class="srvsdtls-left">
                                <figure><img src="{{asset('home/images/cruise-tour.jpg')}}" alt="img" /></figure>
                                <span class="cap-img"><img src="{{asset('home/images/icons/cruise-icon.svg')}}" alt="img" /></span>
                            </div>
                            <div class="srvsdtls-right">
                                <h4>Cruise tour</h4>
                                <p>instant and most realtime dynamic <br>
                                    flight booking experience</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurentbooking.html">
                            <div class="srvsdtls-left">
                                <figure><img src="{{asset('home/images/restaurant.jpg')}}" alt="img" /></figure>
                                <span class="cap-img"><img src="{{asset('home/images/icons/restaurents.svg')}}" alt="img" /></span>
                            </div>
                            <div class="srvsdtls-right">
                                <h4>Restaurants</h4>
                                <p>instant and most realtime dynamic <br>
                                    flight booking experience</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="trainbooking.html">
                            <div class="srvsdtls-left">
                                <figure><img src="{{asset('home/images/train-booking.jpg')}}" alt="img" /></figure>
                                <span class="cap-img"><img src="{{asset('home/images/icons/tickets.svg')}}" alt="img" /></span>
                            </div>
                            <div class="srvsdtls-right">
                                <h4>Train tickets</h4>
                                <p>instant and most realtime dynamic <br>
                                    flight booking experience</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="flightbooking.html">
                            <div class="srvsdtls-left">
                                <figure><img src="{{asset('home/images/flight-booking.jpg')}}" alt="img" /></figure>
                                <span class="cap-img"><img src="{{asset('home/images/icons/flight.svg')}}" alt="img" /></span>
                            </div>
                            <div class="srvsdtls-right">
                                <h4>Flight booking</h4>
                                <p>instant and most realtime dynamic <br>
                                    flight booking experience</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="whyus-sce">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="whyus-services">
                    <div class="services-dtls">

                        <span>cholo Lets go </span>
                        <h3>why <br />choose <br /> us</h3>

                        <p>book hessel free cab services in yur next holiday destination.
                            Lgt provides you the most hassel free and userfriendly cab services all over the world. our most experienced tour professionals are ready to serve you the best of tour packages with affordable price.</p>
                        <!-- <a class="btn-knowabtus" href="about-us.html">know more about us</a> -->
                    </div>

                    <div class="services-list">
                        <strong>services we provide</strong>
                        <ul>
                            <li> <span><img src="{{asset('home/images/icons/authentication.svg')}}" alt="img" /> </span> Authentic and Relaible</li>
                            <li> <span><img src="{{asset('home/images/icons/customer.svg')}}" alt="img" /> </span> world class services</li>
                            <li> <span><img src="{{asset('home/images/icons/client-rating.svg')}}" alt="img" /> </span> over 10k happy customers</li>
                            <li> <span><img src="{{asset('home/images/icons/map.svg')}}" alt="img" /> </span> more than 350 destinations</li>
                            <li> <span><img src="{{asset('home/images/icons/advisor.svg')}}" alt="img" /> </span> top rated agents and advisors
                            </li>
                        </ul>
                    </div>

                    <span class="service-centerlogo">
                <a href="index.html">
                  <img src="{{asset('home/images/logo.png')}}" alt="logo" />
                </a>
              </span>
                </div>
            </div>
        </div>
    </div>

@endsection
