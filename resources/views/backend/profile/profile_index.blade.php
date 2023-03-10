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
                                        <h5>Your Information</h5>
                                    </div>
                                    {{--          @if (session('success'))
                                        <div class="alert alert-primary">{{ session('success') }}</div>
                                    @endif --}}
                                    <table class="w-100" border="1">
                                        <tr>
                                            <td>Profile</td>
                                            <td class="w-50">
                                                @if (auth()->user()->profile_photo)
                                                    <img src="{{ asset('uploads/profiles') }}/{{ auth()->user()->profile_photo }}"
                                                        alt="" class="img-thumbnail">
                                                @else
                                                    <img src="{{ asset('uploads/profiles/profile_avatar.jpg') }}"
                                                        alt="" class="img-thumbnail">
                                                @endif

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Name :</h3>
                                            </td>
                                            <td>
                                                <h3>{{ auth()->user()->name }}</h3>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h3>Email: </h3>
                                            </td>
                                            <td>
                                                <h3>{{ auth()->user()->email }}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>Role:</h3>
                                            </td>
                                            <td>
                                                <h3>{{ auth()->user()->role }}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>Action</h3>
                                            </td>
                                            <td align="center">
                                                <button class="btn btn-primary"><a href="{{ route('change.index') }}"
                                                        style="color:white">Password Change</a></button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-5 col-md-4 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Update Your Information</h5>
                                    </div>
                                    @if (session('success'))
                                        <div class="alert alert-primary">{{ session('success') }}</div>
                                    @endif

                                    <form action="{{ route('myProfile.store') }}" method="POST"
                                        enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                                        @csrf
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Update
                                                Image</label>
                                            <div class="form-group col-sm-9">
                                                <input type="file" class="form-control" name="profile_image">
                                                @error('profile_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Your Name
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Users Name"
                                                    name="profile_name" value="{{ auth()->user()->name }}">
                                                @error('profile_name')
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
