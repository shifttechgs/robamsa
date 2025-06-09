@extends("layouts.master")
@section("content")
    <div class="main ">
        <!-- Home Section Start -->
        <section class="home-section pt-2 ratio_50">
            <div class="container-fluid-lg">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none">
                        <div class="category-menu">
                            <h3>Shop By Category</h3>
                            <ul class="border-bottom-0">


                                @foreach($activeCategories as $category)
                                    <li>
                                        <div class="category-list d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">
                                                <a href="{{ route('shopProducts', ['category' => $category->id]) }}">
                                                    {{ $category->category_name }}
                                                </a>
                                            </h5>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>

                                        </div>
                                    </li>

                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div id="homeSlider" class="carousel slide col-xl-9 col-lg-8 ratio_50_1" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="home-contain furniture-contain-2" style="height: 500px;">
                                    <img src="../assets/images/furniture/banner/gadgets.jpg" class="d-block w-100 bg-img blur-up lazyload" style="height: 100%; object-fit: cover;" alt="">
                                    <div class="home-detail p-center-left mend-auto w-100">
                                        <div>
                                            <h6 style="color: rgb(1,3,17)">Exclusive Offer
                                                <span style="color: rgba(250, 45, 57, 0.67);">30% Off</span>
                                            </h6>
                                            <h1 class="text-uppercase poster-1 text-content furniture-heading">
                                               Ultimate Protection, <span class="daily">Sleek Design</span>
                                            </h1>
                                            <br>
                                            <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">
                                                Shop Now <i class="fa-solid fa-right-long ms-2 "></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item">
                                <div class="home-contain furniture-contain-2" style="height: 500px;">
                                    <img src="../assets/images/furniture/banner/sport.jpg" class="d-block w-100 bg-img blur-up lazyload" style="height: 100%; object-fit: cover;" alt="">
                                    <div class="home-detail p-center-left mend-auto w-100">
                                        <div>
                                            <h6 style="color: white">Special Deal
                                                <span style="color: rgba(250, 45, 57, 0.67);">50% Off</span>
                                            </h6>
                                            <h1 class="text-uppercase poster-1 text-content furniture-heading">
                                               Power Through <span class="daily">Every Workout</span>
                                            </h1>
                                            <br>
                                            <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">
                                                Shop Now <i class="fa-solid fa-right-long ms-2 "></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev custom-control" type="button" data-bs-target="#homeSlider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next custom-control" type="button" data-bs-target="#homeSlider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>



                </div>
            </div>
        </section>
        <!-- Home Section End -->


        <!-- Service Section Start -->
        <section class="service-section">
            <div class="container-fluid-lg">
                <div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
                    <div>
                        <div class="service-contain-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M112 0C85.5 0 64 21.5 64 48l0 48L16 96c-8.8 0-16 7.2-16 16s7.2 16 16 16l48 0 208 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L64 160l-16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l16 0 176 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L64 224l-48 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l48 0 144 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L64 288l0 128c0 53 43 96 96 96s96-43 96-96l128 0c0 53 43 96 96 96s96-43 96-96l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64 0-32 0-18.7c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7L416 96l0-48c0-26.5-21.5-48-48-48L112 0zM544 237.3l0 18.7-128 0 0-96 50.7 0L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/></svg>
                            <div class="service-detail">
                                <h3>Free Shipping</h3>
                                <h6 class="text-content">Free Shipping worldwide</h6>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="service-contain-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 48C141.1 48 48 141.1 48 256l0 40c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-40C0 114.6 114.6 0 256 0S512 114.6 512 256l0 144.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24l-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40L464 256c0-114.9-93.1-208-208-208zM144 208l16 0c17.7 0 32 14.3 32 32l0 112c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64l0 48c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-112c0-17.7 14.3-32 32-32l16 0z"/></svg>
                            <div class="service-detail">
                                <h3>24 x 7 Service</h3>
                                <h6 class="text-content">Online Service For 24 x 7</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="service-contain-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z"/></svg>
                            <div class="service-detail">
                                <h3>Online Pay</h3>
                                <h6 class="text-content">Online Payment Avaible</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="service-contain-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
                            <div class="service-detail">
                                <h3>Festival Offer</h3>
                                <h6 class="text-content">Super Sale Upto 50% off</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="service-contain-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                            <div class="service-detail">
                                <h3>100% Original</h3>
                                <h6 class="text-content">100% Money Back</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section End -->

        <!-- Product Fruit & Vegetables Section Start -->
        <section >
            <div class="container-fluid-lg">

                <div class="row  g-3">

                    <div class="col-xxl-9 col-xl-8">
                        <div>
{{--                        latest products available--}}
                        <div class="title title-flex">
                            <div>
                                <h2>Top Save Today</h2>
                                <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                                <p>Don't miss this opportunity at a special discount just for this week.</p>
                            </div>

                        </div>
                        <div class="product-box-slider-2 arrow-slider img-slider ">


                            @foreach ($products as $product)
                                <div>
                                    <div class="product-box product-box-bg wow fadeInUp ">
                                        <h6 style="color: white">
                                            <span style="color: rgba(250, 45, 57, 0.67);">50% Off</span>
                                        </h6>
                                        <div class="product-image">
                                            <a href="{{ route('product.details', ['id' => $product->id]) }}">
                                                <img src="{{ asset('storage/images/' . $product->image_code) }}"
                                                     class="img-fluid"
                                                     alt="{{ $product->name ?? 'Product Image' }}">


                                            </a>

                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name">
                                                    {{ $product->product_name }}
                                                </h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">R {{ $product->price }}</span>
                                                {{--                                            <del>28.56</del>--}}
                                            </h5>

                                            <div class="product-rating mt-2">

                                                <ul class="rating">
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"  class="fill"></i>
                                                    </li>
                                                </ul>
{{--                                                <h6 class="theme-color">In Stock</h6>--}}

                                            </div>

                                            <div class="add-to-cart-box bg-white">
                                                <button class="btn btn-add-cart addcart-button trigger-add-to-cart" data-url="{{ route('addToCart', $product->id) }}">
                                                    Add To Cart
                                                    <span class="add-icon bg-light-orange">
        <i class="fa-solid fa-plus"></i>
    </span>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach
                        </div>
                        </div>
                        <br>
                        <br>
{{--                        categories--}}
                        <div class="title">
                            <h2>Browse By Categories</h2>
                            <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                            <p>Top Categories Of The Week</p>
                        </div>


                        <div class="category-slider-2 product-wrapper no-arrow">
                            @foreach($activeCategories as $category)
                            <div>
                                <a href="{{ route('shopProducts', ['category' => $category->id]) }}"  class="category-box category-dark">
                                    <div>


                                        <h5>{{ $category->category_name }}</h5>
                                    </div>
                                </a>
                            </div>
                            @endforeach


                        </div>
{{--                        best selling products--}}
                        <br>

                        <div class="section-t-space section-b-space">
                            <div class="row g-md-4 g-3">
                                <div class="col-md-6">
                                    <div class="banner-contain hover-effect">
                                        <img src="../assets/images/furniture/banner/phonecase.jpg" class="bg-img blur-up lazyload"
                                             alt="">
                                        <div class="banner-details p-center-left p-4">
                                            <div>
                                                <h3 class="text-kaushan text-yellow">50% offer</h3>
                                                <h4 class="theme-color mb-2 fw-normal"><span
                                                        class="theme-color fw-bold">New
                                                    Elago Liquid</span> Silicone</h4>
                                                <a onclick="location.href = '{{ route('shopProducts') }}';"
                                            class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                            class="fa-solid fa-right-long ms-2 "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner-contain hover-effect">
                                        <img src="../assets/images/furniture/banner/phonecase-2.jpg" class="bg-img blur-up lazyload"
                                             alt="">
                                        <div class="banner-details p-center-left p-4">
                                            <div>
                                                <h3 class="text-kaushan text-yellow">50% offer</h3>
                                                <h4 class="theme-color mb-2 fw-normal"><span class="theme-color fw-bold">New
                                                    Elago Smooth</span> Silicone</h4>
                                                <a onclick="location.href = '{{ route('shopProducts') }}';"
                                            class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                            class="fa-solid fa-right-long ms-2 "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div >

                        <div class="title title-flex">
                            <div>
                                <h2>Sport & Training</h2>
                                <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                                <p>Discover the most loved and top-rated products.</p>
                            </div>

                        </div>
                        <div class="product-box-slider-2 arrow-slider img-slider ">


                            @foreach ($sports_training as $product)
                                <div>
                                    <div class="product-box product-box-bg wow fadeInUp ">
                                        <div class="product-image">
                                            <a href="{{ route('product.details', ['id' => $product->id]) }}">
                                                <img src="{{ asset('storage/images/' . $product->image_code) }}"
                                                     class="img-fluid"
                                                     alt="{{ $product->name ?? 'Product Image' }}">

                                            </a>

                                        </div>
                                        <div class="product-detail">
                                            <a href="">
                                                <h6 class="name">
                                                    {{ $product->product_name }}
                                                </h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">R {{ $product->price }}</span>
                                                {{--                                            <del>28.56</del>--}}
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"  class="fill"></i>
                                                    </li>
                                                </ul>

{{--                                                <h6 class="theme-color">In Stock</h6>--}}

                                            </div>

                                            <div class="add-to-cart-box bg-white">
                                                <button class="btn btn-add-cart addcart-button trigger-add-to-cart" data-url="{{ route('addToCart', $product->id) }}">
                                                    Add To Cart
                                                    <span class="add-icon bg-light-orange">
        <i class="fa-solid fa-plus"></i>
    </span>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                        <div class="p-sticky">

                            <div class="ratio_156 section-t-space">
                                <div class="home-contain hover-effect">
                                    <img src="../assets/images/furniture/banner/electronic.webp" class="bg-img blur-up lazyload" alt="">

                                    <div class="home-detail p-top-left home-p-medium">
                                        <div>
                                            <h2 class="mt-0 theme-color text-kaushan fw-normal">Exclusive</h2>
                                            <h3 class="furniture-content">Beats</h3>
                                            <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                                    class="fa-solid fa-right-long ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ratio_156 section-t-space">
                                <div class="home-contain hover-effect">
                                    <img src="../assets/images/furniture/banner/3.jpg" class="bg-img blur-up lazyload"
                                         alt="">
                                    <div class="home-detail p-top-left home-p-medium">
                                        <div>
                                            <h2 class="mt-0 theme-color text-kaushan fw-normal">Exclusive</h2>
                                            <h3 class="furniture-content">Furniture</h3>
                                             <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                        class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                                        class="fa-solid fa-right-long ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Fruit & Vegetables Section End -->

        <!-- Banner Section Start -->
        <section class="banner-section">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-contain-3 section-b-space section-t-space hover-effect">
                            <img src="../assets/images/furniture/banner/cta_background.jpg" class="img-fluid bg-img" alt="">
                            <div class="banner-detail p-center text-dark position-relative text-center p-0">
                                <div>
                                    <h4 class="ls-expanded text-uppercase theme-color">Try Our New</h4>
                                    <h2 class="my-3 theme-color" >100% Best Quality Products with Best Prices</h2>

                                    <button onclick="location.href = '{{ route('shopProducts') }}';"
                                            class="btn theme-bg-color mt-sm-4 btn-md mx-auto text-white fw-bold">
                                        Shop Now <i class="fa-solid fa-right-long ms-2 "></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->


        <!-- Top Selling Section Start -->
        <section class="top-selling-section">
            <div class="container-fluid-lg">
                <div class="slider-4-1">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="top-selling-box">
                                    <div class="top-selling-title">
                                        <h3>Top Selling</h3>
                                    </div>
                                    @foreach ($topSellingProducts as $product)
                                    <div class="top-selling-contain wow fadeInUp">

                                        <a href="{{ route('product.details', ['id' => $product['id']]) }}" class="top-selling-image">
                                            <img src="{{ asset('storage/images/' . $product['image']) }}"
                                                 class="img-fluid blur-up lazyload"
                                                 alt="{{ $product['name'] ?? 'Product Image' }}">
                                        </a>



                                        <div class="top-selling-detail">
                                            <a href="{{ route('product.details', ['id' => $product['id']]) }}">
                                                <h5>{{ $product['name'] }}</h5>
                                            </a>
                                            <div class="product-rating">
                                                <ul class="rating">
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"></i>
                                                    </li>
                                                </ul>
                                                <span>({{ $product['total_sold'] }} sold)</span>
                                            </div>
                                            <h6>
                                                R{{ $product['price'] }}
                                                @if ($product['discount'])
                                                    <span class="text-danger">-{{ $product['discount'] }}% Off</span>
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="top-selling-box">
                                    <div class="top-selling-title">
                                        <h3>Trending Products</h3>
                                    </div>

                                    @foreach ($topSellingProducts as $product)
                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="{{ route('product.details', ['id' => $product['id']]) }}" class="top-selling-image">
                                                <img src="{{ asset('storage/images/' . $product['image']) }}"
                                                     class="img-fluid blur-up lazyload"
                                                     alt="{{ $product['name'] ?? 'Product Image' }}">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{ route('product.details', ['id' => $product['id']]) }}">
                                                    <h5>{{ $product['name'] }}</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>({{ $product['total_sold'] }} sold)</span>
                                                </div>
                                                <h6>
                                                    R{{ $product['price'] }}
                                                    @if ($product['discount'])
                                                        <span class="text-danger">-{{ $product['discount'] }}% Off</span>
                                                    @endif
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="top-selling-box">
                                    <div class="top-selling-title">
                                        <h3>Recently added</h3>
                                    </div>
                                    @foreach ($recentProducts as $product)
                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="{{ route('product.details', ['id' => $product['id']]) }}" class="top-selling-image">
                                                <img src="{{ asset('storage/images/' . $product['image']) }}"
                                                     class="img-fluid blur-up lazyload"
                                                     alt="{{ $product['name'] ?? 'Product Image' }}">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{ route('product.details', ['id' => $product['id']]) }}">
                                                    <h5>{{ $product['name'] }}</h5>
                                                </a>

                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li><i data-feather="star" class="fill"></i></li>
                                                        <li><i data-feather="star" class="fill"></i></li>
                                                        <li><i data-feather="star" class="fill"></i></li>
                                                        <li><i data-feather="star" class="fill"></i></li>
                                                        <li><i data-feather="star"></i></li>
                                                    </ul>
                                                    <span>New</span>
                                                </div>

                                                <h6>
                                                    ${{ $product['price'] }}
                                                    @if ($product['discount'])
                                                        <span class="text-danger">-{{ $product['discount'] }}% Off</span>
                                                    @endif
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="top-selling-box">
                                    <div class="top-selling-title">
                                        <h3>Top Rated</h3>
                                    </div>

                                    @foreach ($topSellingProducts as $product)
                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="{{ route('product.details', ['id' => $product['id']]) }}" class="top-selling-image">
                                                <img src="{{ asset('storage/images/' . $product['image']) }}"
                                                     class="img-fluid blur-up lazyload"
                                                     alt="{{ $product['name'] ?? 'Product Image' }}">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="{{ route('product.details', ['id' => $product['id']]) }}">
                                                    <h5>{{ $product['name'] }}</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>({{ $product['total_sold'] }} sold)</span>
                                                </div>
                                                <h6>
                                                    R{{ $product['price'] }}
                                                    @if ($product['discount'])
                                                        <span class="text-danger">-{{ $product['discount'] }}% Off</span>
                                                    @endif
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Selling Section End -->

{{--        <!-- Newsletter Section Start -->--}}
{{--        <section class="newsletter-section section-b-space">--}}
{{--            <div class="container-fluid-lg">--}}
{{--                <div class="newsletter-box newsletter-box-2">--}}
{{--                    <div class="newsletter-contain py-5">--}}
{{--                        <div class="container-fluid">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">--}}
{{--                                    <div class="newsletter-detail">--}}
{{--                                        <h2>Join our newsletter and get...</h2>--}}
{{--                                        <h5>$20 discount for your first order</h5>--}}
{{--                                        <div class="input-box">--}}
{{--                                            <input type="email" class="form-control" id="exampleFormControlInput1"--}}
{{--                                                   placeholder="Enter Your Email">--}}
{{--                                            <i class="fa-solid fa-envelope arrow"></i>--}}
{{--                                            <button class="sub-btn  btn-animation">--}}
{{--                                                <span class="d-sm-block d-none">Subscribe</span>--}}
{{--                                                <i class="fa-solid fa-arrow-right icon"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- Newsletter Section End -->--}}

        <!-- Newsletter Section Start -->
        <section class="newsletter-section-2 section-b-space" style="padding: 10px 0;" >
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-box hover-effect  text-white" style="position: relative; background-color: #1a3b45; border-radius: 10px; padding: 10px 10px;height: 350px;">

                            <div class="row align-items-end" style="height: 50%;">
                                <div class="col-xxl-8 col-xl-7">
                                    <div class="newsletter-detail text-white">
                                        <div>
                                            <h2 class="mb-2">Subscribe to the newsletter</h2>
                                            <h5 class="mb-3">Join our subscribers list to get the latest news, updates and special offers delivered directly in your inbox.</h5>
                                            <form class="row g-2">
                                                <div class="col-sm-10 col-12">
                                                    <div class="newsletter-form">
                                                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                                        <button type="submit" class="btn bg-white theme-color btn-md fw-500 submit-button">
                                                            Subscribe
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-5 d-xl-block d-none d-flex align-items-end justify-content-end">
                                    <img src="../assets/images/furniture/banner/coupon.png" alt="Coupon" class="img-fluid"  object-fit: contain;">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Section End -->





        <br><br>
  </div>
@endsection
