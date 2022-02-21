@extends('layouts.home.homepage')

@section('title', 'Latest News')

@section('content')

    <div class="news-gallery inner-sec-gap">
        <div class="container-fluid">
            <div class="ctrl-wraper2">

                <header>
                    <h1>Whats happen!</h1>
                    <span><strong>worlds</strong>   travel news and blog all in one place</span>
                </header>

                <div class="news-gallery-wrapper">
                    <div class="blogitem-type1">
                        <div class="blogimg">
                            <img src="{{asset('home/images/blog-img1.jpg')}}" alt="">
                        </div>
                        <div class="blogcntbox">
                            <h4><a href="blog-details.html"><strong>ISTANBUL ON A BUDGET:</strong> Budget Travel Guide & Itinerary 2017</a></h4>
                            <div class="author">
                                <div class="authorimg"><img src="{{asset('home/images/author.jpg')}}" alt="img"></div>
                                <div class="authortitle">
                                    <strong>Jeannette Edwards</strong>
                                    <span>Real Blogger</span>
                                </div>
                            </div>
                        </div>
                        <div class="postdate">
                            <span class="pdicon"><img src="{{asset('home/images/edit-icon.png')}}" alt="img" /></span>
                            <strong class="date">25 december</strong>
                        </div>
                    </div>
                    <!-- blogitem-type1 end -->

                    <div class="blogitem-type2">

                        <div class="blogcntbox">
                            <h4><a href="blog-details.html">5 Travel Scares I Experienced and What I Learned From Them</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>

                            <ul class="blog-tags">
                                <li>travel</li>
                                <li>blog</li>
                                <li>photograpy</li>
                            </ul>

                            <div class="blogimg">
                                <img src="{{asset('home/images/blog-img2.jpg')}}" alt="">
                            </div>

                        </div>
                        <div class="postdate">
                            <span class="pdicon"><img src="{{asset('home/images/edit-icon.png')}}" alt="img" /></span>
                            <strong class="date">25 december</strong>
                        </div>
                    </div>
                    <!-- blogitem-type2 end -->

                    <div class="blogitem-type3">
                        <div class="blogimg">
                            <img src="{{asset('home/images/blog-img3.jpg')}}" alt="">
                        </div>

                        <div class="blogcntbox">
                            <h4> <a href="blog-details.html"><span>07</span>Things to Do in Paris</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>

                            <div class="author">
                                <div class="authorimg"><img src="{{asset('home/images/author.jpg')}}" alt="img"></div>
                                <div class="authortitle">
                                    <strong>Jeannette Edwards</strong>
                                    <span>Real Blogger</span>
                                </div>
                            </div>
                        </div>

                        <div class="postdate">
                            <span class="pdicon"><img src="{{asset('home/images/edit-icon.png')}}" alt="img" /></span>
                            <strong class="date">25 december</strong>
                        </div>
                    </div>
                    <!-- blogitem-type3 end -->

                    <div class="column">
                        <div class="blogitem-type4">
                            <div class="blogimg">
                                <img src="{{asset('home/images/blog-img4.jpg')}}" alt="">
                            </div>
                            <div class="blogcntbox">
                                <h4><a href="blog-details.html"><strong>SCHENGEN VISA via GREEK EMBASSY: </strong>Requirements & Steps for Filipinos</a></h4>
                                <div class="author">
                                    <div class="authorimg"><img src="{{asset('home/images/author1.jpg')}}" alt="img"></div>
                                    <div class="authortitle">
                                        <strong>Jeannette Edwards</strong>
                                        <span>Real Blogger</span>
                                    </div>
                                </div>
                                <div class="postdate">
                                    <span class="pdicon"><img src="{{asset('home/images/edit-icon.png')}}" alt="img" /></span>
                                    <strong class="date">25 december</strong>
                                </div>
                            </div>

                        </div>
                        <!-- blogitem-type1 end -->
                        <div class="ads">
                            <!-- <img src="{{asset('home/images/ads1.jpg')}}" alt="img"> -->
                            <img src="{{asset('home/images/ads1.jpg')}}" alt="img">
                        </div>
                    </div>

                    <div class="blogitem-type5">
                        <div class="bi-wraper">
                            <header>
                                <div class="blogimg">
                                    <img src="{{asset('home/images/blog-img3.jpg')}}" alt="">
                                </div>
                                <div class="rightcnt">
                                    <strong class="date">25 december</strong>
                                    <ul class="blog-tags">
                                        <li>travel</li>
                                        <li>blog</li>
                                        <li>photograpy</li>
                                    </ul>
                                    <div class="author">
                                        <div class="authorimg"><img src="{{asset('home/images/author1.jpg')}}" alt="img"></div>
                                        <div class="authortitle">
                                            <strong>Amber Sandoval</strong>
                                        </div>
                                    </div>
                                </div>
                            </header>

                            <div class="blogcntbox">
                                <h4> <a href="blog-details.html">The Best Blogs for Healthy Recipes.</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                                <a class="bn-readmore" href="blog-details.html">road more</a>
                            </div>

                            <div class="postdate">
                                <span class="pdicon"><img src="{{asset('home/images/edit-icon.png')}}" alt="img" /></span>
                            </div>
                        </div>



                    </div>
                    <!-- blogitem-type5 end -->

                    <span class="traveller-txt"><img src="{{asset('home/images/Traveller.png')}}" alt=""></span>

                </div>

            </div>
        </div>

        <span class="dottedbg-pattern dottedtext blackdots transparent layerback right rellax" data-rellax-speed="-5" data-rellax-percentage="0" data-text="go"> go </span>
    </div>

    <div class="travell-news inner-sec-gap">
        <div class="ctrl-wraper2">
            <header>
                <span>#stayupdated</span>
                <h2>travel news</h2>
            </header>

            <div class="newsarea clearfix">

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news1.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news2.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news3.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news4.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news5.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news6.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news7.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news8.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news1.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

                <div class="tn-item">
                    <figure>
                        <img src="{{asset('home/images/travell-news2.jpg')}}" alt="">
                        <figcaption>
                            <span class="tnpd">posted on <span class="hilight">21 september</span> </span>
                            <span>travel | Photograohy</span>
                            <strong>WHY TRAVEL MAKES YOU AWESOME</strong>
                        </figcaption>
                    </figure>
                </div>

            </div>

        </div>
    </div>

@endsection
