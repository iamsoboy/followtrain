@extends('layouts.home.homepage')

@section('title', 'Thank You')

@section('content')

    <div class="service-banner-area">

        <img src="{{asset('home/images/banner_bg.png')}}" alt="Successful Payment" />
        <div class="banner-cap-box ctrl-wraper2">
            <h2>All Booking Details <br /> </h2>
            <span>Booking Reference: </span>
            <p>
               Thank you for using Jirowo!!!
            </p>

            <!--<img src="{{asset('homes/images/service-banner-bgimg.png')}}" alt="img" />-->
        </div>
    </div>

@endsection
