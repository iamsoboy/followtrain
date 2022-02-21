@extends('layouts.home.homepage')

@section('title', 'Our Offers')

@section('content')

    <div class="offer-wrapper">
        <div class="ctrl-wraper2">
            <div class="row">
                <header class="col-lg-12">
                    <h2>Offers and Cashbacks</h2>
                    <strong>we have found 15</strong>
                    <span>best offers for your holiday</span>
                </header>

                <ul class="pkglst clearfix">
                    <li>
                        <div class="venue">
                            <img src="{{asset('home/images/tour-img1.jpg')}}" alt="img" />
                            <span class="hot-deals"> <img src="{{asset('home/images/hot-deal.png')}}" alt="img"></span>
                            <span class="photo-icon"><img src="{{asset('home/images/Photo-icon.png')}}" alt="img"></span>
                        </div>
                        <div class="venue-dtls">
                            <h3>25% Discount on your <br /> first hotel booking</h3>
                            <span class="promo-applied">First Time Only</span>
                            <p>Take our 10-day package tour to Europe and discover the popular <br />
                                cities on the continent like never before.</p>

                        </div>
                        <div class="coupon-box">
                            <span>Coupon Code</span>
                            <img src="{{asset('home/images/coupon.png')}}" alt="img" />
                        </div>
                    </li>
                    <li>
                        <div class="venue">
                            <img src="{{asset('home/images/tour-img1.jpg')}}" alt="img" />
                            <span class="hot-deals"> <img src="{{asset('home/images/hot-deal.png')}}" alt="img"></span>
                            <span class="photo-icon"><img src="{{asset('home/images/Photo-icon.png')}}" alt="img"></span>
                        </div>
                        <div class="venue-dtls">
                            <h3>25% Discount on your <br /> first hotel booking</h3>
                            <span class="promo-applied">First Time Only</span>
                            <p>Take our 10-day package tour to Europe and discover the popular <br />
                                cities on the continent like never before.</p>

                        </div>
                        <div class="coupon-box">
                            <span>Coupon Code</span>
                            <img src="{{asset('home/images/coupon.png')}}" alt="img" />
                        </div>
                    </li>
                </ul>

                <div class="more-offers">
                    <h3>Hotel Offers</h3>
                    <ul class="more-offers-list">
                        <li><img src="{{asset('home/images/offers-image1.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image2.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image3.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image4.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image2.jpg')}}" alt="img" /></li>
                    </ul>
                </div>

                <div class="more-offers">
                    <h3>Holiday Offers</h3>
                    <ul class="more-offers-list">
                        <li><img src="{{asset('home/images/offers-image5.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image6.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image7.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image8.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image6.jpg')}}" alt="img" /></li>
                    </ul>
                </div>

                <div class="more-offers">
                    <h3>Travel Offers</h3>
                    <ul class="more-offers-list">
                        <li><img src="{{asset('home/images/offers-image9.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image10.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image11.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image12.jpg')}}" alt="img" /></li>
                        <li><img src="{{asset('home/images/offers-image10.jpg')}}" alt="img" /></li>
                    </ul>
                </div>

            </div>

            <div class="rellax" data-rellax-speed="2" data-rellax-percentage="2">
                <span class="traveller-txt"> traveller </span>
            </div>
        </div>

        <span class="dottedbg-pattern dottedtext transparent right rellax" data-rellax-speed="-9"
              data-rellax-percentage="0.4" data-text="go"> go </span>


    </div>

@endsection
