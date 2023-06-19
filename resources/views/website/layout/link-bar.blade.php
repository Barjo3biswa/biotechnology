<div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
        <div class="container">
            <nav id="menuzord-right" class="menuzord orange">
                <!-- <a class="menuzord-brand pull-left flip mt-15" href="javascript:void(0)">
            <img src="images/logo-wide.png" alt="">
          </a> -->
                <ul class="menuzord-menu" style="float:left;">
                    <li class="{{Request::is('home-page')? 'active' : ''}}"><a href="{{ route('home-page') }}">Home</a>
                    </li>
                    <li class="{{Request::is('about-us')? 'active' : ''}}"><a href="{{ route('about-us') }}">About Us</a></li>
                    <li class="{{Request::is('Preamble')? 'active' : ''}}">
                        <a href="#">Preamble</a>
                        <ul class="dropdown">
                            <li><a href="{{route('Preamble')}}">Biotechnology: A tool for socio-economic development</a></li>
                            {{-- <li><a href="#">The biotechnology potential of Assam</a></li>
                            <li><a href="#">Status of Biotechnology in Assam</a></li>
                            <li><a href="#">Biotechnology Initiative in Assam</a></li>
                            <li><a href="#">Key drivers and specific features for biotechnology policy
                                    formulation</a></li> --}}
                        </ul>
                    </li>
                    <li class="{{Request::is('policy')? 'active' : ''}}">
                        <a href="{{route('policy')}}">The Policy</a>
                    </li>
                    <li class="{{Request::is('trust')? 'active' : ''}}"><a href="{{route('trust')}}">Thrust Areas</a></li>
                    <li class="{{Request::is('apex-committee')||Request::is('exe-committee')? 'active' : ''}}">
                        <a href="#">COMMITTEES</a>
                        <ul class="dropdown">
                            <li><a href="{{route('apex-committee')}}">Apex Committee</a></li>
                            <li><a href="{{route('exe-committee')}}">Executive Committee</a></li>
                        </ul>
                    </li>
                    <li class="{{Request::is('contact')? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
