@extends("layouts.master")
@section("content")
    <div class="main ">
        @if($showLoginModal)
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Trigger the login modal
                    const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                    modal.show();
                });
            </script>
        @endif

        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-section pt-0">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-contain">
                            <h2>Checkout</h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Checkout section Start -->
        <section class="checkout-section-2 section-b-space">
            <div class="container-fluid-lg">
                <!-- The entire checkout area is wrapped in a form -->
                <form action="{{ route('checkout.placeOrder') }}" method="POST">
                    @csrf
                <div class="row g-sm-4 g-3">

                    <div class="col-lg-8">
                        <div class="left-sidebar-checkout">
                            <div class="checkout-detail-box">

                                <ul>


                                    <li>
                                        <div class="checkout-icon">
                                            <lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
                                                       trigger="loop-on-hover"
                                                       colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                                                       class="lord-icon">
                                            </lord-icon>
                                        </div>
                                        <div class="checkout-box">
                                            <div class="checkout-title">
                                                <h4>Customer Details</h4>
                                            </div>

                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    <div class="col-xxl-12 col-lg-12 col-md-6">
                                                        <div class="delivery-address-box">
                                                            <div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="delivery_address"
                                                                           id="address1" value="{{ $user->address }}" checked>
                                                                </div>

                                                                <div class="label">
                                                                    <label for="address1">Profile</label>
                                                                </div>

                                                                <ul class="delivery-address-detail">
                                                                    <li>
                                                                        <h4 class="fw-500"> {{ $user->name ?? 'Guest'}}</h4>
                                                                    </li>

                                                                    <li>
                                                                        <h6 class="text-content"><span class="text-title">Email :</span> {{ $user->email}}</h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6 class="text-content mb-0"><span class="text-title">Phone :</span> {{ $user->phone}}</h6>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-content"><span class="text-title">Address :</span> {{ $user->address }}</p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="checkout-icon">
                                            <lord-icon target=".nav-item" src="https://cdn.lordicon.com/oaflahpk.json"
                                                       trigger="loop-on-hover" colors="primary:#0baf9a" class="lord-icon">
                                            </lord-icon>
                                        </div>
                                        <div class="checkout-box">
                                            <div class="checkout-title">
                                                <h4>Delivery Option</h4>
                                            </div>

                                            <div class="checkout-detail">
                                                <div class="row g-4">
                                                    <div class="col-xxl-6">
                                                        <div class="delivery-option">
                                                            <div class="delivery-category">
                                                                <div class="shipment-detail">
                                                                    <div
                                                                        class="form-check custom-form-check hide-check-box">
                                                                        <input class="form-check-input" type="radio"
                                                                               name="delivery_option" value="Standard Delivery" id="delivery_option" checked>
                                                                        <label class="form-check-label"
                                                                               for="delivery_option">Standard
                                                                            Delivery Option</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="right-side-summery-box">
                            <div class="summery-box-2">
                                <div class="summery-header">
                                    <h3>Order Summery</h3>
                                </div>

                                <ul class="summery-contain">
                                    @foreach($cart as $item)
                                    <li>
{{--                                        @if(isset($item['image_code'])) <!-- Check if key exists to prevent errors -->--}}
{{--                                        <img src="{{ asset('storage/' . $item['image_code']) }}"--}}
{{--                                             class="img-fluid blur-up lazyloaded checkout-image" alt="">--}}
{{--                                        @else--}}
{{--                                            <img src="{{ asset('assets/images/furniture/1.png') }}" class="img-fluid blur-up lazyload" alt="Default Image">--}}
{{--                                        @endif--}}
                                        <img src="{{ asset('storage/images/' . $item['image']) }}"
                                             class="img-fluid"
                                             alt="{{ $item->name ?? 'Product Image' }}">
                                        <h4>{{ $item['name'] }} <span>X ({{ $item['quantity'] }})</span></h4>
                                        <h4 class="price">R {{ $item['price'] * $item['quantity'] }}</h4>
                                    </li>




{{--                                    <li>--}}
{{--                                        <img src="../assets/images/vegetable/product/3.png"--}}
{{--                                             class="img-fluid blur-up lazyloaded checkout-image" alt="">--}}
{{--                                        <h4>Onion <span>X 2</span></h4>--}}
{{--                                        <h4 class="price">$18.27</h4>--}}
{{--                                    </li>--}}


                                    @endforeach

                                </ul>

                                <ul class="summery-total">
                                    <li>
                                        <h4>Subtotal</h4>
                                        <h4 class="price">R {{ $total }}</h4>
                                    </li>

                                    <li>
                                        <h4>Shipping</h4>
                                        <h4 class="price">R00.00</h4>
                                    </li>

                                    <li>
                                        <h4>Tax</h4>
                                        <h4 class="price">R00.00</h4>
                                    </li>

{{--                                    <li>--}}
{{--                                        <h4>Coupon/Code</h4>--}}
{{--                                        <h4 class="price">$-23.10</h4>--}}
{{--                                    </li>--}}

                                    <li class="list-total">
                                        <h4>Total (Rand)</h4>
                                        <h4 class="price">R {{ $total }}</h4>
                                    </li>
                                </ul>
                            </div>

{{--                            <div class="checkout-offer">--}}
{{--                                <div class="offer-title">--}}
{{--                                    <div class="offer-icon">--}}
{{--                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/offer.svg" class="img-fluid" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="offer-name">--}}
{{--                                        <h6>Available Offers</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <ul class="offer-detail">--}}
{{--                                    <li>--}}
{{--                                        <p>Combo: BB Royal Almond/Badam Californian, Extra Bold 100 gm...</p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <p>combo: Royal Cashew Californian, Extra Bold 100 gm + BB Royal Honey 500 gm</p>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                            <button type="submit" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">Place Order</button>

                        </div>
                    </div>

                </div>
                </form>
            </div>
        </section>
        <!-- Checkout section End -->


    </div>
@endsection
