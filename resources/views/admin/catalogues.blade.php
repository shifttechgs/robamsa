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
                            <h4 class="mb-sm-0">Catalogues</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Catalogue</a></li>
                                    <li class="breadcrumb-item active">All Catalogues</li>
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
                                            <h4 class="card-title mb-0">Product Catalogues</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            {{--                                            <div class="col-sm-auto">--}}
                                            {{--                                                <div>--}}
                                            {{--                                                    <button type="button" class="btn btn-success save-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showCatalogueModal"><i class="ri-add-line align-bottom me-1"></i> New Category</button>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                            data-bs-toggle="modal" data-bs-target="#showCatalogueModal"><i class="ri-upload-cloud-2-fill align-bottom me-1"></i>Import</button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-download-cloud-2-fill align-bottom me-1"></i>Export</button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-primary remove-item-btn" data-bs-toggle="modal" data-bs-target="#showCatalogueModal"><i class="ri-add-line align-bottom me-1"></i>New Product</button>
                                                </div>
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
                                                <form method="GET" action="{{ route('catalogues.index') }}">
                                                <input class="search form-control" placeholder="Search" name="search" value="{{ request('search') }}" /><i class="ri-search-line search-icon"></i>
                                                </form>
                                            </div></div>
                                    </div>

                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th class="sort" data-sort="category_name">Product Image</th>
                                                <th class="sort" data-sort="category_name">Product Name</th>
                                                <th class="sort" data-sort="description">Category</th>
                                                <th class="sort" data-sort="description">Price</th>
                                                <th class="sort" data-sort="description">Discount</th>
                                                <th class="sort" data-sort="description">Stock Status</th>
                                                <th class="sort" data-sort="description">Product Status</th>
                                                <th class="sort" data-sort="date_created">Date Created</th>
                                                <th class="sort" data-sort="action">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            @forelse($products as $product)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td class="category_name">
{{--                                                    <div class="avatar-sm bg-light rounded p-1 me-2">--}}
{{--                                                    <img class="mg-fluid d-block" src="{{ asset('storage/' . $product->image_code) }}" alt="Product Image" >--}}
{{--                                                    </div>--}}
                                                    <div
                                                        class="avatar-sm bg-light rounded p-1 me-2">
                                                        <img src="{{ asset('storage/' . $product->image_code) }}"
                                                             alt="" class="img-fluid d-block" />
                                                    </div>
                                                </td>

                                                <td class="category_name">{{ $product->product_name }}</td>
                                                <td class="description">{{ $product->description }}</td>
                                                <td class="description">{{ $product->price }}</td>
                                                <td class="description">{{ $product->discount }}%</td>
                                                <td class="description">{{ $product->stock_status }}</td>
                                                <td class="status"><span class="badge badge-soft-success text-uppercase">{{ $product->product_status }}</span></td>
                                                <td class="date">{{ $product->created_at }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#showCatalogueModal"
                                                                    data-catalogueId="{{ $product->id }}"
                                                                    data-productName="{{ $product->product_name }}"
                                                                    data-description="{{ $product->description }}"
                                                                    data-price="{{ $product->price }}"
                                                                    data-discount="{{ $product->discount }}"
                                                                    data-stock_status="{{ $product->stock_status }}"
                                                                    data-product_status="{{ $product->product_status }}"
                                                                    data-category="{{ $product->category_id }}"
                                                                    data-image_code="{{ $product->image_code }}">
                                                            Edit
                                                            </button>
                                                        </div>
                                                    </div>
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
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse

                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">

                                            {{ $products->links() }}
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

                <!-- Modal -->
                <div class="modal fade" id="showCatalogueModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="modalTitle">Add Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form method="POST" id="catalogueForm" action="{{ route('createCatalogue') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="catalogue-id-field" name="catalogue_id">

                                <div class="modal-body">
                                    <!-- Product Name -->
                                    <div class="mb-3">
                                        <label for="product_name-field" class="form-label">Product Name</label>
                                        <input type="text" id="product_name-field" name="product_name" class="form-control" placeholder="Enter Product Name" required />
                                    </div>

                                    <!-- Description -->
                                    <div class="mb-3">
                                        <label for="description-field" class="form-label">Description</label>
                                        <input type="text" id="description-field" name="description" class="form-control" placeholder="Enter Description" required />
                                    </div>

                                    <!-- Price -->
                                    <div class="mb-3">
                                        <label for="price-field" class="form-label">Product Price</label>
                                        <input type="text" id="price-field" class="form-control" name="price"  placeholder="Enter Price" required />
                                    </div>

                                    <!-- Stock Status -->
                                    <div class="mb-3">
                                        <label for="stock_status-field" class="form-label">Stock Status</label>
                                        <select class="form-control" name="stock_status" id="stock_status-field">
                                            <option value="Available">Available</option>
                                            <option value="Not Available">Not Available</option>
                                        </select>
                                    </div>

                                    <!-- Product Status -->
                                    <div class="mb-3">
                                        <label for="product_status-field" class="form-label">Product Status</label>
                                        <select class="form-control" name="product_status" id="product_status-field">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <!-- Discount -->
                                    <div class="mb-3">
                                        <label for="discount-field" class="form-label">Discount %</label>
                                        <input type="text" id="discount-field" class="form-control" name="discount" placeholder="Enter Discount" />
                                    </div>

                                    <!-- Category -->
                                    <div class="mb-3">
                                        <label for="category-field" class="form-label">Category</label>
                                        <select class="form-control" name="category_id" id="category-field">
                                            <option value="">Select Category</option>
                                            @foreach($activeCategories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Image Code -->
                                    <div class="mb-3">
                                        <label for="image_code-field" class="form-label">Select Product Image</label>
                                        <input type="file" class="form-control" name="image_code" id="image_code-field" accept="image/*" >
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="save-btn">Add Product</button>
                                        <button type="submit" id="update-btn" class="btn btn-warning" style="display:none;">Update</button>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let editButtons = document.querySelectorAll('.edit-item-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Get product data from the button's data attributes
                    let catalogueId = this.getAttribute('data-catalogueId');
                    let productName = this.getAttribute('data-productName');
                    let description = this.getAttribute('data-description');
                    let price = this.getAttribute('data-price');
                    let discount = this.getAttribute('data-discount');
                    let stock_status = this.getAttribute('data-stock_status');
                    let product_status = this.getAttribute('data-product_status');
                    let category = this.getAttribute('data-category');
                    let image_code = this.getAttribute('data-image_code');

                    // Set modal title and input fields
                    document.getElementById('catalogue-id-field').value = catalogueId;
                    document.getElementById('product_name-field').value = productName;
                    document.getElementById('description-field').value = description;
                    document.getElementById('price-field').value = price;
                    document.getElementById('discount-field').value = discount;
                    document.getElementById('stock_status-field').value = stock_status;
                    document.getElementById('product_status-field').value = product_status;
                    document.getElementById('category-field').value = category;
                   // document.getElementById('image_code-field').value = image_code;

                    // Set modal title to 'Edit Product' when editing
                    document.getElementById('modalTitle').textContent = 'Edit Product';
                    // Log the modal title to the console
                    console.log('Modal Title: ', document.getElementById('modalTitle').textContent);


                    // Change form action for update
                    let form = document.getElementById("catalogueForm");
                    form.action = `/catalogues/update/${catalogueId}`; // Update route

                    // Show the "Update" button and hide the "Add Product" button
                    document.getElementById('save-btn').style.display = 'none';
                    document.getElementById('update-btn').style.display = 'inline-block';
                    // Ensure that file input is reset (if any)
                   // document.getElementById('image_code-field').value = ''; // Assuming the file input field's ID is 'file-input-field'

                });
            });

            // Reset modal on close
            document.getElementById("showCatalogueModal").addEventListener("hidden.bs.modal", function () {
                // Reset form values
                document.getElementById("catalogueForm").reset();

                // Reset form action and modal title for "Add Product"
                document.getElementById("catalogueForm").action = "{{ route('createCatalogue') }}"; // Default add route
                document.getElementById("modalTitle").innerText = "Add Product";

                // Show the "Add Product" button and hide the "Update" button
                document.getElementById("save-btn").style.display = "inline-block";
                document.getElementById("update-btn").style.display = "none";
            });
        });


    </script>

@endsection
