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
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Update Your Information</h5>
                                    </div>
                                    @if (session('success'))
                                        <div class="alert alert-primary">{{ session('success') }}</div>
                                    @endif

                                    <form action="{{ route('change.store') }}" method="POST"
                                        class="theme-form theme-form-2 mega-form">
                                        @csrf

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Current Password</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Current password"
                                                    name="current_password">
                                                @error('current_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">New Password</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="New password"
                                                    name="new_password">
                                                @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Confirmation Password</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                    placeholder="Confirmation password" name="confirmation_password">
                                                @error('confirmation_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title"></label>
                                            <div class="form-group col-sm-9">
                                                <button type="submit" class="btn btn-success">Update Info</button>
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
                        <p class="mb-0">Copyright 2022 ?? Fastkart theme by pixelstrap</p>
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
