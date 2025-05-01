@extends("layouts.admin_master")
@section("content")

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
{{--                @if(session('success'))--}}
{{--                    <div class="alert alert-success">{{ session('success') }}</div>--}}
{{--                @endif--}}

{{--                @if(session('error'))--}}
{{--                    <div class="alert alert-danger">{{ session('error') }}</div>--}}
{{--                @endif--}}
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Categories</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                                    <li class="breadcrumb-item active">All Categories</li>
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
                                            <h4 class="card-title mb-0">Product Categories</h4>
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
                                                            data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>Import</button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ri-add-line align-bottom me-1"></i>Export</button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-primary remove-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>New Category</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="">
                                        <div class="mb-2">
                                            <div class="search-box">
                                                <form method="GET" action="{{ route('categories.index') }}">
                                                    <input class="search form-control" placeholder="Search" name="search" value="{{ request('search') }}" />
                                                    <i class="ri-search-line search-icon"></i>
                                                </form>
                                            </div>
                                        </div>
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
                                                <th class="sort" data-sort="category_name">Category Name</th>
                                                <th class="sort" data-sort="description">Description</th>
                                                <th class="sort" data-sort="date_created">Date Created</th>
                                                <th class="sort" data-sort="date_created"> Created By</th>
                                                <th class="sort" data-sort="status">Category Status</th>
                                                <th class="sort" data-sort="action">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            @forelse($categories as $category)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="category_name">{{ $category->category_name }}</td>
                                                    <td class="description">{{ $category->description }}</td>
                                                    <td class="date">{{ $category->created_at }}</td>
                                                    <td class="date">{{ $category->user_id }}</td>
                                                    <td class="status">
    <span class="badge
        @if($category->category_status == 'active')
            badge-soft-success
        @elseif($category->category_status == 'inactive')
            badge-soft-danger
        @endif
        text-uppercase">
        {{ $category->category_status }}
    </span>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <button class="btn btn-sm btn-success edit-item-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showModal"
                                                                        data-id="{{ $category->id }}"
                                                                        data-name="{{ $category->category_name }}"
                                                                        data-description="{{ $category->description }}"
                                                                        data-status="{{ $category->category_status }}">
                                                                    Edit
                                                                </button>
                                                            </div>
{{--                                                            <div class="remove">--}}
{{--                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>--}}
{{--                                                            </div>--}}
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

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <!-- Pagination Links -->
                                                {{ $categories->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->



{{--                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
{{--                     aria-hidden="true">--}}
{{--                    <div class="modal-dialog modal-dialog-centered">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header bg-light p-3">--}}
{{--                                <h5 class="modal-title" id="exampleModalLabel"></h5>--}}
{{--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"--}}
{{--                                        id="close-modal"></button>--}}
{{--                            </div>--}}
{{--                            <form method="POST" action="{{ route('createCategory') }}">--}}
{{--                                @csrf--}}
{{--                                <div class="modal-body">--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="category_name-field" class="form-label">Category Name</label>--}}
{{--                                        <input type="text" id="category_name-field" name="category_name" class="form-control" placeholder="Enter Category Name" required />--}}
{{--                                    </div>--}}

{{--                                    <div class="mb-3">--}}
{{--                                        <label for="description-field" class="form-label">Description</label>--}}
{{--                                        <input type="text" id="description-field" name="description" class="form-control" placeholder="Enter description" required />--}}
{{--                                    </div>--}}

{{--                                    <div>--}}
{{--                                        <label for="category_status-field" class="form-label">Category Status</label>--}}
{{--                                        <select class="form-control" data-trigger name="category_status" id="category_status-field" >--}}
{{--                                            <option value="">Status</option>--}}
{{--                                            <option value="Active">Active</option>--}}
{{--                                            <option value="InActive">InActive</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <div class="hstack gap-2 justify-content-end">--}}
{{--                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>--}}
{{--                                        <button type="submit" class="btn btn-success" id="add-btn">Add Category</button>--}}
{{--                                        <button type="button" class="btn btn-success" id="edit-btn">Update</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="modalTitle">Add Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form method="POST" id="categoryForm" action="{{ route('createCategory') }}">
                                @csrf
                                <input type="hidden" id="category-id-field" name="category_id">

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Category Name</label>
                                        <input type="text" id="category_name-field" name="category_name" class="form-control" required />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <input type="text" id="description-field" name="description" class="form-control" required />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Category Status</label>
                                        <select class="form-control" name="category_status" id="category_status-field" required>
                                            <option value="">Select Status</option>

                                            <!-- Conditionally show only the opposite status and pre-select the current status -->
                                            @if ($category->category_status == 'active')
                                                <option value="Active" {{ old('category_status', $category->category_status) == 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="Inactive" {{ old('category_status', $category->category_status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                            @elseif ($category->category_status == 'inactive')
                                                <option value="Inactive" {{ old('category_status', $category->category_status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                <option value="Active" {{ old('category_status', $category->category_status) == 'active' ? 'selected' : '' }}>Active</option>
                                            @endif
                                        </select>
                                    </div>






                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="save-btn">Add Category</button>
                                    <button type="submit" class="btn btn-success" id="update-btn" style="display: none;">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- delete Modal -->
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
                    // Get category data from the button's data attributes
                    let categoryId = this.getAttribute('data-id');
                    let categoryName = this.getAttribute('data-name');
                    let categoryDescription = this.getAttribute('data-description');
                    let categoryStatus = this.getAttribute('data-status');

                    // Set modal title
                    document.getElementById('category-id-field').value = categoryId;
                    document.getElementById('category_name-field').value = categoryName;
                    document.getElementById('description-field').value = categoryDescription;
                    document.getElementById('modalTitle').textContent = 'Edit Category';

                    // Populate the form fields
                    let statusDropdown = document.getElementById('category_status-field');
                    statusDropdown.innerHTML = ''; // Clear previous options

                    // Add the opposite status option based on the current status
                    if (categoryStatus === 'active') {
                        statusDropdown.innerHTML = `
                    <option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                `;
                    } else if (categoryStatus === 'inactive') {
                        statusDropdown.innerHTML = `
                    <option value="Inactive" selected>Inactive</option>
                    <option value="Active">Active</option>
                `;
                    }

                    // Change form action for update
                    let form = document.getElementById("categoryForm");
                    form.action = `/categories/update/${categoryId}`; // Update route

                    // Show the "Update" button and hide the "Add Category" button
                    document.getElementById('save-btn').style.display = 'none';
                    document.getElementById('update-btn').style.display = 'inline-block';
                });
            });

            // Reset modal on close
            document.getElementById("showModal").addEventListener("hidden.bs.modal", function () {
                document.getElementById("categoryForm").reset();
                document.getElementById("categoryForm").action = "{{ route('createCategory') }}"; // Default add route

                document.getElementById("modalTitle").innerText = "Add Category";
                document.getElementById("save-btn").style.display = "inline-block";
                document.getElementById("update-btn").style.display = "none";
            });
        });




    </script>


@endsection
