@extends('layouts.dashboardmaster')

@section('content')
    <!-- Container-fluid starts-->
    <div class="page-body">
        <!-- All User Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>All Category <sup class="badge badge-primary">{{ count($all_categories) }}</sup>
                                </h5>
                                <form class="d-inline-flex">
                                    <a href="{{ url('category/create') }}" class="align-items-center btn btn-theme">
                                        <i data-feather="plus-square"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive category-table">
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Category Slug</th>
                                            <th>Category Image</th>
                                            <th>Upload Date</th>
                                            <th>Update Date</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        @forelse ($all_categories as $category)
                                            <tr>
                                                <td>{{ $category->category_name }}</td>

                                                <td>{{ $category->category_slug }}</td>

                                                <td>
                                                    <div class="table-image">
                                                        @if ($category->category_image)
                                                            <img src="{{ asset('uploads/categories') }}/{{ $category->category_image }}"
                                                                class="img-fluid" alt="">
                                                        @else
                                                            <img src="{{ asset('uploads/categories/category_default.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        @endif

                                                    </div>
                                                </td>

                                                <td>
                                                    {{ $category->created_at->format('d-m-y') }}
                                                </td>

                                                <td>{{ $category->created_at->format('d-m-Y') }}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ url('category/edit') }}/{{ $category->id }}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ url('category/delete') }}/{{ $category->id }}">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td> <span>Please upload an category</span></td>
                                            </tr>
                                        @endforelse

                                        {{-- @forelse ($all_categories as $category)

                                        @endforeach --}}





                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Trashed Category <sup
                                        class="badge badge-primary">{{ count($all_trashedCategories) }}</sup>
                                </h5>
                                <form class="d-inline-flex">
                                    <a href="add-new-category.html" class="align-items-center btn btn-theme">
                                        <i data-feather="plus-square"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive category-table">
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Category Slug</th>
                                            <th>Category Image</th>
                                            <th>Upload Date</th>
                                            <th>Update Date</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>


                                        @forelse ($all_trashedCategories as $category)
                                            <tr>
                                                <td>{{ $category->category_name }}</td>

                                                <td>{{ $category->category_slug }}</td>

                                                <td>
                                                    <div class="table-image">
                                                        @if ($category->category_image)
                                                            <img src="{{ asset('uploads/categories') }}/{{ $category->category_image }}"
                                                                class="img-fluid" alt="">
                                                        @else
                                                            <img src="{{ asset('uploads/categories/category_default.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        @endif

                                                    </div>
                                                </td>

                                                <td>
                                                    {{ $category->created_at->format('d-m-y') }}
                                                </td>

                                                <td>{{ $category->created_at->format('d-m-Y') }}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ url('category/permanent/delete') }}/{{ $category->id }}">
                                                                <button class="btn btn-secondary">P. Delete</button>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ url('category/restore') }}/{{ $category->id }}">
                                                                <button class="btn btn-warning">Restore</button>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td> <span>Please upload an category</span></td>
                                            </tr>
                                        @endforelse

                                        {{-- @forelse ($all_categories as $category)

                                        @endforeach --}}





                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All User Table Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 ?? Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>
    <!-- Container-fluid end -->
    </div>
    <!-- Page Body End -->

    <!-- Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="button-box">
                        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->
    </div>

    <!-- Delete Modal Box Start -->
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                    fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal Box End -->
@endsection
