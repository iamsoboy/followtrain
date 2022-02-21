@extends('layouts.home.homepage')

@section('title', 'Blog Title')

@section('content')

    <div class="blog-details">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="blogheader">
                    <header>
                        <div class="traveldeals">
                            <strong>Travel deals</strong>
                            <span> Source: <a href="#">the-shooting-star.com</a></span>
                        </div>

                        <div class="blogtitle rellax" data-rellax-speed="-1" data-rellax-percentage="0">
                            <h2>One Year of Travelling Without a Home.</h2>

                            <div class="postdate">
                                <span class="pdicon"><img src="{{asset('home/images/edit-icon.png')}}" alt="img" /></span>
                                <strong class="date">25 december</strong>
                            </div>
                        </div>

                        <div class="sharethisblog">
                            <span>Share this blog with others</span>
                        </div>
                    </header>

                    <div class="blog-mainimg">
                        <img src="{{asset('home/images/blog-mainimg1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="blogbody">
                    <div class="blog-contentbox">

                        <h3>What’s life without a little adventure? I asked myself a little over a year ago. I had been living a semi-nomadic life since I quit my corporate job in 2011</h3>

                        <p>with a base in Delhi and an insatiable wanderlust. On the twenty-fifth day of August 2013, as I sat on the roof of my shabby Delhi apartment, staring at the dark starless sky, my heart filled with an unknown melancholy and my spirit craved more adventure. And just like that, I let go off my apartment, sold most of my belongings, stored some for a winter’s day (thank god!), and set out with my backpack.</p>

                        <p>For one year, I have moved, uninhibitedly, as much within as with my feet, like a bird without a nest, flapping my wings in the vast skies, swooping down on parts of the world that beckoned me. A soul without a compass on some days, a spirit that couldn’t be contained on others. Much has been learnt, more has been loved – and the one thing that has remained constant is my desire to keep moving.</p>

                        <h4> When people ask me about studying beyond a bachelor’s degree, I want to tell them that the road is my teacher.</h4>

                        <strong>On acceptance</strong>

                        <p>And what it teaches best is acceptance, life’s most underrated lesson. Like anyone who wants to see the world, I’ve dreamt of seeing all of it. But lingering on a little longer in places like South Australia, Northern Thailand, Auroville, Kumaon and the interiors of Goa has allowed me to observe the little whimsies of life beyond just a shallow peek. I have come to accept that I can’t experience everything in this lifetime, but what I can, I will experience deeply.</p>


                        <strong>On relationships</strong>
                        <p>I have never been a fan of obligatory or legalized relationships. And this year on the road has taught me that there is no better remedy for a tired, worn-out, misunderstood soul than swapping your deepest, darkest secrets with someone who was a mere stranger days ago. Truth is, sometimes it’s easier to bare your heart to a stranger.</p>


                        <div class="photo-tour">
                            <strong>Lests have a look at the journey</strong>
                            <ul>
                                <li> <img src="{{asset('home/images/photo-tour1.jpg')}}" alt=""> </li>
                                <li> <img src="{{asset('home/images/photo-tour2.jpg')}}" alt=""> </li>
                                <li> <img src="{{asset('home/images/photo-tour3.jpg')}}" alt=""> </li>
                                <li> <img src="{{asset('home/images/photo-tour4.jpg')}}" alt=""> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="aside-author">

                        <div class="author-dtls">
                            <div class="author-id">
                                <span class="author-pic"> <img src="{{asset('home/images/author-pic1.jpg')}}" alt=""> </span>
                                <div class="name-desig">
                                    <strong>Shivya Nath</strong>
                                    <span>Travel Photographer</span>
                                </div>
                            </div>
                            <p>Hello! I'm Shivya Nath. In 2011, at age 23, I quit my corporate life with a dream of traveling the globe. 2 years later, I packed up my life into a backpack and decided to hit the road indefinitely.</p>

                            <a class="btn-knmore" href="#">know more</a>
                        </div>

                        <div class="news-tags htxt">
                            <h4><span> all tags </span></h4>
                            <ul class="tags">
                                <li class="tag-item"> <a href="#"> Travel </a> </li>
                                <li class="tag-item"> <a href="#"> Photography </a> </li>
                                <li class="tag-item"> <a href="#"> Wildlife </a> </li>
                                <li class="tag-item"> <a href="#"> Treck </a> </li>
                                <li class="tag-item"> <a href="#"> Documentary </a> </li>
                                <li class="tag-item"> <a href="#"> blogs </a> </li>
                                <li class="tag-item"> <a href="#"> news </a> </li>
                                <li class="tag-item"> <a href="#"> Mountains </a> </li>
                                <li class="tag-item"> <a href="#"> Space </a> </li>
                                <li class="tag-item"> <a href="#"> invention </a> </li>
                                <li class="tag-item"> <a href="#"> creature </a> </li>
                                <li class="tag-item"> <a href="#"> nature </a> </li>
                            </ul>
                        </div>

                        <div class="recent-post-author htxt">
                            <h4><span> Recent post by Author </span></h4>
                            <ul class="rc-post">
                                <li class="rc-post-item">
                                    <span> <img src="{{asset('home/images/rcpost1.jpg')}}" alt=""> </span>
                                    <strong>All you need to know about the Jungle Safari at Corbett National Park</strong>
                                </li>
                                <li class="rc-post-item">
                                    <span> <img src="{{asset('home/images/rcpost2.jpg')}}" alt=""> </span>
                                    <strong>A Taste of Adventure & Spice in Thekkady with Carmelia Haven Resort</strong>
                                </li>
                                <li class="rc-post-item">
                                    <span> <img src="{{asset('home/images/rcpost3.jpg')}}" alt=""> </span>
                                    <strong>Is Tso Moriri Lake in Leh better than Pangong Lake?</strong>
                                </li>
                                <li class="rc-post-item">
                                    <span> <img src="{{asset('home/images/rcpost4.jpg')}}" alt=""> </span>
                                    <strong>7 Things Which Can Go Wrong During a Holiday</strong>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="blogfooter">
                    <h3>React this news</h3>

                    <ul class="share-review">
                        <li>
                            <span><img src="{{asset('home/images/icons/smile.svg')}}" alt="img" /></span>
                            Like it
                            <span class="rcount">0</span>
                        </li>
                        <li class="active">
                            <span><img src="{{asset('home/images/icons/love-white.svg')}}" alt="img" /> </span>
                            love it
                            <span class="rcount">+1</span>
                        </li>
                        <li>
                            <span><img src="{{asset('home/images/icons/soso.svg')}}" alt="img" /> </span>
                            so, so
                            <span class="rcount">0</span>
                        </li>
                        <li>
                            <span><img src="{{asset('home/images/icons/notlike.svg')}}" alt="img" /> </span>
                            not Like it
                            <span class="rcount">0</span> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="comment-area inner-sec-gap">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <div class="reaction sticky">
                    <h4>Peoples reactions</h4>
                    <ul class="ppl-reaction">
                        <li>
                            <span><img src="{{asset('home/images/icons/smile.svg')}}" alt="img" /></span>
                            2548 People likes
                        </li>
                        <li>
                            <span><img src="{{asset('home/images/icons/love.svg')}}" alt="img" /> </span>
                            1245 People loves
                        </li>
                        <li>
                            <span><img src="{{asset('home/images/icons/soso.svg')}}" alt="img" /></span>
                            545 People <br /> feels so so
                        </li>
                        <li>
                            <span><img src="{{asset('home/images/icons/notlike.svg')}}" alt="img" /> </span>
                            78 People  <br /> didn’t like it
                        </li>
                    </ul>
                </div>

                <div class="comments-wraper">
                    <header>
                        <div class="cmnts-reaction">
                            <div class="tot-cmnts">
                                <strong>24</strong>
                                <span>Favourte Comments</span>
                            </div>
                            <div class="tot-reaction">
                                <strong>3245</strong>
                                <span>Reactions</span>
                            </div>
                        </div>
                        <p>These are the top most comments of the week which has got most of the likes and reactions and reply.</p>
                    </header>

                    <ul class="cmnts-list">
                        <li>
                            <span> <img src="{{asset('home/images/author.jpg')}}" alt=""> </span>
                            <div class="user-cap">
                                <strong>Stacey Underwood</strong>
                                <span>Traveller</span>
                            </div>
                            <p>I have never been a fan of obligatory or legalized relationships. And this year on the road has taught me that there is no better remedy for a tired, worn-out</p>
                            <a class="btn-reply" href="#"> <span>reply</span> </a>
                        </li>
                        <li>
                            <span> <img src="{{asset('home/images/author1.jpg')}}" alt=""> </span>
                            <div class="user-cap">
                                <strong>Stacey Underwood</strong>
                                <span>Traveller</span>
                            </div>
                            <p>I have never been a fan of obligatory or legalized relationships. And this year on the road has taught me that there is no better remedy for a tired, worn-out</p>
                            <a class="btn-reply" href="#"> <span>reply</span> </a>

                            <ul class="sub-cmnts-list">
                                <li>
                                    <span> <img src="{{asset('home/images/author.jpg')}}" alt=""> </span>
                                    <div class="user-cap">
                                        <strong>Stacey Underwood</strong>
                                        <span>Traveller</span>
                                    </div>
                                    <p>I have never been a fan of obligatory or legalized relationships. And this year on the road has taught me that there is no better remedy for a tired, worn-out</p>
                                    <a class="btn-reply" href="#"> <span>reply</span> </a>
                                </li>

                            </ul>
                        </li>


                    </ul>

                </div>

                <div class="leave-cmnts-box lcb-type2 sticky">
                    <div class="form-container">
                        <h4>Write your comment here</h4>
                        <svg viewBox="5 60 300 300">
                            <defs>
                                <linearGradient
                                    id="linearGradient"
                                    x1="13"
                                    y1="193.49992"
                                    x2="307"
                                    y2="193.49992"
                                    gradientUnits="userSpaceOnUse">
                                    <stop
                                        style="stop-color:#ff00ff;"
                                        offset="0"
                                        id="stop876" />
                                    <stop
                                        style="stop-color:#ff0000;"
                                        offset="1"
                                        id="stop878" />
                                </linearGradient>
                            </defs>
                            <path d="
                      m 5,120.00016 239.99984,-3.2e-4
                      c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35
                      h -239.99984
                      c 0,-0.0205 -25,4.01348 -25,50 0,34.48652 25,38.5 25,38.5
                      h 215
                      c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25
                      h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25
                      h 168.57143" />
                        </svg>
                        <form class="leave-cmntsform">
                            <input id="email" class="cmnts-input" type="email"   placeholder="Email id">
                            <textarea id="comments" class="cmnts-input" placeholder="Write your comment" ></textarea>
                            <button id="submit" class="btn-cmnts-submit"  type="button">Submit Now</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
