@extends("layouts.master")
@section("content")

    <style type="text/css">
        /* Example: You can customize these styles as per your design */
        .status-pending {
            color: #ff9800; /* Orange for Pending */
            font-weight: bold;
        }

        .status-completed {
            color: #4caf50; /* Green for Completed */
            font-weight: bold;
        }

        .status-cancelled {
            color: #f44336; /* Red for Cancelled */
            font-weight: bold;
        }

        .status-default {
            color: #2196f3; /* Blue for default status */
        }

        /* Payment Status */
        .payment-completed {
            color: #4caf50; /* Green for Paid */
            font-weight: bold;
        }

        .payment-pending {
            color: #ff9800; /* Orange for Unpaid */
            font-weight: bold;
        }



        .payment-default {
            color: #2196f3; /* Blue for default payment status */
        }

    </style>
    <div class="main ">

        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-section pt-0">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-contain">
                            <h2>User Dashboard</h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">User Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- User Dashboard Section Start -->
        <section class="user-dashboard-section section-b-space">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="dashboard-left-sidebar">
                            <div class="close-button d-flex d-lg-none">
                                <button class="close-sidebar">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="profile-box">
                                <div class="cover-image">
                                    <img src="../assets/images/vape/banner/banner_vape.png" class="img-fluid blur-up lazyload"
                                         alt="">
                                </div>

                                <div class="profile-contain">
                                    <div class="profile-image">
                                        <div class="position-relative">
                                            <img src="../assets/images/logo/vape_shop.png"
                                                 class="blur-up lazyload update_img" alt="">
                                        </div>
                                    </div>

                                    <div class="profile-name">
                                        <h3>{{ Auth::user()->name }}</h3>
                                        <h6 class="text-content">{{ Auth::user()->email }}</h6>
                                    </div>
                                </div>
                            </div>

                            <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#pills-tabContent" class="nav-link active" id="pills-dashboard-tab"
                                       data-bs-toggle="pill" data-bs-target="#pills-dashboard" role="tab"><i
                                            data-feather="home"></i>
                                        DashBoard</a>
                                </li>

{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="pills-product-tab" data-bs-toggle="pill"--}}
{{--                                            data-bs-target="#pills-product" type="button" role="tab"><i--}}
{{--                                            data-feather="shopping-bag"></i>Products</button>--}}
{{--                                </li>--}}

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-order" type="button" role="tab"><i
                                            data-feather="shopping-bag"></i>Orders</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"><i data-feather="user"></i>
                                        Profile</button>
                                </li>

{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill"--}}
{{--                                            data-bs-target="#pills-security" type="button" role="tab"><i--}}
{{--                                            data-feather="settings"></i>--}}
{{--                                        Setting</button>--}}
{{--                                </li>--}}

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-out-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-out" type="button" role="tab"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i data-feather="log-out"></i> Log Out
                                    </button>
                                </li>

                                <!-- Hidden Logout Form -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-9 col-lg-8">
                        <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                            Menu</button>
                        <div class="dashboard-right-sidebar">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel">
                                    <div class="dashboard-home">
                                        <div class="title">
                                            <h2>My Dashboard</h2>
                                            <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                        </div>

                                        <div class="dashboard-user-name">
                                            <h6 class="text-content">Hello, <b class="text-title">{{ Auth::user()->name }}</b></h6>
                                            <p class="text-content">From your My Account Dashboard you have the ability to
                                                view a snapshot of your recent account activity and update your account
                                                information. Select a link below to view or edit information.</p>
                                        </div>

                                        <div class="total-box">
                                            <div class="row g-sm-4 g-3">
                                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                    <div class="total-contain">
                                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg"
                                                             class="img-1 blur-up lazyload" alt="">
                                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/order.svg" class="blur-up lazyload"
                                                             alt="">
                                                        <div class="total-detail">
                                                            <h5>Total Spent</h5>
                                                            <h3>R{{ number_format($totalAmountSpent, 2) }}</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                    <div class="total-contain">
                                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/pending.svg"
                                                             class="img-1 blur-up lazyload" alt="">
                                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/pending.svg" class="blur-up lazyload"
                                                             alt="">
                                                        <div class="total-detail">
                                                            <h5>Total Sales</h5>
                                                            <h3>{{ $totalOrders }}</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                                    <div class="total-contain">
                                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/wishlist.svg"
                                                             class="img-1 blur-up lazyload" alt="">
                                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/svg/wishlist.svg"
                                                             class="blur-up lazyload" alt="">
                                                        <div class="total-detail">
                                                            <h5>Order Pending</h5>
                                                            <h3>{{ $pendingOrders }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-4">
{{--                                            <div class="col-xxl-6">--}}
{{--                                                <div class="dashboard-bg-box">--}}
{{--                                                    <div id="chart"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-xxl-6">--}}
{{--                                                <div class="dashboard-bg-box">--}}
{{--                                                    <div id="sale"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}



                                            <div class="col-xxl-12">
                                                <div class="order-tab dashboard-bg-box">
                                                    <div class="dashboard-title mb-4">
                                                        <h3>Recent Order</h3>
                                                    </div>
{{--                                                    <div class="search-box">--}}
{{--                                                        <div class="input-group">--}}
{{--                                                            <input type="search" class="form-control" placeholder="I'm searching for...">--}}
{{--                                                            <button class="btn" type="button" id="button-addon2">--}}
{{--                                                                <i data-feather="search"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

                                                    <div class="table-responsive">
                                                        <table class="table order-table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Order #</th>
                                                                <th scope="col">Total Amount</th>
                                                                <th scope="col">Date Created</th>
                                                                <th scope="col">Payment Status</th>
                                                                <th scope="col">Order Status</th>
                                                                <th scope="col">Actions</th> <!-- Added Actions Column -->
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @forelse($orders as $order)
                                                            <tr>
                                                                <td class="product-image">{{$order->order_number}}</td>
                                                                <td>
                                                                    <h6>{{$order-> total_amount}}</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>{{$order-> created_at}}</h6>
                                                                </td>
                                                                <td>
                                                                    <label class="status-label {{ $order->payment_class }}">
                                                                        {{$order->payment_status}}
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label class="status-label {{ $order->status_class }}">
                                                                        {{$order->order_status}}
                                                                    </label>
                                                                </td>


                                                                <td>
                                                                <td class="edit-delete">
                                                                    <a href="{{ route('customer.invoice', $order->id) }}">
                                                                        <i data-feather="eye" class="edit"></i>
                                                                    </a>

                                                                </td>

                                                            </tr>

                                                            @empty
                                                                <tr>
                                                                    <td colspan="7">
                                                                        <div class="noresult text-center">
                                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                                                       colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                                            </lord-icon>
                                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                            <p class="text-muted mb-0">We've searched more than 150+ Orders but we did not find any orders matching your search.</p>
                                                                            <button onclick="location.href = '{{ url('/shop') }}';" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">
                                                                               Start Shopping
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforelse

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Laravel pagination links -->
                                                    <nav class="custom-pagination">
                                                        <ul class="pagination justify-content-center">
                                                            {{-- Laravel pagination links --}}
                                                            {{$orders->links('pagination::bootstrap-5')}}
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>


                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-product" role="tabpanel">
                                    <div class="product-tab">
                                        <div class="title">
                                            <h2>All Product</h2>
                                            <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                        </div>

                                        <div class="table-responsive dashboard-bg-box">
                                            <table class="table product-table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Images</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Sales</th>
                                                    <th scope="col">Edit / Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/1.png"
                                                             class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>Fantasy Crunchy Choco Chip Cookies</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$25.69</h6>
                                                    </td>
                                                    <td>
                                                        <h6>63</h6>
                                                    </td>
                                                    <td>
                                                        <h6>152</h6>
                                                    </td>
                                                    <td class="edit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/2.png"
                                                             class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>Peanut Butter Bite Premium Butter Cookies 600 g</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$35.36</h6>
                                                    </td>
                                                    <td>
                                                        <h6>14</h6>
                                                    </td>
                                                    <td>
                                                        <h6>34</h6>
                                                    </td>
                                                    <td class="edit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/3.png"
                                                             class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>Yumitos Chilli Sprinkled Potato Chips 100 g</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$78.55</h6>
                                                    </td>
                                                    <td>
                                                        <h6>55</h6>
                                                    </td>
                                                    <td>
                                                        <h6>78</h6>
                                                    </td>
                                                    <td class="edit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/4.png"
                                                             class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>healthy Long Life Toned Milk 1 L</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$32.98</h6>
                                                    </td>
                                                    <td>
                                                        <h6>69</h6>
                                                    </td>
                                                    <td>
                                                        <h6>135</h6>
                                                    </td>
                                                    <td class="edit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/5.png"
                                                             class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>Raw Mutton Leg, Packaging 5 Kg</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$36.98</h6>
                                                    </td>
                                                    <td>
                                                        <h6>35</h6>
                                                    </td>
                                                    <td>
                                                        <h6>154</h6>
                                                    </td>
                                                    <td class="edit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/6.png"
                                                             class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>Cold Brew Coffee Instant Coffee 50 g</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$36.58</h6>
                                                    </td>
                                                    <td>
                                                        <h6>69</h6>
                                                    </td>
                                                    <td>
                                                        <h6>168</h6>
                                                    </td>
                                                    <td class="edit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-image">
                                                        <img src="../assets/images/vegetable/product/7.png"
                                                             class="img-fluid" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="theme-color fw-bold">$25.69</h6>
                                                    </td>
                                                    <td>
                                                        <h6>63</h6>
                                                    </td>
                                                    <td>
                                                        <h6>152</h6>
                                                    </td>
                                                    <td class="edit-delete">
                                                        <i data-feather="edit" class="edit"></i>
                                                        <i data-feather="trash-2" class="delete"></i>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <nav class="custom-pagination">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                            <i class="fa-solid fa-angles-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="javascript:void(0)">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">
                                                            <i class="fa-solid fa-angles-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-order" role="tabpanel">
                                    <div class="dashboard-order">
                                        <div class="title">
                                            <h2>All Orders</h2>
                                            <span class="title-leaf title-leaf-gray">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                        </div>

                                        <div class="order-tab dashboard-bg-box">
                                            <div class="table-responsive">
                                                <table class="table order-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Order #</th>
                                                        <th scope="col">Total Amount</th>
                                                        <th scope="col">Date Created</th>
                                                        <th scope="col">Payment Status</th>
                                                        <th scope="col">Order Status</th>
                                                        <th scope="col">Actions</th> <!-- Added Actions Column -->
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($orders as $order)
                                                        <tr>
                                                            <td class="product-image">{{$order->order_number}}</td>
                                                            <td>
                                                                <h6>{{$order-> total_amount}}</h6>
                                                            </td>
                                                            <td>
                                                                <h6>{{$order-> created_at}}</h6>
                                                            </td>
                                                            <td>
                                                                <label class="status-label {{ $order->payment_class }}">
                                                                    {{$order->payment_status}}
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label class="status-label {{ $order->status_class }}">
                                                                    {{$order->order_status}}
                                                                </label>
                                                            </td>


                                                            <td class="edit-delete">
                                                                <a href="{{ route('customer.invoice', $order->id) }}">
                                                                    <i data-feather="eye" class="edit"></i>
                                                                </a>

                                                            </td>
                                                        </tr>

                                                    @empty
                                                        <tr>
                                                            <td colspan="7">
                                                                <div class="noresult text-center">
                                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                                               colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                                    </lord-icon>
                                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders but we did not find any orders matching your search.</p>
                                                                    <button onclick="location.href = '{{ url('/shop') }}';" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">
                                                                        Start Shopping
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforelse

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Laravel pagination links -->
                                            <nav class="custom-pagination">
                                                <ul class="pagination justify-content-center">
                                                    {{-- Laravel pagination links --}}
                                                    {{$orders->links('pagination::bootstrap-5')}}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                    <div class="dashboard-profile">
                                        <div class="title">
                                            <h2>My Profile</h2>
                                            <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                        </div>

                                        <div class="profile-tab dashboard-bg-box">
                                            <div class="dashboard-title dashboard-flex">
                                                <h3>Profile Name: {{ Auth::user()->name }}</h3>
{{--                                                <button class="btn btn-sm theme-bg-color text-white" data-bs-toggle="modal"--}}
{{--                                                        data-bs-target="#edit-profile">Change Password</button>--}}
                                            </div>

                                            <ul>

                                                <li>
                                                    <h5>Email Address :</h5>
                                                    <h5>{{ Auth::user()->email }}</h5>
                                                </li>
                                                <li>
                                                    <h5>Phone Number :</h5>
                                                    <h5>{{ Auth::user()->phone }}</h5>
                                                </li>
                                                <li>
                                                    <h5>Address :</h5>
                                                    <h5>{{ Auth::user()->address }}</h5>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-security" role="tabpanel">
                                    <div class="dashboard-privacy">
                                        <div class="title">
                                            <h2>My Setting</h2>
                                            <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                        </div>

                                        <div class="dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Notifications</h3>
                                            </div>

                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="desktop" name="desktop"
                                                           checked>
                                                    <label class="form-check-label ms-2" for="desktop">Show
                                                        Desktop Notifications</label>
                                                </div>
                                            </div>

                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="enable" name="desktop">
                                                    <label class="form-check-label ms-2" for="enable">Enable
                                                        Notifications</label>
                                                </div>
                                            </div>

                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="activity"
                                                           name="desktop">
                                                    <label class="form-check-label ms-2" for="activity">Get
                                                        notification for my own activity</label>
                                                </div>
                                            </div>

                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="dnd" name="desktop">
                                                    <label class="form-check-label ms-2" for="dnd">DND</label>
                                                </div>
                                            </div>

                                            <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Save
                                                Changes</button>
                                        </div>

                                        <div class="dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Deactivate Account</h3>
                                            </div>
                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="concern"
                                                           name="concern">
                                                    <label class="form-check-label ms-2" for="concern">I have a privacy
                                                        concern</label>
                                                </div>
                                            </div>
                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="temporary"
                                                           name="concern">
                                                    <label class="form-check-label ms-2" for="temporary">This is
                                                        temporary</label>
                                                </div>
                                            </div>
                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="other" name="concern">
                                                    <label class="form-check-label ms-2" for="other">other</label>
                                                </div>
                                            </div>

                                            <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Deactivate
                                                Account</button>
                                        </div>

                                        <div class="dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Delete Account</h3>
                                            </div>
                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="usable" name="usable">
                                                    <label class="form-check-label ms-2" for="usable">No longer
                                                        usable</label>
                                                </div>
                                            </div>
                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="account" name="usable">
                                                    <label class="form-check-label ms-2" for="account">Want to switch on
                                                        other
                                                        account</label>
                                                </div>
                                            </div>
                                            <div class="privacy-box">
                                                <div
                                                    class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                                    <input class="form-check-input" type="radio" id="other-2" name="usable">
                                                    <label class="form-check-label ms-2" for="other-2">Other</label>
                                                </div>
                                            </div>

                                            <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Delete My
                                                Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- User Dashboard Section End -->
    </div>
@endsection
