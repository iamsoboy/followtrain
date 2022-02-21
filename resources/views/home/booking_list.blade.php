@extends('layouts.home.homepage')

@section('title', 'Booking List')

@section('content')

    <div class="bst-srcrslt">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="cmn-header">
                    <h1>Your best <br />search result</h1>
                    <div class="hdr-rght">
                        <span>changed your mind?</span>
                        <a class="btn-src-agn" href="#">search again</a>
                    </div>
                </div>


                <div class="tickets-infosec">
                    <div class="trip-info">
                        <span class="trip-type">one way</span>
                       <!-- <span> international flight</span> -->
                        <strong><span>{{$daysOfTheWeek}},</span> {{$travel->departure_date}}</strong>
                    </div>

                    <div class="venue-log">
                        <div class="venue-map">

                            <svg class="flights-path" viewBox="0 0 345 45"
                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" >

                                <path id="path1" d="M1 58C1 58 165 -95 345 50"
                                      fill="none" stroke="url(#linegradient)" stroke-width="4"  />

                                <circle cx="345" cy="50" r="6" fill="#1265be"/>
                                <circle cx="0" cy="58" r="6" fill="#ff4981"/>

                                <path id="triangle" d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm-4.809 13.077l3.627-1.796-3.717-3.17 1.149-.569 6.017 2.031 2.874-1.423c.757-.38 2.009-.278 2.294.296.045.092.065.195.065.306-.002.586-.59 1.381-1.221 1.698l-2.874 1.423-2.031 6.016-1.15.569-.268-4.878-3.626 1.796-.749 1.802-.804.398-.281-2.724-1.996-1.874.804-.399 1.887.498z"
                                      fill="#ff5c8e" fill-rule="evenodd" clip-rule="evenodd" >
                                </path>
                            </svg>
                             <!--<img src="./images/venue-map.svg" alt="map"> -->
                        </div>
                        <div class="venue-desti">
                            <div class="source-city">
                                <span class="city-img"><img src="{{asset('home/images/city-img1.jpg')}}" alt="img"></span>
                                <div class="city-dtls">
                                    <strong class="citycode">{{$locationDetails->code}}</strong>
                                    <span class="city-airport">( {{ $locationDetails->name }} )</span>
                                    <!--<span class="ggl-revu">4.4 <i class="gt-star1"></i> 772 <a href="#">Google review</a></span>-->
                                </div>

                            </div>

                            <span class="switch-icon"><img src="{{asset('home/images/switch-icon.png')}}" alt="img"></span>

                            <div class="destination-city">
                                <span class="city-img"><img src="{{asset('home/images/city-img2.jpg')}}" alt="img"></span>
                                <div class="city-dtls">
                                    <strong class="citycode">{{$destinationDetails->code}}</strong>
                                    <span class="city-airport">( {{ $destinationDetails->name }} ) </span>
                                    <!--<span class="ggl-revu">4.4 <i class="gt-star1"></i> 772 <a href="#">Google review</a></span>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trip-info-footer">
                       <!-- <p>Actual flight time from Indira Gandhi International Airport (DEL), New Delhi, India to London Heathrow Airport (LHR),
                            <br /> London, United Kingdom. Distance between DEL & LHR is approximately 6740 kilometers.</p> -->

                        <a class="btn bdr-rds50 btn-sm btn-chngcity" href="{{route('index')}}">change city</a>
                    </div>

                </div>

                <div class="dtls-bar">
                    <div class="dtl-header">
                        <h3>Your <br /> details</h3>
                        <p>you can change your details
                            <br /> at any time</p>
                    </div>
                    <ul>
                        <li>
                            <!-- <div class="calendar-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><defs></defs><title>Calendar-Alt</title>
                                    <path id="bottom-left" class="a" d="M7.62,16H6.34A1.21,1.21,0,0,0,5,17v1a1.21,1.21,0,0,0,1.34,1H7.73A1.1,1.1,0,0,0,9,18.05L9,17A1.21,1.21,0,0,0,7.62,16Z"/>
                                    <path id="top-middle" class="a" d="M11,14h2a0.9,0.9,0,0,0,1-.88V12a1,1,0,0,0-1-1H11a1,1,0,0,0-1,1v1.12A0.9,0.9,0,0,0,11,14Z"/>
                                    <rect id="top-left" class="a" x="5" y="11" width="4" height="3" rx="1" ry="1"/>
                                    <rect id="top-right" class="a" x="15" y="11" width="4" height="3" rx="1" ry="1"/>
                                    <path id="bottom-middle" class="a" d="M12.66,16H11.38A1.21,1.21,0,0,0,10,17l0.07,1a1.21,1.21,0,0,0,1.34,1h1.28A1.1,1.1,0,0,0,14,18.05V17A1.21,1.21,0,0,0,12.66,16Z"/>
                                    <path class="container" d="M21.5,3H17V1.06a1,1,0,0,0-1-1H15a1,1,0,0,0-1,1V3H10V1A1,1,0,0,0,9,0H8A1,1,0,0,0,7,1V3H2.5A2.5,2.5,0,0,0,0,5.5v16A2.5,2.5,0,0,0,2.5,24h19A2.5,2.5,0,0,0,24,21.5V5.5A2.5,2.5,0,0,0,21.5,3ZM21,21.13H3V5.94H7v1a1,1,0,0,0,1,1H9a1,1,0,0,0,1-1v-1h4V7a1,1,0,0,0,1,1h1a1,1,0,0,0,1-1V5.94h4V21.13Z"/>
                                <rect id="bottom-right" class="a" x="15.05" y="16" width="3.95" height="3" rx="1" ry="1"/></svg>
                            </div> -->

                            <i class="gt-calendar"></i>
                            <p>{{$fullDate}}</li>
                        <li>
                            <!-- <i class="gt-user-1"></i> -->
                            <div class="person">
                                <svg viewBox="0 0 68 66" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(2.000000, 2.000000)" fill-rule="nonzero">
                                            <g class="svg-body">
                                                <path d="M61,63.5 L57,63.5 C57,48.3121694 44.6878306,36 29.5,36 C14.3121694,36 2,48.3121694 2,63.5 L-2,63.5 C-2,46.1030304 12.1030304,32 29.5,32 C46.8969696,32 61,46.1030304 61,63.5 Z" fill="#180839"></path>
                                            </g>
                                            <g class="svg-head">
                                                <path d="M29,34 C19.0588745,34 11,25.9411255 11,16 C11,6.0588745 19.0588745,-2 29,-2 C38.9411255,-2 47,6.0588745 47,16 C47,25.9411255 38.9411255,34 29,34 Z M29,30 C36.7319865,30 43,23.7319865 43,16 C43,8.2680135 36.7319865,2 29,2 C21.2680135,2 15,8.2680135 15,16 C15,23.7319865 21.2680135,30 29,30 Z" fill="#180839"></path>
                                                <g class="svg-eyes">
                                                    <line x1="23" y1="10" x2="23" y2="17" stroke-width="3" stroke="#180839"></line>
                                                    <line x1="33" y1="10" x2="33" y2="17" stroke-width="3" stroke="#180839"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <p>{{$travel->passenger}} adults</p>
                        </li>
                        <li>
                            <i class="gt-star"></i>
                            <p>{{$price->ticket_class}} class</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- We found -->
    <div class="wefound">
        <div class="container-fluid">
            <div class="ctrl-wraper2">
               <!-- <header>
                    <h3>Hey, We found</h3>
                    <span>Some best price for you</span>
                </header> -->

                 {{--<div class="panelheader">
                    <div class="flightsinfo">
                        <ul class="left">
                            <li><span class="bdr-circle">30</span>Flights found</li>
                            <li><span class="bdr-circle">20</span>Connecting Flights</li>
                            <li><span class="bdr-circle">10</span>Direct Flights</li>
                        </ul>
                        <div class="right">
                            <span>Refresh the Result</span>
                            <span class="refresh bdr-rds15">
                                    <img src="{{asset('home/images/icons/refresh.svg')}}" alt="icon" />
                                </span>
                        </div>
                    </div>

                    <div class="flights-time-feature">
                        <div class="left">
                            <span>select your time</span>
                            <ul>
                                <li class="bdr-rds20">
                                    <!-- <i class="refresh bdr-rds15 gt-right-arrow"></i>  -->
                                    <img src="{{asset('home/images/icons/sunrise.svg')}}" alt="icon" />
                                    before 11 am </li>
                                <li class="bdr-rds20">
                                    <!-- <i class="refresh bdr-rds15 gt-right-arrow"></i>  -->
                                    <img src="{{asset('home/images/icons/fullsun.svg')}}" alt="icon" />
                                    11 am - 5pm </li>
                                <li class="bdr-rds20">
                                    <!-- <i class="refresh bdr-rds15 gt-right-arrow"></i>  -->
                                    <img src="{{asset('home/images/icons/moon.svg')}}" alt="icon" />
                                    5pm - 9pm </li>
                                <li class="bdr-rds20">
                                    <!-- <i class="refresh bdr-rds15 gt-right-arrow"></i>  -->
                                    <img src="{{asset('home/images/icons/moon-cloud.svg')}}" alt="icon" />
                                    after 9pm </li>
                            </ul>
                        </div>

                        <div class="right">
                            <span>Specials</span>
                            <ul>
                                <li class="bdr-rds20">
                                    <img src="{{asset('home/images/icons/airline.svg')}}" alt="icon" />
                                </li>

                                <li class="bdr-rds20">
                                    <img src="{{asset('home/images/icons/stop.svg')}}" alt="icon" />
                                </li>

                                <li class="bdr-rds20">
                                    <img src="{{asset('home/images/icons/cal2.svg')}}" alt="icon" />
                                    <a href="#" class="slctdd">Fare calender</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div> --}}

                <!-- <img src="./images/dailyfare-cal.jpg')}}" alt="img" /> -->

               {{-- <div class="dailyfare-cal">
                    <div class="rescalendar" id="my_calendar_en"></div>


                    <!-- line graph -->
                    <svg class="mainSVG" viewBox="55 0 1575 250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                        <defs>
                            <!-- for line Shadow -->
                            <filter id="glow" x="-100%" y="-100%" width="350%" height="350%" color-interpolation-filters="sRGB">
                                <feGaussianBlur stdDeviation="5" result="coloredBlur" />
                                <feOffset dx="0" dy="20" result="offsetblur"></feOffset>
                                <feFlood id="glowAlpha" flood-color="#000" flood-opacity="0.123"></feFlood>
                                <feComposite in2="offsetblur" operator="in"></feComposite>
                                <feMerge>
                                    <feMergeNode/>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>

                            <!-- for line gradient -->
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ff911b" offset="0" />
                                <stop stop-color="#b305a3" offset="1" />
                            </linearGradient>

                            <!-- for circle shadow -->
                            <filter id="circleshadow" x="-100%" y="-100%" width="500%" height="500%" color-interpolation-filters="sRGB">
                                <feGaussianBlur stdDeviation="20" result="coloredBlur" />
                                <feOffset dx="-15" dy="13" result="offsetblur"></feOffset>
                                <feFlood id="glowAlpha1" flood-color="rgba(255,145,27,0.9)" flood-opacity="1"></feFlood>
                                <feComposite in2="offsetblur" operator="in"></feComposite>
                                <feMerge>
                                    <feMergeNode/>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                        </defs>

                        <!-- graph line -->
                        <g id="uiGroup" filter="url(#glow)">
                            <path id="graphLine" fill="none" stroke-linecap="round" stroke="url(#gradient)" stroke-width="3" stroke-miterlimit="10" d="M55 160C55 160 119.23 112.88 200 128C280.77 143.12 297.08 226.65 347 232C396.92 237.35 458.87 164.79 496 122C496 122 582.61 9.56 643 8C643 8 695.85 -0.19 743 71C790.15 142.19 822.85 211.44 890 209C890 209 934.75 214.02 987 190L1037 162C1037 162 1109.17 108.75 1185 125C1185 125 1241.44 125.67 1333 206C1333 206 1354.5 225.62 1383 193C1383 193 1418.92 158 1432 141C1432 141 1513.87 31.97 1580 36C1580 36 1601.94 34.05 1628 55"/>

                            <g id="connectorGroup">
                                <line id="connector" x1="92" x2="92" y1="0" y2="0" stroke="#FFF" />
                            </g>

                            <g class="box">
                                <rect x="0" width="90" height="40" rx="20" ry="20" fill="#FFF"/>
                                <text id="boxLabel" x="45" y="28"> your date </text>
                            </g>
                        </g>

                        <!-- circle -->
                        <g filter="url(#circleshadow)" style="transform: matrix(1, 0, 0, 1, 1250, 150);" >
                            <!-- <circle id="nullDot" fill="rgba(255,145,27,1)" cx="0" cy="0" r="40"/>  -->
                            <circle id="graphDot" fill="#ff911b" cx="0" cy="0" r="40"/>
                            <circle id="dragger" fill="rgba(255,145,27,1)" cx="0" cy="0" r="40"/>
                            <text class="ur-date" x="-27" y="5" > $499.00 </text>
                        </g>
                    </svg>
                </div> --}}


                <div class="flights-dtls-listing">


                    @forelse($bookingTrips as $booking)
                        <div class="listrow">
                            <div class="source-destination">
                                <figure class="cmpny-logo">
                                    <img class="bdr-circle" src="{{asset('home/images/airline-logo1.jpg')}}" alt="img">
                                    <figcaption>{{$booking->train->name}}</figcaption>
                                </figure>
                                <div class="src-dst">
                                    <div class="src">
                                        <strong>{{$locationDetails->code}}</strong>
                                        <!--<span> <i class="gt-right-arrow"></i> 12:25pm</span>-->
                                    </div>
                                    <div class="tracking-line">
                                        <img src="{{asset('home/images/tracking-line.png')}}" alt="img" />
                                    </div>
                                    <div class="src">
                                        <strong>{{$destinationDetails->code}}</strong>
                                        <!--<span> <i class="gt-right-arrow"></i> 12:25pm</span>-->
                                    </div>
                                </div>
                            </div>

                            <div class="aditional-features">
                                 <ul>
                                     <li>
                                         <div class="custom-control custom-checkbox">
                                             <i class="gt-right-arrow"></i>
                                             <input type="checkbox" class="custom-control-input" id="rating1" name="time" value="{{$booking->departure_time}}" checked>
                                             <label class="custom-control-label" for="rating1">
                                                 Departure Time <br>
                                                 <div style="font-size: x-large">
                                                     <strong>{{$booking->departure_time}}</strong>
                                                 </div>

                                             </label>

                                         </div>
                                     </li>
                                     {{--<li>
                                         <div class="custom-control custom-checkbox">
                                             <i class="gt-right-arrow"></i>
                                             <input type="checkbox" class="custom-control-input" id="rating2" checked>
                                             <label class="custom-control-label" for="rating2">
                                                 Multi checking
                                             </label>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="custom-control custom-checkbox">
                                             <i class="gt-right-arrow"></i>
                                             <input type="checkbox" class="custom-control-input" id="rating3" checked>
                                             <label class="custom-control-label" for="rating3">
                                                 Long Layover
                                             </label>
                                             <span class="hrs">9:30hr</span>
                                         </div>
                                     </li>--}}
                                 </ul>
                            </div>


                            <div class="fare-book">
                                <div class="fare">
                                    <strong>&#8358; {{$price->price}}</strong>
                                    <span>{{$price->ticket_class}} class</span>
                                </div>
                                <form method="post" action="{{ route('cart.store') }}" id="booking-form">
                                    @csrf

                                    <div class="booking">
                                        <!--<button class="submit"><span>Book now</span></button>-->
                                        <input type="hidden" name="id" value="{{ Crypt::encrypt($booking->departure_time)}}">
                                        <input type="hidden" name="base" value="{{ Crypt::encrypt($price->price)}}">
                                        <input type="hidden" name="qty" value="{{ Crypt::encrypt($travel->passenger)}}">
                                        <input type="hidden" name="date" value="{{Crypt::encrypt($daysOfTheWeek. ' ' .$fullDate)}}">
                                        <input type="hidden" name="ticket" value="{{Crypt::encrypt($price->ticket_class)}}">
                                        <button type="submit" class="btn-book-btn"><span>Book now</span></button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        @empty
                            <b>Nothing</b>
                        @endforelse




                    {{--<div class="listrow">
                        <div class="multiple">
                            <div class="source-destination">
                                <figure class="cmpny-logo">
                                    <img class="bdr-circle" src="{{asset('home/images/airline-logo2.jpg')}}" alt="img">
                                    <figcaption>Austin Airlines</figcaption>
                                </figure>
                                <div class="src-dst">
                                    <div class="src">
                                        <strong>LCV</strong>
                                        <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                    </div>

                                    <div class="tracking-line">
                                        <img src="{{asset('home/images/tracking-line.png')}}" alt="img" />
                                    </div>

                                    <div class="src">
                                        <strong>LCV</strong>
                                        <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                    </div>

                                </div>
                            </div>
                            <div class="source-destination">
                                <figure class="cmpny-logo">
                                    <img class="bdr-circle" src="{{asset('home/images/airline-logo3.jpg')}}" alt="img">
                                    <figcaption>Austin Airlines</figcaption>
                                </figure>
                                <div class="src-dst">
                                    <div class="src">
                                        <strong>LCV</strong>
                                        <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                    </div>

                                    <div class="tracking-line">
                                        <img src="{{asset('home/images/tracking-line.png')}}" alt="img" />
                                    </div>

                                    <div class="src">
                                        <strong>LCV</strong>
                                        <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                    </div>

                                </div>
                            </div>
                            <span class="mltpl-tag">Multiple Airlines</span>
                        </div>

                        <div class="aditional-features">
                            <ul>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating4" checked>
                                        <label class="custom-control-label" for="rating4">
                                            Food included
                                        </label>

                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating5" checked>
                                        <label class="custom-control-label" for="rating5">
                                            Multi checking
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating6" checked>
                                        <label class="custom-control-label" for="rating6">
                                            Long Layover
                                        </label>
                                        <span class="hrs">9:30hr</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="fare-book">
                            <div class="fare">
                                <strong>$ 4,235</strong>
                                <span>Moderate price</span>
                                <span class="tag-refund bdr-rds50">refundable</span>
                            </div>
                            <a href="flight-seatbooking.html" class="booking">
                                <!-- <button class="submit"><span>Book now</span></button> -->
                                <button type="submit" class="submit"><span>Book now</span></button>

                                <!-- Inspired by this dribbble post by Colin Garvin https://dribbble.com/shots/1426764-Submit-Button -->
                            </a>
                        </div>
                    </div>

                    <div class="listrow">
                        <div class="source-destination">
                            <figure class="cmpny-logo">
                                <img class="bdr-circle" src="{{asset('home/images/airline-logo4.jpg')}}" alt="img">
                                <figcaption>Austin Airlines</figcaption>
                            </figure>
                            <div class="src-dst">
                                <div class="src">
                                    <strong>LCV</strong>
                                    <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                </div>

                                <div class="tracking-line">
                                    <img src="{{asset('home/images/tracking-line.png')}}" alt="img" />
                                </div>

                                <div class="src">
                                    <strong>LCV</strong>
                                    <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                </div>

                            </div>
                        </div>

                        <div class="aditional-features">
                            <ul>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating7" checked>
                                        <label class="custom-control-label" for="rating7">
                                            Food included
                                        </label>

                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating8" checked>
                                        <label class="custom-control-label" for="rating8">
                                            Multi checking
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating9" checked>
                                        <label class="custom-control-label" for="rating9">
                                            Long Layover
                                        </label>
                                        <span class="hrs">9:30hr</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="fare-book">
                            <div class="fare">
                                <strong>$ 4,235</strong>
                                <span>Moderate price</span>
                            </div>
                            <a href="flight-seatbooking.html" class="booking">
                                <!-- <button class="submit"><span>Book now</span></button> -->
                                <button type="submit" class="submit"><span>Book now</span></button>

                                <!-- Inspired by this dribbble post by Colin Garvin https://dribbble.com/shots/1426764-Submit-Button -->
                            </a>
                        </div>
                    </div>

                    <div class="listrow">
                        <div class="source-destination">
                            <figure class="cmpny-logo">
                                <img class="bdr-circle" src="{{asset('home/images/airline-logo4.jpg')}}" alt="img">
                                <figcaption>Austin Airlines</figcaption>
                            </figure>
                            <div class="src-dst">
                                <div class="src">
                                    <strong>LCV</strong>
                                    <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                </div>

                                <div class="tracking-line">
                                    <img src="{{asset('home/images/tracking-line.png')}}" alt="img" />
                                </div>

                                <div class="src">
                                    <strong>LCV</strong>
                                    <span> <i class="gt-right-arrow"></i> 12:25pm</span>
                                </div>

                            </div>
                        </div>

                        <div class="aditional-features">
                            <ul>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating10" checked>
                                        <label class="custom-control-label" for="rating10">
                                            Food included
                                        </label>

                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating11" checked>
                                        <label class="custom-control-label" for="rating11">
                                            Multi checking
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-checkbox">
                                        <i class="gt-right-arrow"></i>
                                        <input type="checkbox" class="custom-control-input" id="rating12" checked>
                                        <label class="custom-control-label" for="rating12">
                                            Long Layover
                                        </label>
                                        <span class="hrs">9:30hr</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="fare-book">
                            <div class="fare">
                                <strong>$ 4,235</strong>
                                <span>Moderate price</span>
                            </div>
                            <a href="flight-seatbooking.html" class="booking">
                                <!-- <button class="submit"><span>Book now</span></button> -->
                                <button type="submit" class="submit"><span>Book now</span></button>

                                <!-- Inspired by this dribbble post by Colin Garvin https://dribbble.com/shots/1426764-Submit-Button -->
                            </a>
                        </div>
                    </div>--}}

                    <!-- new row -->

                    <!-- ads row
                    <div class="adsrow">
                        <img src="{{asset('home/images/ads3.jpg')}}" alt="img" />
                    </div>-->

                </div>
            </div>
        </div>
    </div>



@endsection
