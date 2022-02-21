<!-- footer -->
<div class="bottom-left">
    <svg class="shapes2 layer2 ">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes2')}}" />
    </svg>

    <svg class="shapes3 layer3">
        <use xlink:href="{{asset('home/svg/shapes.svg#shapes3')}}" fill="url(#dots-4)" />
    </svg>
</div>

<footer>
    <div class="container-fluid" data-rellax-speed="1" data-rellax-percentage=".7">
        <div class="ctrl-wraper2">

            <div class="ftr-main-sec">
                <div class="cus-review">
                    <h5 class="ftr-headng">book instant <br /> train tickets online</h5>
                    <p style="font-size:14px;">
                        Afset Solution is the first company to operate an online rail ticketting platform in Nigeria - JIROWO.
                        At Afset Solution, we understand that everyone likes easy and affordable travel services,
                        so we provide our customers with a one-stop booking portal for Affordable Rail Tickets, Cargo, Train Station Shuttle Service, Local Hotel Booking and much more.
                        Our portal gives customers the power and the ability to research, plan and book their rail tickets from the comfort of their homes and everywhere they are.</p>
                    {{--<div class="vertical slider">
                        <div class="csreview-item">
                            <div class="cs-thumb">
                                <img src="{{asset('home/images/client-pic1.jpg')}}" alt="img" />
                            </div>
                            <div class="cs-content">
                                <strong>Blanca Johnston</strong>
                                <p>We have written example text for over 40 industry sectors, this is an ongoing project and we will
                                    be adding more copy if there is a demand.</p>
                                <span class="rating"><img src="{{asset('home/images/star.png')}}" alt="img" />4.5 / 5</span>
                            </div>
                        </div>
                        <div class="csreview-item">
                            <div class="cs-thumb">
                                <img src="{{asset('home/images/client-pic2.jpg')}}" alt="img" />
                            </div>
                            <div class="cs-content">
                                <strong>Leticia Fox</strong>
                                <p>We have written example text for over 40 industry sectors, this is an ongoing project and we will
                                    be adding more copy if there is a demand.</p>
                                <span class="rating"><img src="{{asset('home/images/star.png')}}" alt="img" />4.5 / 5</span>
                            </div>
                        </div>
                        <div class="csreview-item">
                            <div class="cs-thumb">
                                <img src="{{asset('home/images/client-pic2.jpg')}}" alt="img" />
                            </div>
                            <div class="cs-content">
                                <strong>Kelly Cunningham</strong>
                                <p>We have written example text for over 40 industry sectors, this is an ongoing project and we will
                                    be adding more copy if there is a demand.</p>
                                <span class="rating"><img src="{{asset('home/images/star.png')}}" alt="img" />4.5 / 5</span>
                            </div>
                        </div>
                        <div class="csreview-item">
                            <div class="cs-thumb">
                                <img src="{{asset('home/images/client-pic1.jpg')}}" alt="img" />
                            </div>
                            <div class="cs-content">
                                <strong>Blanca Johnston</strong>
                                <p>We have written example text for over 40 industry sectors, this is an ongoing project and we will
                                    be adding more copy if there is a demand.</p>
                                <span class="rating"><img src="{{asset('home/images/star.png')}}" alt="img" />4.5 / 5</span>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="menu">
                    <h5 class="ftr-headng">explore more</h5>
                    <ul>
                        <li><a href="about-us.html">Book Train Tickets</a></li>
                        <li><a href="#.html">Book Ride</a></li>
                        <li><a href="#.html">Cargo</a></li>
                        <li><a href="#.html">Find Hotel</a></li>
                        <li><a href="{{route('about.index')}}">Find out more About us</a></li>
                        <li><a href="{{route('contact.index')}}">contact us</a></li>
                    </ul>

                    <a class="cart-box" href="#"><span class="gt-shopping-bag cart-icon"></span>item in your cart</a>
                </div>

                <div class="news">
                    <h5 class="ftr-headng">news updates</h5>
                    <ul class="newslist">
                        <li>
                            <a href="{{route('blog.index')}}">
                                <span class="nsthumb"><img src="{{asset('home/images/favicon.png')}}" alt="img" /></span>
                                <p>Online Booking of Train Tickets for Abuja to Kaduna Trips now Live</p>
                                <span class="date">15 june</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('blog.index')}}">
                                <span class="nsthumb"><img src="{{asset('home/images/footer-news-thumb4.jpg')}}" alt="img" /></span>
                                <p>FG approves Afset Solution to operate online rail ticket platform</p>
                                <span class="date">15 june</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="social">
                    <div class="connect-with-us">
                        <h5 class="ftr-headng">social with us</h5>
                        <ul class="social-links">
                            <li><a href="#" class="gt-uniE918 ft-pinterest"></a></li>
                            <li><a href="#" class="gt-uniE91B ft-twitter"></a></li>
                            <li><a href="#" class="gt-uniE910 ft-behance"></a></li>
                            <li><a href="#" class="gt-internet ft-dribbble"></a></li>
                            <li><a href="#" class="gt-internet ft-instagram"></a></li>
                            <li><a href="#" class="gt-uniE914 ft-facebook"></a></li>
                            <li><a href="#" class="gt-uniE916 ft-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footernote-area">

                <div class="footer-logo-box">
                    <a class="footer-logo" href="{{route('index')}}">
                        <img src="{{asset('/home/images/logo-white.png')}}" alt="logo" />
                        <!-- <span class="logo animated-logo"></span> -->
                    </a>
                    <div class="ftr-logo-txt">
                        <strong>lets go there</strong>
                        <span>Book Instant Train Tickets</span>
                    </div>
                </div>

                <ul class="footer-dtls">
                    <li><a href="#"><span class="gt-internet py-2"></span>powered by <b>afset solutions</b></a></li>
                </ul>


            </div>

            <div class="copyright">
                <p>Crafted by: <a href="https://blvckphenix.com"> Blvck Phenix Technologies</a></p>
            </div>

        </div>
    </div>
</footer>
