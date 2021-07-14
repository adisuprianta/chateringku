
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="{{asset('assets/img/icon/search.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/img/icon/heart.png')}}" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="{{route('keranjang')}}"><img src="{{asset('assets/img/icon/cart.png')}}" alt=""> 
                <span>
                @auth
                @if(json_decode(app('request')->cookie('dw-carts'), true))
                    {{count(json_decode(app('request')->cookie('dw-carts'), true))}}
                @else
                    0
                @endif
                @else
                0   
                @endauth
                </span></a>
                <div class="cart__price">Cart: <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <img src="{{asset('assets/img/Logo_Catering.png')}}" height="80px" width="120px" alt="">
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                            @if(Auth::check())
                            <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle text-center pr-3 nav-link bg-transparent text-dark" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user-circle text-dark"></i> {{Auth::user()->name}}
                                </a>

                                <div class="dropdown-menu item-dropdown" aria-labelledby="dropdownMenuLink">
                                    <!-- dropdown profile -->
                                   
                                    <!-- dropdown Logout -->
                                    <a class="dropdown-item nav-link" href="{{url('/profile')}}" >

                                                <i class="fa fa-user-circle mr-3 ml-1"></i>Profile


                                    </a>
                                    <a class="dropdown-item nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" >
                                            <i class="fa fa-power-off mr-3 ml-1"></i> Logout

                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                            </ul>
                            @else
                                <ul>
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                    <li >
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                </ul>
                            @endif
                            </div>
                            <div class="header__logo">
                                <img src="{{asset('assets/img/Logo_Catering.png')}}" height="80px" width="120px" alt="">
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="{{asset('assets/img/icon/search.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/img/icon/heart.png')}}" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="{{route('keranjang')}}"><img src="{{asset('assets/img/icon/cart.png')}}" alt=""> <span>0</span></a>
                                    <div class="cart__price">Cart: <span>$0.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <!-- <li><a href="#">Kategori</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./wisslist.html">Wisslist</a></li>
                                    <li><a href="./Class.html">Class</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="">Pembayaran</a></li>
                            <li><a href="">Cara Memesan Menu</a></li>

                            <li><a href="">Tentang Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->