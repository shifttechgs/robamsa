@extends("layouts.master")
@section("content")
    <div class="main ">
        <!-- Home Section Start -->
        <section class="home-section pt-2 ratio_50">
            <div class="container-fluid-lg">
                <div class="row g-4">
                    <div class="col-xl-9 col-lg-8 ratio_50_1">
                        <div class="home-contain furniture-contain-2">
                            <img src="../assets/images/vape/banner/banner_vape.png" class="bg-img blur-up lazyload" alt="">
                            <div class="home-detail p-center-left mend-auto w-100">
                                <div>
                                    <h6 style="color: white">Exclusive Offer <span style="color: rgba(250, 45, 57, 0.67);">30% Off</span></h6>

                                    <h1 class="text-uppercase poster-1 text-content furniture-heading" style="color: white;">
                                        Discover Your Perfect   <span class="furniture-content" style="background-color: rgba(250, 45, 57, 0.67); color: #ffffff; padding: 0 8px; border-radius: 4px;">
      Vape Experience</span>
                                    </h1>

                                    <p class="text-content" style="color: white;">
                                        Premium flavors. Sleek designs. Pure satisfaction — built for rebels, not followers.
                                    </p>

                                    <br>
                                    <button onclick="location.href = '{{ route('shopProducts') }}';"
                                            class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                            class="fa-solid fa-right-long ms-2 "></i></button>

                                    <div class="product-rating mt-2">
                                        <ul class="rating">
                                            <li><i data-feather="star" class="fill"></i></li>
                                            <li><i data-feather="star" class="fill"></i></li>
                                            <li><i data-feather="star" class="fill"></i></li>
                                            <li><i data-feather="star" class="fill"></i></li>
                                            <li><i data-feather="star" class="fill"></i></li>
                                        </ul>
                                        <h6 class=""  style="color: white;">Trusted by more than 1000 customers</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none">
                        <div class="home-contain h-100 home-furniture">
                            <img src="../assets/images/vape/banner/premium_banner.png" class="bg-img blur-up lazyload" alt="">
                            <div class="home-detail p-center-left home-p-sm feature-detail mend-auto">
                                <div>
                                    <h1 class="text-uppercase poster-1 text-content furniture-heading" style="color: white">Premium</h1>
                                    <h3 class="furniture-content">E-Liquids</h3>
                                    <a onclick="location.href = '{{ route('shopProducts') }}';"
                                            class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                            class="fa-solid fa-right-long ms-2 "></i></a>
                                </div>
                            </div>
                        </div>
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
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#shipping"></use>
                            </svg>
                            <div class="service-detail">
                                <h3>Free Shipping</h3>
                                <h6 class="text-content">Free Shipping world wide</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="service-contain-2">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#service"></use>
                            </svg>
                            <div class="service-detail">
                                <h3>24 x 7 Service</h3>
                                <h6 class="text-content">Online Service For 24 x 7</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="service-contain-2">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#pay"></use>
                            </svg>
                            <div class="service-detail">
                                <h3>Online Pay</h3>
                                <h6 class="text-content">Online Payment Avaible</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="service-contain-2">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#offer"></use>
                            </svg>
                            <div class="service-detail">
                                <h3>Festival Offer</h3>
                                <h6 class="text-content">Super Sale Upto 50% off</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="service-contain-2">
                            <svg class="icon-width">
                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#return"></use>
                            </svg>
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
                                <h2>Our Latest Vape Products</h2>
                                <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>

                            </div>

                        </div>
                        <div class="product-box-slider-2 arrow-slider img-slider ">


                            @foreach ($products as $product)
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

                                        <img src="{{ asset('../assets/images/vape/icons/mod.png') }}" class="blur-up lazyload" alt="">
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
                                        <img src="../assets/images/vape/promotions/promo1.png" class="bg-img blur-up lazyload"
                                             alt="">
                                        <div class="banner-details p-center-left p-4">
                                            <div>
                                                <h3 class="text-kaushan text-yellow">50% offer</h3>
                                                <h4 class="theme-color mb-2 fw-normal"><span
                                                        class="theme-color fw-bold">Vape </span> Products</h4>
                                               <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                        class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                                        class="fa-solid fa-right-long ms-2"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner-contain hover-effect">
                                        <img src="../assets/images/vape/promotions/promo1.png" class="bg-img blur-up lazyload"
                                             alt="">
                                        <div class="banner-details p-center-left p-4">
                                            <div>
                                                <h3 class="text-kaushan text-yellow">50% offer</h3>
                                                <h4 class="theme-color mb-2 fw-normal"><span class="theme-color fw-bold">
                                                    Vape Products</span> Collections</h4>
                                               <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                        class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                                        class="fa-solid fa-right-long ms-2"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div >

                        <div class="title title-flex">
                            <div>
                                <h2>Best Selling Vape Products 2025</h2>
                                <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                                <p>Discover the most loved and top-rated vape gear of the year.</p>
                            </div>

                        </div>
                        <div class="product-box-slider-2 arrow-slider img-slider ">


                            @foreach ($products as $product)
                                <div>
                                    <div class="product-box product-box-bg wow fadeInUp ">
                                        <div class="product-image">
                                            <a href="{{ route('product.details', ['id' => $product->id]) }}">
                                                <img src="{{ asset('storage/images/' . rawurlencode($product->image_code)) }}"
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
                    </div>

                    <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                        <div class="p-sticky">
                            <div class="category-menu">
                                <h3>Shop By Category</h3>
                                <ul class="border-bottom-0">


                                        @foreach($activeCategories as $category)
                                    <li>
                                        <div class="category-list">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/furniture/icon/decorations.svg"
                                                 class="blur-up lazyload" alt="">
                                            <h5>
                                                <a href="{{ route('shopProducts', ['category' => $category->id]) }}">{{ $category->category_name }}</a>
                                            </h5>
                                        </div>
                                    </li>
                                        @endforeach

                                </ul>
                            </div>

                            <div class="ratio_156 section-t-space">
                                <div class="home-contain hover-effect">
                                    <img src="../assets/images/vape/banner/new_arrival.png" class="bg-img blur-up lazyload"
                                         alt="">
                                    <div class="home-detail p-center-left home-p-medium">
                                        <div>
                                            <h4 class=" home-banner " style="color: rgba(250, 45, 57, 0.67)">New Arrival</h4>
                                            <h3 class="text-uppercase  fw-bold mb-1" style="color: white">POD E-Cigarette</h3>
                                            <p class="text-content  mb-3" style="color: white">Top Selling Of The Week! Exclusive Offer!</p>
                                             <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                        class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                                        class="fa-solid fa-right-long ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section-t-space">
                                <div class="category-menu">
                                    <h3>Trending Products</h3>

                                    <ul class="product-list border-0 p-0 d-block">
                                        <li>
                                            <div class="offer-product">
                                                <a href="product-left-thumbnail.html" class="offer-image">
                                                    <img src="../assets/images/vape/products/producty.png" class="blur-up lazyload"
                                                         alt="">
                                                </a>

                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="product-left-thumbnail.html" class="text-title">
                                                            <h6 class="name">Veco Solo Plus</h6>
                                                        </a>
                                                        <span>450 G</span>
                                                        <h6 class="price theme-color">R 70.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="offer-product">
                                                <a href="product-left-thumbnail.html" class="offer-image">
                                                    <img src="../assets/images/vape/products/producty.png" class="blur-up lazyload"
                                                         alt="">
                                                </a>

                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="product-left-thumbnail.html" class="text-title">
                                                            <h6 class="name">LUXE X PODS</h6>
                                                        </a>
                                                        <span>450 G</span>
                                                        <h6 class="price theme-color">R 40.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mb-0">
                                            <div class="offer-product">
                                                <a href="product-left-thumbnail.html" class="offer-image">
                                                    <img src="../assets/images/vape/products/producty.png" class="blur-up lazyload"
                                                         alt="">
                                                </a>

                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="product-left-thumbnail.html" class="text-title">
                                                            <h6 class="name">Orca Solo Plus
                                                            </h6>
                                                        </a>
                                                        <span>1 KG</span>
                                                        <h6 class="price theme-color">R 80.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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
                        <div class="banner-contain-3 section-b-space section-t-space hover-effect overflow-visible">
                            <img src="../assets/images/vape/banner/banner_ctas.png" class="bg-img" alt="">
                             <div
                                class="banner-detail p-center-left position-relative d-block py-0 banner-furniture mend-auto">
                                <div class="row">
                                    <div class="col-xl-6 offset-xxl-2 offset-xl-1 col-md-8 col-sm-9">
                                        <h4 class="text-uppercase text-yellow furniture-title">Best of
                                            Collections </h4>
                                        <h2 class="mt-sm-3 mt-1 mb-2 text-content" style="color: white">Best quality  <span
                                                class=" fw-bold" span class="furniture-content" style="background-color: rgba(250, 45, 57, 0.67); color: #ffffff; padding: 0 8px; border-radius: 4px;">ELiquids</span> </h2>

                                        <button onclick="location.href = '{{ route('shopProducts') }}';"
                                                class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                                class="fa-solid fa-right-long ms-2 "></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->



        <!-- Blog Section Start -->
        <section class="blog-section">
            <div class="container-fluid-lg">
                <div class="title">
                    <h2>Vaping Guides / Blog</h2>
                </div>

                <div class="slider-3 arrow-slider">
                    <div>
                        <div class="blog-box ratio_50">
                            <div class="blog-box-image">
                                <a href="blog-detail.html">
                                    <img src="../assets/images/vape/blog/blog1.png" class="img-fluid bg-img" alt="">
                                </a>
                            </div>

                            <div class="blog-detail">
                                <label>Conversion rate optimization</label>
                                <a href="blog-detail.html">
                                    <h2>Vape King Scavenger Hunt – Can You Crack the Clues?...</h2>
                                </a>
                                <div class="blog-list">
                                    <span>March 9, 2025</span>
                                    <span>By Emil Kristensen</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box ratio_50">
                            <div class="blog-box-image">
                                <a href="blog-detail.html">
                                    <img src="../assets/images/vape/blog/blog2.png" class="img-fluid bg-img" alt="">
                                </a>
                            </div>

                            <div class="blog-detail">
                                <label>Email Marketing</label>
                                <a href="blog-detail.html">
                                    <h2>Vape King Scavenger Hunt – Can You Crack the Clues?...</h2>
                                </a>
                                <div class="blog-list">
                                    <span>March 9, 2025</span>
                                    <span>By Emil Kristensen</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box ratio_50">
                            <div class="blog-box-image">
                                <a href="blog-detail.html">
                                    <img src="../assets/images/vape/blog/blog3.png" class="img-fluid bg-img" alt="">
                                </a>
                            </div>

                            <div class="blog-detail">
                                <label>Conversion rate optimization</label>
                                <a href="blog-detail.html">
                                    <h2>Vape King Scavenger Hunt – Can You Crack the Clues?...</h2>
                                </a>
                                <div class="blog-list">
                                    <span>March 9, 2025</span>
                                    <span>By Emil Kristensen</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box ratio_50">
                            <div class="blog-box-image">
                                <a href="blog-detail.html">
                                    <img src="../assets/images/vape/categories/category1.jpg" class="img-fluid bg-img" alt="">
                                </a>
                            </div>

                            <div class="blog-detail">
                                <label>Conversion rate optimization</label>
                                <a href="blog-detail.html">
                                    <h2>Vape King Scavenger Hunt – Can You Crack the Clues?...</h2>
                                </a>
                                <div class="blog-list">
                                    <span>March 9, 2025</span>
                                    <span>By Emil Kristensen</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->



{{--        <!-- Newsletter Section Start -->--}}
{{--        <section class="newsletter-section-2 section-b-space">--}}
{{--            <div class="container-fluid-lg">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="newsletter-box hover-effect text-white" >--}}
{{--                            <img src="../assets/images/vape/banner/banner_ctas.png" class="bg-img" alt="">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xxl-8 col-xl-7">--}}
{{--                                    <div class="newsletter-detail p-center-left">--}}
{{--                                        <div>--}}
{{--                                            <h2>Subscribe to Our newsletter</h2>--}}
{{--                                            <h4>Join our subscribers list to get the latest news, updates and special offers--}}
{{--                                                delivered directly in your inbox.</h4>--}}
{{--                                            <form class="row g-2">--}}
{{--                                                <div class="col-sm-10 col-12">--}}
{{--                                                    <div class="newsletter-form">--}}
{{--                                                        <input type="email" class="form-control" id="email"--}}
{{--                                                               placeholder="Enter your email">--}}
{{--                                                        <button type="submit" class="btn bg-white theme-color btn-md fw-500 submit-button">Subscribe</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                               --}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- Newsletter Section End -->--}}

<br><br>
  </div>
@endsection
