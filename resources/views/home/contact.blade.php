@extends('layouts.home.homepage')

@section('title', 'Contact Us')

@section('content')

    <div class="contact-wrapper">
        <div class="ctrl-wraper2">
            <div class="row">
                <header class="col-lg-12">
                    <h2>contact us</h2>
                    <strong>any time, anything ask us 24x7!</strong>
                </header>

                <div class="col-lg-5">
                    <figure>
                        <img src="{{asset('home/images/happy2talk.jpg')}}" alt="img" />
                    </figure>
                </div>

                <div class="col-lg-7 col-xl-6">
                    <div class="findus">
                        <h3>You can find us</h3>
                        <span><img src="{{asset('home/images/logo.png')}}" alt="logo" /></span>
                        <p>We have interactive Call Centres and physical travel centres in Kaduna and Abuja with a dedicated travel centre strategically located at each train stations for customers’ convenience </p>
                    </div>

                    <div class="office-loaction">

                        <ul>
                            <li>
                                <h4>head office</h4>
                                <span> <img src="{{asset('home/images/icons/company.svg')}}" alt=""></span>
                                <address>8440 South Ashley Street
                                    Abuja, Nigeria</address>
                            </li>
                            <li>
                                <h4>branch office</h4>
                                <span> <img src="{{asset('home/images/icons/company.svg')}}" alt=""></span>
                                <address>75 Franklin Drive
                                    Kaduna, Nigeria</address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="rellax" data-rellax-speed="2" data-rellax-percentage="2">
                <span class="traveller-txt"> contact </span>
            </div>
        </div>

        <span class="dottedbg-pattern dottedtext transparent right rellax" data-rellax-speed="-9"
              data-rellax-percentage="0.4" data-text="go"> go </span>


    </div>

@endsection
