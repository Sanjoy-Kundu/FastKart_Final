@extends('layouts.dashboardmaster')


@section('content')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12 col-lg-8 col-md-8 m-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="text-center">Add Inventory of <span
                                            class="text-primary">{{ $product->product_name }}</span></h2>
                                    <h4><b>Descripiton</b> {{ $product->short_description }}</h4>


                                    <p style="width: 300px; height:250px;" class="mt-3">
                                        Photo:
                                        <img class="img-fluid img-thumbnail w-100 h-100"
                                            src="{{ asset('uploads/products/mainPHoto') }}/{{ $product->product_image }}"
                                            alt="">
                                        <!-----View Porduct---->
                                        <a href="{{ route('product.details', $product->id) }}" target="_blank"
                                            class="btn btn-primary w-50">View
                                            Product</a>
                                    </p>
                                </div>
                                <div class="card-body mt-5">
                                    <div class="card-header-2">
                                        <h5>Add Your Product Inventory</h5>

                                    </div>
                                    @if (session('inventory_success'))
                                        <div class="alert alert-primary">{{ session('inventory_success') }}</div>
                                    @endif
                                    <form action="{{ route('product.inventory.insert', $product->id) }}" method="POST"
                                        class="theme-form theme-form-2 mega-form">
                                        @csrf
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product Quantity</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="Users Name"
                                                    name="product_quantity" value="{{ old('size_name') }}">
                                                @error('size_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product Size</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="product_size" id="">
                                                    <option value="">select one</option>

                                                    @foreach ($sizes as $size)
                                                        <option value="{{ $size->id }}"> {{ $size->size_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('size_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product Color</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="product_color" id="">
                                                    <option value="">select one</option>

                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->id }}"> {{ $color->color_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('size_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title"></label>
                                            <div class="form-group col-sm-9">
                                                <button type="submit" class="btn btn-success">Add Inventory</button>
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
                        <div class="col-sm-12 col-lg-8 col-md-8 m-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="text-center">Inventroy List Table</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table table-border table-striped">
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Product Size</th>
                                            <th>Product Color</th>
                                            <th>Product Quantity</th>
                                            <th>Total Price (BDT)</th>
                                        </tr>
                                        {{ $product->product_pruches_price }}
                                        @php
                                            $total_value = 0;
                                        @endphp
                                        @forelse ($inventories as $inventory)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $inventory->relationshipWIthProduct->product_name }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/products/mainPhoto') }}/{{ $inventory->relationshipWIthProduct->product_image }}"
                                                        alt="not-found" class="img-fluid" width="100" height="100">
                                                </td>
                                                <td>
                                                    {{ $inventory->relationshipWithSize->size_name }}
                                                </td>
                                                <td>
                                                    {{ $inventory->relationshipWIthColor->color_name }}
                                                </td>
                                                <td align="right">{{ $inventory->product_quantity }}</td>
                                                <td align="right">
                                                    {{ $inventory->product_quantity * $product->product_pruches_price }}
                                                    @php
                                                        $total_value += $inventory->product_quantity * $product->product_pruches_price;
                                                    @endphp
                                                </td>
                                            </tr>

                                        @empty
                                        @endforelse
                                        <tr>
                                            <td colspan="6" align="right">{{ $inventories->sum('product_quantity') }}
                                            </td>
                                            <td align="right">{{ $total_value }}</td>
                                        </tr>
                                    </table>
                                </div>

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
