@extends("layouts.admin_master")
@section("content")

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Orders</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
                                    <li class="breadcrumb-item active">All Orders</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">

                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <h4 class="card-title mb-0">Orders</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            {{--                                            <div class="col-sm-auto">--}}
                                            {{--                                                <div>--}}
                                            {{--                                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> New Category</button>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                           ><i class="ri-add-line align-bottom me-1"></i>Export CSV</button>
                                                </div>
                                                <button type="button" class="btn btn-soft-info btn-sm shadow-none">
                                                    <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                                </button>
{{--                                                <div class="remove">--}}
{{--                                                    <button class="btn btn-sm btn-primary remove-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>New Product</button>--}}
{{--                                                </div>--}}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="">

                                        {{--                                        <div class="col-sm-12">--}}
                                        {{--                                            <div class="d-flex justify-content-sm-center">--}}
                                        {{--                                                <div class="search-box">--}}
                                        {{--                                                    <input type="text" class="form-control search" placeholder="Search...">--}}
                                        {{--                                                    <i class="ri-search-line search-icon"></i>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        <div class="mb-2">
                                            <div class="search-box">
                                                <input class="search form-control" placeholder="Search" /><i class="ri-search-line search-icon"></i>
                                            </div></div>
                                    </div>

                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table
                                            class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Payment Status</th>
                                                <th scope="col">Order Status</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($orders as $order)
                                                <tr>
                                                    <td>
                                                        <a href="apps-ecommerce-order-details.html"
                                                           class="fw-medium link-primary">#{{$order->order_number}}</a>
                                                    </td>
                                                    <td>{{ $order->user->name ?? 'Guest' }}</td>
                                                    <td>
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach ($order->items as $item)
                                                                <li>{{ $item->product->product_name }} x {{ $item->quantity }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <span class="text-success">{{$order-> total_amount}}</span>
                                                    </td>

                                                    <td>
                                                        {{$order-> created_at}}
                                                    </td>

                                                    <td>
                                                        <label class="status-label {{ $order->payment_class }}">
                                                            <span class="badge badge-soft-success">{{$order-> payment_status}}</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="status-label {{ $order->status_class }}">
                                                            <span class="badge badge-soft-success">{{$order-> order_status}}</span>
                                                        </label>
                                                    </td>



                                                </tr><!-- end tr -->
                                            @empty
                                                <tr>
                                                    <td colspan="7">
                                                        <div class="noresult text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                                       colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                            </lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                             </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                {{ $orders->links('pagination::bootstrap-5') }}
                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->



                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field" class="form-label">ID</label>
                                        <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Customer Name</label>
                                        <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Email</label>
                                        <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Phone</label>
                                        <input type="text" id="phone-field" class="form-control"  placeholder="Enter Phone no." required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Joining Date</label>
                                        <input type="text" id="date-field" class="form-control" placeholder="Select Date" required />
                                    </div>

                                    <div>
                                        <label for="status-field" class="form-label">Status</label>
                                        <select class="form-control" data-trigger name="status-field" id="status-field" >
                                            <option value="">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Block</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                        <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                               colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                        <h4>Are you Sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

@endsection
