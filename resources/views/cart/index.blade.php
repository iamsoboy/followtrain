@extends('layouts.home.homepage')

@section('title', 'Booking Cart')

@section('content')

    <!-- section search result -->
    <div class="bst-srcrslt">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                @if (session()->has('success_message'))
                    <div class="alert alert-success mb-6">
                        <strong>{{session()->get('success_message')}}</strong>
                    </div>
                @endif
                @if (count($errors) > 0 )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            @forelse(Cart::content() as $item)
                <div class="tickets-infosec1 ticket-shapes">
                    <div class="left">
                        <ul class="trip-options">
                            <li class="active">
                                <form action="{{route('cart.destroy', Crypt::encrypt($item->rowId))}}" method="POST" class="cartform-btn">
                                    @method('delete')
                                    @csrf
                                <button type="submit" class="btn btn-outline-danger btn-lg">Cancel</button>
                                </form>
                            </li>
                            <li> <a>one way</a></li>
                        </ul>
                        <div class="venue-desti">
                            <div class="source-city">
                                <span class="city-img"><img src="{{asset('home/images/city-img1.jpg')}}" alt="img"></span>
                                <div class="city-dtls">
                                    <strong class="citycode">
                                      @if($item->options['location'] == 'Kubwa, Abuja')
                                        ABJ
                                        @elseif($item->options['location'] == 'Rigasa, Kaduna')
                                        KAD
                                        @elseif($item->options['location'] == 'Asham, Kaduna')
                                        KAD
                                        @elseif($item->options['location'] == 'Idu, Kaduna')
                                        ABJ
                                      @endif
                                    </strong>
                                    <span class="city-airport">( {{$item->options['location']}} )</span>
                                </div>

                            </div>

                            <span class="switch-icon"><img src="{{asset('home/images/switch-icon.png')}}" alt="img"></span>

                            <div class="destination-city">
                                <span class="city-img"><img src="{{asset('home/images/city-img2.jpg')}}" alt="img"></span>
                                <div class="city-dtls">
                                    <strong class="citycode">
                                        @if($item->options['destination'] == 'Kubwa, Abuja')
                                            ABJ
                                        @elseif($item->options['destination'] == 'Rigasa, Kaduna')
                                            KAD
                                        @elseif($item->options['destination'] == 'Asham, Kaduna')
                                            KAD
                                        @elseif($item->options['destination'] == 'Idu, Kaduna')
                                            ABJ
                                        @endif
                                    </strong>
                                    <span class="city-airport">( {{$item->options['destination']}} ) </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">


                        <strong class="booking-date"><span>{{$item->options['date']}}</strong>
                        <div class="psngr-choice-sec">
                            <p>Passengers choice selection</p>
                            <div class="psngr-dtls">
                                <ul>
                                    <li>
                                        <i class="gt-user-1"></i>
                                        <p>{{$item->qty}}</p>
                                    </li>
                                    <li>
                                        <i class="gt-star"></i>
                                        <p>{{$item->options['ticket_class']}} Class </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="otherdtls">
                                <ul>
                                    <li class="bdr-rds20">
                                        <i class="refresh bdr-rds15 gt-clock"></i>
                                    {{\App\Trips::whereId($item->id)->pluck('departure_time')}}
                                    </li>
                                </ul>
                                <a class="tkct-available" href="#">Hurry Only 1 Seat available</a>

                            </div>
                        </div>
                    </div>
                </div>
            @empty
                        <div class="alert alert-success mb-6">
                            <strong>You're yet to Book for a Ride</strong>
                        </div>
            @endforelse

                <div class="pp-details">
                    <div class="psngr-dtls">
                        <h3>Passenger details</h3>
                        <div class="psngr-dtls-box">
                            <h4> <i class="gt-person"></i> Passenger Details</h4>
                            <!--<span class="close">x</span> -->

                            <form id="myform" name="myform" action="{{route('pay')}}" method="POST">
                            @csrf
                                <input class="inputype1" type="text" name="name" placeholder="Jean Mcdaniel" />

                                <input class="inputype1" type="text" name="email" placeholder="example@email.com" />

                                <select>
                                    <option>male</option>
                                    <option>female</option>
                                </select>

                                <!--<input class="dob" type="text" placeholder="16 Feb, 1988" /> -->
                                <div class="container">
                                    <div class="row">

                                    </div>

                                </div>
                                <div class="booking">
                                    <button class="btn-book-btn" type="submit">pay now</button>
                                    <!--<a class="btn-chkoutas-guest" href="#">Checkout as guest</a>-->
                                </div>
                            </form>
                        </div>
                        <!--<div class="psngr-dtls-box">
                            <h4> <i class="gt-person"></i> Passenger 02</h4>
                            <span class="close">x</span>
                            <form>
                                <input class="inputname" type="text" placeholder="Jean Mcdaniel" />

                                <select>
                                    <option>male</option>
                                    <option>female</option>
                                </select>

                                <input class="dob" type="text" placeholder="16 Feb, 1988" />

                            </form>
                        </div> -->
                    </div>
                    <div class="pymnt-dtls">
                        <h3>Passenger details</h3>
                        <div class="amt-payble">
                            <strong>Total amount payable</strong>
                            <span class="totpbl-amt">&#8358; {{Cart::total()}}</span>
                            <span class="rate-type-tag">Moderate rate</span>
                            <p>Inclusive of all tax</p>
                        </div>
                        <div class="breakups-wrapper">
                            <div class="breakups">
                                <h5>Breakups</h5>
                                @foreach(Cart::instance('default')->content() as $item)
                                <strong>Base Fare</strong>
                                <p> Adults ({{$item->qty}} x {{$item->price}}) &#8358; {{Cart::priceTotal()}}</p>
                                @endforeach
                                <strong>Surcharges</strong>
                                <p>Tax({{7.5}})% &#8358; {{Cart::tax()}}</p>
                            </div>

                        <!--    <div class="Cancellation">
                                <h5>Cancellation Fee</h5>

                                <strong>CCU-JFK (Qatar Airways)</strong>
                                <p>$11,284 for cancellations done between 0 hrs - 365 days to departure.* $ 649**</p>
                                <span>*Airline Cancellation Fee.</span>
                                <span>**Let’sGOTraveler</span>
                            </div>-->
                        </div>
                        <div class="pymnt-submit">
                            <a class="btn-loginnow" type="submit">login now</a>
                            <a class="btn-chkoutas-guest" href="#">Checkout as guest</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
