
@extends("layouts.admin_master")
@section("content")
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Order Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Order Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">Order #{{$order->order_number}}</h5>
                                <div class="flex-shrink-0">
                                    <a href="apps-invoices-details.html" class="btn btn-success btn-sm"><i class="ri-download-2-fill align-middle me-1"></i> Invoice</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-nowrap align-middle table-borderless mb-0">
                                    <thead class="table-light text-muted">
                                    <tr>
                                        <th scope="col">Product Details</th>
                                        <th scope="col">Item Price</th>
                                        <th scope="col">Quantity</th>
{{--                                        <th scope="col">Rating</th>--}}
                                        <th scope="col" class="text-end">Total Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->items as $index => $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                    <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="fs-15"><a href="apps-ecommerce-product-details.html" class="link-primary">{{$item->product->product_name}}</a></h5>
                                                    <p class="text-muted mb-0">Color: <span class="fw-medium">Pink</span></p>
                                                    <p class="text-muted mb-0">Size: <span class="fw-medium">M</span></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$item->product->price}}</td>
                                        <td>{{ $item->quantity }}</td>
{{--                                        <td>--}}
{{--                                            <div class="text-warning fs-15">--}}
{{--                                                <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
                                        <td class="fw-medium text-end">
                                            {{$order->total_amount}}
                                        </td>
                                    </tr>

                                    @endforeach
                                    <tr class="border-top border-top-dashed">
                                        <td colspan="3"></td>
                                        <td colspan="2" class="fw-medium p-0">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                <tr>
                                                    <td>Sub Total :</td>
                                                    <td class="text-end">{{$order-> total_amount}}</td>
                                                </tr>
{{--                                                <tr>--}}
{{--                                                    <td>Discount <span class="text-muted">(VELZON15)</span> : :</td>--}}
{{--                                                    <td class="text-end">-$53.99</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Shipping Charge :</td>--}}
{{--                                                    <td class="text-end">$65.00</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Estimated Tax :</td>--}}
{{--                                                    <td class="text-end">$44.99</td>--}}
{{--                                                </tr>--}}
                                                <tr class="border-top border-top-dashed">
                                                    <th scope="row">Total (R) :</th>
                                                    <th class="text-end">{{$order-> total_amount}}</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end card-->
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <div class="d-sm-flex align-items-center">--}}
{{--                                <h5 class="card-title flex-grow-1 mb-0">Order Status</h5>--}}
{{--                                <div class="flex-shrink-0 mt-2 mt-sm-0">--}}
{{--                                    <a href="javasccript:void(0;)" class="btn btn-soft-info btn-sm mt-2 mt-sm-0 shadow-none"><i class="ri-map-pin-line align-middle me-1"></i> Change Address</a>--}}
{{--                                    <a href="javasccript:void(0;)" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0 shadow-none"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Order</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="profile-timeline">--}}
{{--                                <div class="accordion accordion-flush" id="accordionFlushExample">--}}
{{--                                    <div class="accordion-item border-0">--}}
{{--                                        <div class="accordion-header" id="headingOne">--}}
{{--                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 avatar-xs">--}}
{{--                                                        <div class="avatar-title bg-success rounded-circle shadow">--}}
{{--                                                            <i class="ri-shopping-bag-line"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1 ms-3">--}}
{{--                                                        <h6 class="fs-15 mb-0 fw-semibold">Order Placed - <span class="fw-normal">Wed, 15 Dec 2021</span></h6>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">--}}
{{--                                            <div class="accordion-body ms-2 ps-5 pt-0">--}}
{{--                                                <h6 class="mb-1">An order has been placed.</h6>--}}
{{--                                                <p class="text-muted">Wed, 15 Dec 2021 - 05:34PM</p>--}}

{{--                                                <h6 class="mb-1">Seller has proccessed your order.</h6>--}}
{{--                                                <p class="text-muted mb-0">Thu, 16 Dec 2021 - 5:48AM</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item border-0">--}}
{{--                                        <div class="accordion-header" id="headingTwo">--}}
{{--                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 avatar-xs">--}}
{{--                                                        <div class="avatar-title bg-success rounded-circle shadow">--}}
{{--                                                            <i class="mdi mdi-gift-outline"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1 ms-3">--}}
{{--                                                        <h6 class="fs-15 mb-1 fw-semibold">Packed - <span class="fw-normal">Thu, 16 Dec 2021</span></h6>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
{{--                                            <div class="accordion-body ms-2 ps-5 pt-0">--}}
{{--                                                <h6 class="mb-1">Your Item has been picked up by courier patner</h6>--}}
{{--                                                <p class="text-muted mb-0">Fri, 17 Dec 2021 - 9:45AM</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item border-0">--}}
{{--                                        <div class="accordion-header" id="headingThree">--}}
{{--                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 avatar-xs">--}}
{{--                                                        <div class="avatar-title bg-success rounded-circle shadow">--}}
{{--                                                            <i class="ri-truck-line"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1 ms-3">--}}
{{--                                                        <h6 class="fs-15 mb-1 fw-semibold">Shipping - <span class="fw-normal">Thu, 16 Dec 2021</span></h6>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">--}}
{{--                                            <div class="accordion-body ms-2 ps-5 pt-0">--}}
{{--                                                <h6 class="fs-14">RQK Logistics - MFDS1400457854</h6>--}}
{{--                                                <h6 class="mb-1">Your item has been shipped.</h6>--}}
{{--                                                <p class="text-muted mb-0">Sat, 18 Dec 2021 - 4.54PM</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item border-0">--}}
{{--                                        <div class="accordion-header" id="headingFour">--}}
{{--                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 avatar-xs">--}}
{{--                                                        <div class="avatar-title bg-light text-success rounded-circle shadow">--}}
{{--                                                            <i class="ri-takeaway-fill"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1 ms-3">--}}
{{--                                                        <h6 class="fs-14 mb-0 fw-semibold">Out For Delivery</h6>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="accordion-item border-0">--}}
{{--                                        <div class="accordion-header" id="headingFive">--}}
{{--                                            <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseFile" aria-expanded="false">--}}
{{--                                                <div class="d-flex align-items-center">--}}
{{--                                                    <div class="flex-shrink-0 avatar-xs">--}}
{{--                                                        <div class="avatar-title bg-light text-success rounded-circle shadow">--}}
{{--                                                            <i class="mdi mdi-package-variant"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-grow-1 ms-3">--}}
{{--                                                        <h6 class="fs-14 mb-0 fw-semibold">Delivered</h6>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!--end accordion-->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!--end card-->--}}
                </div><!--end col-->
                <div class="col-xl-3">
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <div class="d-flex">--}}
{{--                                <h5 class="card-title flex-grow-1 mb-0"><i class="mdi mdi-truck-fast-outline align-middle me-1 text-muted"></i> Logistics Details</h5>--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <a href="javascript:void(0);" class="badge badge-soft-primary fs-11">Track Order</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="text-center">--}}
{{--                                <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#4b38b3,secondary:#0ab39c" style="width:80px;height:80px"></lord-icon>--}}
{{--                                <h5 class="fs-16 mt-2">RQK Logistics</h5>--}}
{{--                                <p class="text-muted mb-0">ID: MFDS1400457854</p>--}}
{{--                                <p class="text-muted mb-0">Payment Mode : Debit Card</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!--end card-->--}}

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <h5 class="card-title flex-grow-1 mb-0">Customer Details</h5>
                                <div class="flex-shrink-0">
                                    <a href="javascript:void(0);" class="link-secondary">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0 vstack gap-3">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="fs-14 mb-1"> {{ $order->user->name }}</h6>
                                            <p class="text-muted mb-0">Customer</p>
                                        </div>
                                    </div>
                                </li>
                                <li><i class="ri-mail-line me-2 align-middle text-muted fs-16"></i> {{ $order->user->email }}</li>
                                <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i> {{ $order->user->phone }}</li>
                                <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i> {{ $order->user->phone }}</li>
                               <li><i class="ri-map-pin-line align-middle  me-2 align-middle text-muted "></i> {{ $order->user->address }}</li>

                            </ul>
                        </div>
                    </div><!--end card-->


                    @if ($order->payment && count($order->payment) > 0)
                        @foreach ($order->payment as $payment)
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">
                                        <i class="ri-secure-payment-line align-bottom me-1 text-muted"></i>
                                        Payment Details
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Transaction:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">#{{ $payment->m_payment_id }}</h6>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Payment Method:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">{{ ucfirst($payment->payment_method) }}</h6>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Payment Status:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">{{ ucfirst($payment->payment_status) }}</h6>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Payment Date:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">{{ $payment->created_at->format('F d, Y H:i') }}</h6>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Total Amount:</p>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <h6 class="mb-0">{{ number_format($payment->amount, 2) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning">
                            No payment records available for this order.
                        </div>
                    @endif


                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->


</div>
<!-- end main content-->
@endsection
