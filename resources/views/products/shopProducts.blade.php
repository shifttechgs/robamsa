@extends("layouts.master")
@section("content")
    <div class="main ">

        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-section pt-0">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-contain">
                            <h2>Shop</h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Shop </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

{{--        <!-- Poster Section Start -->--}}
{{--        <section>--}}
{{--            <div class="container-fluid-lg">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slider-1 slider-animate product-wrapper no-arrow">--}}
{{--                            <div>--}}
{{--                                <div class="banner-contain-2 hover-effect">--}}
{{--                                    <img src="../assets/images/vape/banner/vapeBanner.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">--}}
{{--                                    <div--}}
{{--                                        class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">--}}
{{--                                        <div>--}}
{{--                                            <h3>Shop premium e-liquids, vape kits, disposable vapes & Nic Pouches.</h3>--}}
{{--                                            <h4>Save upto 50%</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div>--}}
{{--                                <div class="banner-contain-2 hover-effect">--}}
{{--                                    <img src="../assets/images/vape/banner/vapeBanner2.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">--}}
{{--                                    <div--}}
{{--                                        class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">--}}
{{--                                        <div>--}}
{{--                                            <h3>Shop premium e-liquids, vape kits, disposable vapes & Nic Pouches.</h3>--}}
{{--                                            <h4>Save upto 50%</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div>--}}
{{--                                <div class="banner-contain-2 hover-effect">--}}
{{--                                    <img src="../assets/images/vape/banner/vapeBanner2.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">--}}
{{--                                    <div--}}
{{--                                        class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">--}}
{{--                                        <div>--}}
{{--                                            <h3>Shop premium e-liquids, vape kits, disposable vapes & Nic Pouches.</h3>--}}
{{--                                            <h4>Save upto 50%</h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- Poster Section End -->--}}

        <!-- Shop Section Start -->
        <section class="section-b-space shop-section">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-box wow fadeInUp">
                            <div class="shop-left-sidebar">
                                <div class="back-button">
                                    <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                                </div>



                                <div class="accordion custom-accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                <span>Categories</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <!-- Search box -->
                                                <div class="form-floating theme-form-floating-2 search-box">
                                                    <input type="search" class="form-control" id="search" placeholder="Search .." name="search">
                                                    <label for="search">Search</label>
                                                </div>

                                                <!-- Category list -->
                                                <ul class="category-list custom-padding custom-height">
                                                    @foreach ($activeCategories as $category)
                                                        <li class="onhover-category-list">
                                                            <div class="form-check ps-0 m-0 category-list-box">

                                                                <a href="{{ route('shopProducts', ['category' => $category->id]) }}">
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="name">{{ $category->category_name }}</span>
                                                                        <!-- Display the count of products in the category aligned to the far right -->
                                                                        <span class="number">({{ $category->products_count }})</span>
                                                                    </div>
                                                             </a>
                                                            </div>
                                                        </li>
                                                    @endforeach


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="show-button">
                            <div class="filter-button-group mt-0">
                                <div class="filter-button d-inline-block d-lg-none">
                                    <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                                </div>
                            </div>

                            <div class="top-filter-menu">
{{--                                <div class="category-dropdown">--}}
{{--                                    <h5 class="text-content">Sort By :</h5>--}}
{{--                                    <div class="dropdown">--}}
{{--                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"--}}
{{--                                                data-bs-toggle="dropdown">--}}
{{--                                            <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>--}}
{{--                                        </button>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" id="pop" href="javascript:void(0)">Popularity</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High--}}
{{--                                                    Price</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low--}}
{{--                                                    Price</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" id="rating" href="javascript:void(0)">Average--}}
{{--                                                    Rating</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z Order</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A Order</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a class="dropdown-item" id="off" href="javascript:void(0)">% Off - Hight To--}}
{{--                                                    Low</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="grid-option d-none d-md-block">
                                    <ul>
                                        <li class="three-grid">
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li class="grid-btn d-xxl-inline-block d-none active">
                                            <a href="javascript:void(0)">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-4.svg"
                                                     class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid.svg"
                                                     class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt="">
                                            </a>
                                        </li>
{{--                                        <li class="list-btn">--}}
{{--                                            <a href="javascript:void(0)">--}}
{{--                                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/list.svg" class="blur-up lazyload" alt="">--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if($products->isEmpty())
                            <div class="text-center d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                                <div class="contain-404">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                               colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h3 class="text-content">Oops! No Products Found.</h3>
                                    <p class="text-muted">Looks like we haven’t found anything from the selected category. Try exploring other categories.</p>

                                    {{-- <button onclick="location.href = '{{ url('/') }}';"
                                        class="btn btn-md text-white theme-bg-color mt-4 mx-auto">Back To Shopping</button> --}}
                                </div>
                            </div>
                        @else
                        <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
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
                                                <span class="theme-color price">{{ $product->price }}</span>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li><i data-feather="star" class="fill"></i></li>
                                                    <li><i data-feather="star" class="fill"></i></li>
                                                    <li><i data-feather="star" class="fill"></i></li>
                                                    <li><i data-feather="star" class="fill"></i></li>
                                                    <li><i data-feather="star"></i></li>
                                                </ul>

                                                <h6 class="theme-color">In Stock</h6>
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
                        @endif




                        <nav class="custom-pagination">
                            <ul class="pagination justify-content-center">
                                {{-- Laravel pagination links --}}
                                {{$products->links('pagination::bootstrap-5')}}
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Section End -->

    </div>
@endsection
