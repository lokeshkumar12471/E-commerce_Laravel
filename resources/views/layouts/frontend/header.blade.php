@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="bg-light">
    <div class="main-nav shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="gurdeep osahan designer">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto main-nav-left">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><i class="icofont-ui-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 top-search">
                        <button class="btn-link" type="submit"><i class="icofont-search"></i></button>
                        <input class="form-control mr-sm-2" type="search"
                            placeholder="Search for products, brands and more" aria-label="Search">
                    </form>
                    <ul class="navbar-nav ml-auto profile-nav-right">
                        @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link ml-0 dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="Generic placeholder image" src="{{ asset('frontend/img/user/1.png') }}"
                                        class="nav-osahan-pic rounded-pill"> My Account
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                                    <a class="dropdown-item" href="{{ route('profile') }}"><i
                                            class="icofont-ui-user"></i> My
                                        Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"><i
                                            class="icofont-logout"></i>
                                        Logout</a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login_register') }}">Login/Sign Up</a>
                            </li>
                        @endif

                        <li class="nav-item cart-nav">
                            <a class="nav-link" href="{{ route('profile') . '#wish-list' }}">
                                <i class="icofont-heart"></i></i> WishList
                                @if (Auth::check() && Auth::id())
                                    @if ($wishlistcount > 0)
                                        <span class="badge badge-danger">
                                            {{ $wishlistcount }}
                                        </span>
                                    @endif
                                @endif
                            </a>
                        </li>
                        <li class="nav-item cart-nav">
                            <a data-toggle="offcanvas" class="nav-link" href="#">
                                <i class="icofont-basket"></i> Cart
                                @if (Auth::check() && Auth::id())
                                    @if ($checkcount > 0)
                                        <span class="badge badge-danger">
                                            {{ $checkcount }}
                                        </span>
                                    @endif
                                @endif
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
