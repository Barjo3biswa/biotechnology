<header id="header" class="header">
    <div class="header-top p-0 bg-lighter xs-text-center">
        <div class="container pt-0 pb-0">
            <div class="row">
                <div class="col-sm-4 col-md-6 col-md-offset-2-right1">
                    <div class="logo-div">
                        <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                            <img src="./new-images/logo-removebg-preview.png" alt="" height="60"
                                style="background: #fff;
                width: 73px;
                margin-right: 12px;">
                            <h3 style="color: #5d9b46;">The Assam Biotechnology Council</h3>
                        </a>
                    </div>
                </div>

                {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li> --}}


                <div class="col-sm-4 col-md-6">
                    {{-- <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border m-0" style="float: right;">
                            <div class="mt-10 mb-10 flip sm-text-center">
                                <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                        class="fa fa-envelope text-theme-colored font-18"></i> Mail Us Today
                                </div>
                                <a href="#" class="font-12 text-gray"> info@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border m-0" style="float: right;">
                            <div class="mt-10 mb-10 flip sm-text-center">
                                <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                        class="fa fa-map-marker text-theme-colored font-18"></i> Our Location
                                </div>
                                <a href="#" class="font-12 text-gray"> Guwahati, Assam</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xs-12 col-sm-4 col-md-12">
                        <div class="widget no-border m-0" style="float: right;">
                            <div class="mt-10 mb-10 flip sm-text-center">
                                <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                        class="fa fa-user text-theme-colored font-18"></i>
                                        {{ Auth::user()->name }}</div>
                                {{-- <a href="#" class="font-12 text-gray"> Call us for more details</a> --}}
                                <a class="font-12 text-gray" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
