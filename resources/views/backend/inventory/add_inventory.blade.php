@extends('layouts.dashboardmaster')


@section('content')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12 col-lg-5 col-md-6 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Add Your Product Size</h5>
                                    </div>
                                    @if (session('success'))
                                        <div class="alert alert-primary">{{ session('success') }}</div>
                                    @endif
                                    <form action="{{ route('product.inventory.size') }}" method="POST"
                                        class="theme-form theme-form-2 mega-form">
                                        @csrf
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product Size</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Users Name"
                                                    name="size_name" value="{{ old('size_name') }}">
                                                @error('size_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title"></label>
                                            <div class="form-group col-sm-9">
                                                <button type="submit" class="btn btn-success">Add Size</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-5 col-md-6 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Add Your Product Color</h5>
                                    </div>
                                    @if (session('color_success'))
                                        <div class="alert alert-primary">{{ session('color_success') }}</div>
                                    @endif
                                    <form action="{{ route('product.inventory.color') }}" method="POST"
                                        class="theme-form theme-form-2 mega-form">
                                        @csrf
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product Color Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="color_name"
                                                    placeholder="Enter your color name">
                                                @error('color_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Color Code</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" style="width:100px; height:30px; "
                                                    type="color" name="color_code">
                                                @error('color_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title"></label>
                                            <div class="form-group col-sm-9">
                                                <button type="submit" class="btn btn-success">Add Color</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12 col-lg-5 col-md-6 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Sizes List</h5>
                                    </div>
                                    <table class="table table-bordered">

                                        <tr>
                                            <th class="text-center">Serial No</th>
                                            <th class="text-center">Size Name</th>
                                        </tr>
                                        @forelse ($sizes as $size)
                                            <tr>
                                                <td align="center">{{ $loop->index + 1 }}</td>
                                                <td align="center">{{ $size->size_name }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="1">No Size Inserted</td>
                                            </tr>
                                        @endforelse
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-5 col-md-6 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Colors List</h5>
                                    </div>
                                    <table class="table table-bordered">

                                        <tr>
                                            <th class="text-center">Serial No</th>
                                            <th class="text-center">Color Name</th>
                                            <th class="text-center">Color Code</th>
                                        </tr>
                                        @forelse ($colors as $color)
                                            <tr>
                                                <td align="center">{{ $loop->index + 1 }}</td>
                                                <td align="center">
                                                    {{ $color->color_name }}
                                                    <span class="bdge"
                                                        style="background-color:{{ $color->color_code }}; width:30px">
                                                        &nbsp
                                                    </span>
                                                </td>
                                                <td>
                                                    {{ $color->color_code }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="1">No Size Inserted</td>
                                            </tr>
                                        @endforelse
                                    </table>

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
