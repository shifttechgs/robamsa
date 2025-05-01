<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="index.html">
                <i class="iconly-Home icli"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="javascript:void(0)">
                <i class="iconly-Category icli js-link"></i>
                <span>Category</span>
            </a>
        </li>

        <li>
            <a href="search.html" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Search</span>
            </a>
        </li>

        <li>
            <a href="wishlist.html" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>My Wish</span>
            </a>
        </li>

        <li>
            <a href="cart.html">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>Cart</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->
<!-- Header Start -->
<header class="sticky-header sticky main-header">
    <div class="header-top">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 d-xxl-block d-none">
                    <div class="top-left-header">
                        <i class="iconly-Location icli text-white"></i>
                        <span class="text-white">1 Stepney Rd, Parklands, CapeTown, SA</span>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                    <div class="header-offer">
                        <div class="notification-slider">
                            <div>
                                <div class="timer-notification">
                                    <h6><strong class="me-1">Welcome to RobamSA!</strong>Something you love is now on sale!.<strong class="ms-1"><a onclick="location.href = '{{ route('shopProducts') }}';" class="text-white">Buy Now
                                                !</a>
                                        </strong>

                                    </h6>
                                </div>
                            </div>

{{--                            <div>--}}
{{--                                <div class="timer-notification">--}}
{{--                                    <h6>Something you love is now on sale!--}}
{{--                                        <a onclick="location.href = '{{ route('shopProducts') }}';" class="text-white">Buy Now--}}
{{--                                            !</a>--}}
{{--                                    </h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <ul class="about-list right-nav-about">
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-language"
                                        data-bs-toggle="dropdown" >
                                    <img src="../assets/images/country/united-states.png"
                                         class="img-fluid blur-up lazyload" alt="">
                                    <span>English</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="english">
                                            <img src="../assets/images/country/united-kingdom.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <span>English</span>
                                        </a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a class="dropdown-item" href="javascript:void(0)" id="france">--}}
{{--                                            <img src="../assets/images/country/germany.png"--}}
{{--                                                 class="img-fluid blur-up lazyload" alt="">--}}
{{--                                            <span>Germany</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="dropdown-item" href="javascript:void(0)" id="chinese">--}}
{{--                                            <img src="../assets/images/country/turkish.png"--}}
{{--                                                 class="img-fluid blur-up lazyload" alt="">--}}
{{--                                            <span>Turki</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </li>
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-dollar"
                                        data-bs-toggle="dropdown">
                                    <span>Rand</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end sm-dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" id="aud" href="javascript:void(0)">Rand</a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a class="dropdown-item" id="eur" href="javascript:void(0)">EUR</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="dropdown-item" id="cny" href="javascript:void(0)">CNY</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button me-2" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                        </button>
                        <a onclick="location.href = '{{ url('/shop') }}';" class="web-logo nav-logo">
                            <img src="../assets/images/logo/vape_shop.png" class="img-fluid blur-up lazyload" alt="">
                        </a>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="middle-box">
                                    <div class="location-box">
                                        <button class="btn location-button" data-bs-toggle="modal"
                                                data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                            <span class="locat-name">Your Location</span>
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </div>

                                    <div class="search-box">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="I'm searching for...">
                                            <button class="btn" type="button" id="button-addon2">
                                                <i data-feather="search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box">
                            <div class="search-full">
                                <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                </div>
                            </div>
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side">
                                    <a onclick="location.href = '{{ route('dashboard') }}';" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <div class="onhover-dropdown header-badge">
                                        <button type="button" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="shopping-cart"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle badge">{{ count((array) session('cart')) }}
                                                    <span class="visually-hidden">unread messages</span>
                                                </span>
                                        </button>
{{--                                        {{ dd(session('cart')) }}--}}
                                        <div class="onhover-div">
                                            <ul class="cart-list">
                                                @if(session('cart'))

                                                    @foreach(session('cart') as $id => $products)
                                                <li class="product-box-contain">
                                                    <div class="drop-cart">
                                                        <a class="drop-image">
                                                            <img src="{{ asset('storage/images/' . $products['image']) }}"
                                                                 class="img-fluid"
                                                                 alt="{{ $products->name ?? 'Product Image' }}">
                                                        </a>

                                                        <div class="drop-contain">
                                                            <a>
                                                                <h5>{{ $products['name'] }}</h5>
                                                            </a>
                                                            <h6><span>{{$products['quantity']}} x</span> ${{ $products['price'] }}</h6>
{{--                                                            <button class="remove-from-cart" data-id="{{ $id }}">--}}
{{--                                                                <i data-feather="trash"></i>--}}
{{--                                                            </button>--}}
                                                            <button class="close-button close_button remove-from-cart" href="javascript:void(0)" data-id="{{ $id }}">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
{{--                                                            <a class="remove-from-cart remove close_button" href="javascript:void(0)" data-id="{{ $id }}">Remove</a>--}}
                                                        </div>
                                                    </div>
                                                </li>



                                                    @endforeach

                                                @endif
                                            </ul>

                                            <div class="price-box">
                                                @php $total = 0 @endphp

                                                @foreach((array) session('cart') as $id => $products)

                                                    @php $total += $products['price'] * $products['quantity'] @endphp

                                                @endforeach
                                                <h5>Total :</h5>
                                                <h4 class="theme-color fw-bold">$ {{ $total }}</h4>
                                            </div>

                                            <div class="button-group">
                                                <a href="{{ route('cart') }}" class="btn btn-sm cart-button">View Cart</a>
                                                @if(Auth::check())
                                                    <a href="{{ route('checkout') }}" class="btn btn-sm cart-button theme-bg-color text-white">Checkout</a>
                                                @else
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-sm cart-button theme-bg-color text-white">Login to Checkout</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>Hello,</h6>
                                            @auth
                                                <h5><a href="{{ route('customer.dashboard') }}">My Account</a></h5>
                                            @else
                                                <h5>Guest</h5>
                                            @endauth
                                        </div>
                                    </div>

                                    <div class="onhover-div onhover-div-login">
                                        @auth
                                            <!-- If user is authenticated, show "My Account" link -->
                                            <ul class="user-box-name">
                                                <li class="product-box-contain">
                                                    <a href="{{ route('customer.dashboard') }}">My Account</a>
                                                </li>
                                                <li class="product-box-contain">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                                </li>
                                            </ul>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @else
                                            <!-- If user is not authenticated, show login, register and forgot password -->
                                            <ul class="user-box-name">
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                                                </li>

{{--                                                <li class="product-box-contain">--}}
{{--                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" >Forgot Password</a>--}}
{{--                                                    href="{{ route('password.request') }}"--}}
{{--                                                </li>--}}
                                            </ul>
                                        @endauth
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container-fluid-lg">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="header-nav">--}}
{{--                    <div class="header-nav-left">--}}
{{--                        <button class="dropdown-category dropdown-category-2">--}}
{{--                            <i data-feather="align-left"></i>--}}
{{--                            <span>All Categories</span>--}}
{{--                        </button>--}}

{{--                        <div class="category-dropdown">--}}
{{--                            <div class="category-title">--}}
{{--                                <h5>Categories</h5>--}}
{{--                                <button type="button" class="btn p-0 close-button text-content">--}}
{{--                                    <i data-feather="arrow"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}

{{--                            <ul class="category-list">--}}
{{--                                @foreach($activeCategories as $category)--}}
{{--                                    <li class="onhover-category-list">--}}
{{--                                        <a href="{{ route('shopProducts', ['category' => $category->id]) }}" class="category-name">--}}
{{--                                            <h6>{{ $category->category_name }}</h6>--}}
{{--                                            <i class="fa-solid fa-angle-right"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}




{{--                    <div class="header-nav-middle">--}}
{{--                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">--}}
{{--                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">--}}
{{--                                <div class="offcanvas-header navbar-shadow">--}}
{{--                                    <h5>Menu</h5>--}}
{{--                                    <button class="btn-close lead" type="button"--}}
{{--                                            data-bs-dismiss="offcanvas"></button>--}}
{{--                                </div>--}}
{{--                                <div class="offcanvas-body">--}}
{{--                                    <ul class="navbar-nav">--}}


{{--                                        <li class="nav-item dropdown">--}}
{{--                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"--}}
{{--                                               data-bs-toggle="dropdown">Shop</a>--}}


{{--                                        </li>--}}

{{--                                        <li class="nav-item dropdown">--}}
{{--                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"--}}
{{--                                               data-bs-toggle="dropdown">FAQ</a>--}}


{{--                                        </li>--}}



{{--                                        <li class="nav-item dropdown">--}}
{{--                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"--}}
{{--                                               data-bs-toggle="dropdown">Help Center</a>--}}

{{--                                        </li>--}}



{{--                                        <li class="nav-item dropdown">--}}
{{--                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"--}}
{{--                                               data-bs-toggle="dropdown">Seller</a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="seller-become.html">Become a--}}
{{--                                                        Seller</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="seller-dashboard.html">Seller--}}
{{--                                                        Dashboard</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="seller-detail.html">Seller--}}
{{--                                                        Detail</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="seller-detail-2.html">Seller--}}
{{--                                                        Detail 2</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="seller-grid.html">Seller Grid</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="seller-grid-2.html">Seller Grid--}}
{{--                                                        2</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="header-nav-right">--}}
{{--                        <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">--}}
{{--                            <i data-feather="zap"></i>--}}
{{--                            <span>Deal Today</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</header>

<!-- Header End -->

{{--<!-- mobile fix menu start -->--}}
{{--<div class="mobile-menu d-md-none d-block mobile-cart">--}}
{{--    <ul>--}}
{{--        <li class="active">--}}
{{--            <a href="index.html">--}}
{{--                <i class="iconly-Home icli"></i>--}}
{{--                <span>Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="mobile-category">--}}
{{--            <a href="javascript:void(0)">--}}
{{--                <i class="iconly-Category icli js-link"></i>--}}
{{--                <span>Category</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="search.html" class="search-box">--}}
{{--                <i class="iconly-Search icli"></i>--}}
{{--                <span>Search</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="wishlist.html" class="notifi-wishlist">--}}
{{--                <i class="iconly-Heart icli"></i>--}}
{{--                <span>My Wish</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="cart.html">--}}
{{--                <i class="iconly-Bag-2 icli fly-cate"></i>--}}
{{--                <span>Cart</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
{{--<!-- mobile fix menu end -->--}}


