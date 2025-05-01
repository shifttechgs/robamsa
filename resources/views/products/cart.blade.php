@extends("layouts.master")
@section("content")
    <div class="main ">

        <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-section pt-0">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-contain">
                            <h2>Cart</h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->




        <!-- Cart Section Start -->
        <section class="cart-section section-b-space">

            <div class="container-fluid-lg">
                <div class="row g-sm-5 g-3">

                    <div class="col-xxl-9">

                        <div class="cart-table">
                            <div class="table-responsive-xl">
                                <table class="table">
                                    <tbody>
                                    @php $total = 0 @endphp

                                    @if(session('cart'))

                                        @foreach(session('cart') as $id => $products)

                                            @php $total += $products['price'] * $products['quantity'] @endphp
                                    <tr class="product-box-contain">
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a  class="product-image">
                                                    <img src="{{ asset('storage/images/' . $product->image_code) }}"
                                                         class="img-fluid"
                                                         alt="{{ $product->name ?? 'Product Image' }}">
                                                </a>
                                                <div class="product-detail">
                                                    <ul>
                                                        <li class="name">
                                                            <a>{{ $products['name'] }}</a>
                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price">
                                            <h4 class="table-title text-content">Price</h4>
                                            <h5>{{ $products['price'] }} </h5>

                                        </td>

                                        <td class="quantity">
                                            <h4 class="table-title text-content">Qty</h4>
                                            <div class="quantity-price">
                                                <div class="cart_qty">
                                                    <div class="input-group">

                                                        <div class="input-group quantity-control" style="width: 130px;">
                                                            <button class="btn btn-outline-secondary btn-decrease" type="button">-</button>
                                                            <input class="form-control input-number qty-input update-cart"
                                                                   type="number"
                                                                   name="quantity"
                                                                   value="{{ $products['quantity'] }}"
                                                                   data-id="{{ $id }}"
                                                                   min="1">
                                                            <button class="btn btn-outline-secondary btn-increase" type="button">+</button>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="subtotal">

                                            <h4 class="table-title text-content">Total</h4>
                                            <h5>${{ $products['price'] * $products['quantity'] }}</h5>

                                        </td>


                                        <td class="save-remove">
                                            <h4 class="table-title text-content">Action</h4>
                                            <a class="save notifi-wishlist" href="javascript:void(0)">Save for later</a>
                                            <a class="remove-from-cart remove close_button" href="javascript:void(0)" data-id="{{ $id }}">Remove</a>
                                        </td>


                                    </tr>

                                        @endforeach


                                    @endif
                                    @if(!session('cart') || count(session('cart')) == 0)
                                        <section class="section-404 section-lg-space">
                                            <div class="container-fluid-lg">
                                                <div class="row">


                                                    <div class="col-12">
                                                        <div class="contain-404">
                                                            <h3 class="text-content">Oops! Your cart is empty.</h3>
                                                            <p class="text-muted">Looks like you haven’t added anything to your cart yet. Start exploring our collection and add your favorite items now!</p>

                                                            <button onclick="location.href = '{{ url('/shop') }}';"
                                                                    class="btn btn-md text-white theme-bg-color mt-4 mx-auto">Return To Shopping</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3">
                        <div id="cart-summary">
                        <div class="summery-box p-sticky">
                            <div class="summery-header">
                                <h3>Cart Total</h3>
                            </div>

                            <div class="summery-contain">
                                <div class="coupon-cart">
                                    <h6 class="text-content mb-2">Coupon Apply</h6>
                                    <div class="mb-3 coupon-box input-group">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                               placeholder="Enter Coupon Code Here...">
                                        <button class="btn-apply">Apply</button>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        @php $total = 0 @endphp

                                        @foreach((array) session('cart') as $id => $products)

                                            @php $total += $products['price'] * $products['quantity'] @endphp

                                        @endforeach
                                        <h4>Subtotal</h4>
                                        <h4 class="price">R {{ $total }}</h4>
                                    </li>

                                    <li>
                                        <h4>Coupon Discount</h4>
                                        <h4 class="price">R 0.00</h4>
                                    </li>

                                    <li class="align-items-start">
                                        <h4>Shipping</h4>
                                        <h4 class="price text-end">R 0.00</h4>
                                    </li>
                                </ul>
                            </div>

                            <ul class="summery-total">
                                @php $total = 0 @endphp

                                @foreach((array) session('cart') as $id => $products)

                                    @php $total += $products['price'] * $products['quantity'] @endphp

                                @endforeach
                                <li class="list-total border-top-0">
                                    <h4>Total (Rand)</h4>
                                    <h4 class="price theme-color">R {{ $total }}</h4>
                                </li>
                            </ul>

                            <div class="button-group cart-button">
                                <ul>
                                    <li>

                                        <button onclick="location.href = '{{ route('checkout') }}';"
                                                class="btn btn-animation proceed-btn fw-bold">Proceed To Checkout</button>
                                    </li>

                                    <li>
                                        <button onclick="location.href = '{{ url('/') }}';"
                                                class="btn btn-light shopping-button text-dark">
                                            <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Cart Section End -->

    </div>
@endsection





