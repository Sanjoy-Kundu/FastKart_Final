@extends('layouts.dashboardmaster')

@section('content')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Information</h5>
                                    </div>


                                    <form method="post" action="{{ route('product.store') }}"
                                        class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Product Name"
                                                    name="product_name">
                                                @error('product_name')
                                                    <span class="text-primary">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="product_category">
                                                    <option disabled>---Select category ---</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('product_category')
                                                    <span class="text-primary">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Product Purches
                                                Price</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter Your product purches price *" id=""
                                                        name="product_pruches_price">
                                                    @error('product_pruches_price')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Product Regular
                                                Price</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter Your product price *" id=""
                                                        name="product_regular_price">
                                                    @error('product_regular_price')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Discount</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter Your product price *" id=""
                                                        name="discount">
                                                    @error('discount')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Short
                                                Description</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <textarea class="form-control" name="short_description" id="" cols="30"></textarea>
                                                    @error('short_description')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Long
                                                Description</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <textarea class="form-control" name="long_description" id="" cols="30"></textarea>
                                                    @error('long_description')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Additional
                                                Information</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <textarea class="form-control" name="additional_information" id="" cols="30"></textarea>
                                                    @error('additional_information')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Care Instruction</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <textarea class="form-control" name="care_instruction" id="" cols="30"></textarea>
                                                    @error('care_instruction')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Product Image</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input class="form-control form-choose" type="file" id="formFile"
                                                        name="product_image">
                                                    @error('product_image')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Featured
                                                Images</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input class="form-control form-choose" type="file"
                                                        name="featureds_images[]" multiple>
                                                    @error('featureds_images')
                                                        <span class="text-primary">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-primary">Add Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer En -->
    </div>
    <!-- Container-fluid End -->
    </div>
    <!-- Page Body End -->
    </div>
    <!-- page-wrapper End -->

    <!-- Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
@endsection
