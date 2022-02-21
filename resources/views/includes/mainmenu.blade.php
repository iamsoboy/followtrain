<!-- nav menu -->
<div class="cntrlogo-navmenu clearfix">
    <div class="container-fluid">
        <div class="ctrl-wraper2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logo-center" href="{{route('index')}}">
                     <img src="{{asset('home/images/logo.png')}}" alt="logo" />
                    <span class="animated-logo"></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button type="button" class="partial-nav-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}">Home </a>
                        </li>
                        <li class="nav-item {{ Request::is('about') ? 'active' : 'none' }}">
                            <a class="nav-link" href="{{route('about.index')}}">about us</a>
                        </li>
                        <li class="nav-item {{ Request::is('services') ? 'active' : 'none' }}">
                            <a class="nav-link" href="{{route('services.index')}}">services</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog') ? 'active' : 'none' }}">
                            <a class="nav-link" href="{{route('blog.index')}}">news</a>
                        </li>
                        <li class="nav-item {{ Request::is('contact-us') ? 'active' : 'none' }}">
                            <a class="nav-link" href="{{route('contact.index')}}">contact</a>
                        </li>
                        <li class="nav-item {{ Request::is('login') ? 'active' : 'none' }}">
                            <a class="nav-link" href="{{route('login')}}">login</a>
                        </li>
                        <li class="nav-item {{ Request::is('offers') ? 'active' : 'none' }}">
                            <a class="nav-link" href="{{route('offers.index')}}">offers</a>
                        </li>
                        <li class="nav-item">

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
