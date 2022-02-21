@extends('layouts.home.homepage')

@section('title', 'About Us')

@section('content')

    <div class="about-company">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="about-header">
                    <header>
                        <div class="source">
                            <strong>let's take you there</strong>
                            <span> Jirowo Online Booking</span>
                        </div>

                        <div class="abt-title rellax" data-rellax-speed="-1" data-rellax-percentage="0">
                            <h2>We are Nigeria's  first online rail ticketing platform!</h2>
                        </div>
                    </header>

                    <div class="about-banner-box">
                        <img src="{{asset('home/images/asham-station2.jpg')}}" alt="">
                    </div>
                </div>

                <div class="about-contant-box">
                    <div class="company-logo">
                        <img src="{{asset('home/images/logo.png')}}" alt="logo" />
                    </div>
                    <div class="company-dtls py-4 mx-4">
                        <h3>At Afset Solution, we understand that everyone likes easy and affordable travel services, so we provide our customers with a one-stop booking portal for Affordable Rail Tickets, Cargo, Train Station Shuttle Service, Local Hotel Booking and much more</h3>

                        <p>Our portal gives customers the power and the ability to research, plan and book their rail tickets from the comfort of their homes and everywhere they are. We also have an interactive Call Centre and physical travel centres in Kaduna and Abuja with a dedicated travel centre strategically located at each train stations for customers’ convenience.</p>

                        <!--<p>For one year, I have moved, uninhibitedly, as much within as with my feet, like a bird without a nest, flapping my wings in the vast skies, swooping down on parts of the world that beckoned me. A soul without a compass on some days, a spirit that couldn’t be contained on others. Much has been learnt, more has been loved – and the one thing that has remained constant is my desire to keep moving.</p> -->

                    </div>



                </div>

                {{--<div class="team-member">
                    <h2> Our expert team <br /> members </h2>
                    <figure>
                        <img src="{{asset('home/images/team-member.png')}}" alt="img" />
                        <figcaption>
                            with a base in Delhi and an insatiable wanderlust. On the twenty-fifth day of August 2013, as I sat on the roof of my shabby Delhi apartment, staring at the dark starless sky, my heart filled with an unknown melancholy and my spirit craved more adventure.
                        </figcaption>
                    </figure>
                </div>--}}

            </div>
        </div>
    </div>


    <div class="people-saying">
        <div class="ctrl-wraper2">
            <header>
                <h3>What people <br />Saying</h3>
                <span>Favourite travellers and <br /> Their experience</span>
            </header>

            <div class="review-slider slider">
                <div class="rs-item">
                    <div class="rs-thumb">
                        <img src="{{asset('homes/images/people1.png')}}" alt="img" />
                    </div>
                    <div class="rs-content">
                        <i class="gt-heart"></i>
                        <strong>Johanna Gross</strong>
                        <span><img src="{{asset('home/images/icons/quote.svg')}}" alt="quote" /></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    </div>
                </div>

                <div class="rs-item">
                    <div class="rs-thumb">
                        <img src="{{asset('homes/images/people2.png')}}" alt="img" />
                    </div>
                    <div class="rs-content">
                        <i class="gt-heart"></i>
                        <strong>Johanna Gross</strong>
                        <span><img src="{{asset('home/images/icons/quote.svg')}}" alt="quote" /></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    </div>
                </div>

                <div class="rs-item">
                    <div class="rs-thumb">
                        <img src="{{asset('homes/images/people3.png')}}" alt="img" />
                    </div>
                    <div class="rs-content">
                        <i class="gt-heart"></i>
                        <strong>Johanna Gross</strong>
                        <span><img src="{{asset('home/images/icons/quote.svg')}}" alt="quote" /></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    </div>
                </div>

                <div class="rs-item">
                    <div class="rs-thumb">
                        <img src="{{asset('homes/images/people4.png')}}" alt="img" />
                    </div>
                    <div class="rs-content">
                        <i class="gt-heart"></i>
                        <strong>Johanna Gross</strong>
                        <span><img src="{{asset('home/images/icons/quote.svg')}}" alt="quote" /></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    </div>
                </div>

                <div class="rs-item">
                    <div class="rs-thumb">
                        <img src="{{asset('homes/images/people5.png')}}" alt="img" />
                    </div>
                    <div class="rs-content">
                        <i class="gt-heart"></i>
                        <strong>Johanna Gross</strong>
                        <span><img src="{{asset('home/images/icons/quote.svg')}}" alt="quote" /></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    </div>
                </div>

                <div class="rs-item">
                    <div class="rs-thumb">
                        <img src="{{asset('homes/images/people6.png')}}" alt="img" />
                    </div>
                    <div class="rs-content">
                        <i class="gt-heart"></i>
                        <strong>Johanna Gross</strong>
                        <span><img src="{{asset('home/images/icons/quote.svg')}}" alt="quote" /></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    </div>
                </div>

                <div class="rs-item">
                    <div class="rs-thumb">
                        <img src="{{asset('homes/images/people1.png')}}" alt="img" />
                    </div>
                    <div class="rs-content">
                        <i class="gt-heart"></i>
                        <strong>Johanna Gross</strong>
                        <span><img src="{{asset('home/images/icons/quote.svg')}}" alt="quote" /></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{--<div class="partners-box">
        <div class="ctrl-wraper2">
            <div class="travel-partners-list">
                <h3>travel Partners</h3>
                <span>Our proud partners who made us successful</span>
                <ul>
                    <li><img src="{{asset('home/images/partners/drako.svg')}}" alt="img" /></li>
                    <li><img src="{{asset('home/images/partners/media-group.svg')}}" alt="img" /></li>
                    <li><img src="{{asset('home/images/partners/lummy.svg')}}" alt="img" /></li>
                    <li><img src="{{asset('home/images/partners/california-concrete.svg')}}" alt="img" /></li>
                    <li><img src="{{asset('home/images/partners/naga.svg')}}" alt="img" /></li>
                    <li><img src="{{asset('home/images/partners/zoo.svg')}}" alt="img" /></li>
                    <li><img src="{{asset('home/images/partners/lummy.svg')}}" alt="img" /></li>
                </ul>
            </div>
        </div>
        <span class="dottedbg-pattern dottedtext transparent right rellax" data-rellax-speed="-9"
              data-rellax-percentage="0.4" data-text="go"> go </span>
    </div>--}}

@endsection
