@extends("layouts.frontendmaster")

@section('content')
  <!-- User Dashboard Section Start -->
  <section class="user-dashboard-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-xxl-3 col-lg-4">
                <div class="dashboard-left-sidebar">
                    <div class="close-button d-flex d-lg-none">
                        <button class="close-sidebar">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="profile-box">
                        <div class="cover-image">
                            <img src="{{asset('frontend_assets')}}/images/inner-page/cover-img.jpg" class="img-fluid blur-up lazyload"
                                alt="">
                            {{-- <img src="{{asset('frontend_assets')}}/images/inner-page/cover-img.jpg" class="img-fluid blur-up lazyload"
                                alt=""> --}}
                        </div>

                        <div class="profile-contain">
                            <div class="profile-image">
                                <div class="position-relative">
                                    <img src="{{asset('frontend_assets')}}/images/vendor-page/logo.png"
                                        class="blur-up lazyload update_img" alt="">
                                </div>
                            </div>

                            <div class="profile-name">
                                <h3>{{auth()->user()->name}}</h3>
                                <h6 class="text-content">{{auth()->user()->email}}</h6>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#pills-tabContent" class="nav-link active" id="pills-dashboard-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-dashboard" role="tab"
                                aria-controls="pills-dashboard" aria-selected="true"><i data-feather="home"></i>
                                DashBoard</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-product-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-product" type="button" role="tab"
                                aria-controls="pills-product" aria-selected="false"><i
                                    data-feather="shopping-bag"></i>Products</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-order"
                                aria-selected="false"><i data-feather="shopping-bag"></i>Order</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false"><i data-feather="user"></i>
                                Profile</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-security" type="button" role="tab"
                                aria-controls="pills-security" aria-selected="false"><i data-feather="settings"></i>
                                Setting</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a  class="nav-link" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"><i
                                    data-feather="log-out"></i>
                                Log Out</a>
                            {{-- <button class="nav-link" id="pills-out-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-out" type="button" role="tab" aria-selected="false"><i
                                    data-feather="log-out"></i>
                                Log Out</button> --}}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xxl-9 col-lg-8">
                <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                    Menu</button>
                <div class="dashboard-right-sidebar">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                            aria-labelledby="pills-dashboard-tab">
                            <div class="dashboard-home">
                                <div class="title">
                                    <h2><span class="text-primary">{{auth()->user()->name}}</span> Dashboard</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="{{asset('frontend_assets')}}/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="dashboard-user-name">
                                    <h6 class="text-content">Hello, <b class="text-title">Vicki E. Pope</b></h6>
                                    <p class="text-content">From your My Account Dashboard you have the ability to
                                        view a snapshot of your recent account activity and update your account
                                        information. Select a link below to view or edit information.</p>
                                </div>

                                <div class="total-box">
                                    <div class="row g-sm-4 g-3">
                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="{{asset('frontend_assets')}}/images/svg/order.svg"
                                                    class="img-1 blur-up lazyload" alt="">
                                                <img src="{{asset('frontend_assets')}}/images/svg/order.svg" class="blur-up lazyload"
                                                    alt="">
                                                <div class="totle-detail">
                                                    <h5>Total Orders</h5>
                                                    <h3>{{$invoices->count()}}</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">

                                            <div class="totle-contain">
                                                <img src="{{asset('frontend_assets')}}/images/svg/pending.svg"
                                                    class="img-1 blur-up lazyload" alt="">
                                                <img src="{{asset('frontend_assets')}}/images/svg/pending.svg" class="blur-up lazyload"
                                                    alt="">
                                                <div class="totle-detail">
                                                    <h5>Paid Orders</h5>
                                                    <h3>{{$invoices->where('payment_status', 'paid')->count()}}</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                            <div class="totle-contain">
                                                <img src="{{asset('frontend_assets')}}/images/svg/wishlist.svg"
                                                    class="img-1 blur-up lazyload" alt="">
                                                <img src="{{asset('frontend_assets')}}/images/svg/wishlist.svg"
                                                    class="blur-up lazyload" alt="">
                                                <div class="totle-detail">
                                                    <h5>Unpaid Orders</h5>
                                                    <h3>{{$invoices->where('payment_status', 'unpaid')->count()}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-4">
                                    {{-- <div class="col-xxl-6">
                                        <div class="dashboard-bg-box">
                                            <div id="chart"></div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="col-xxl-6">
                                        <div class="dashboard-bg-box">
                                            <div id="sale"></div>
                                        </div>
                                    </div> --}}

                                    <div class="col-xxl-6">
                                        <div class="table-responsive dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Trending Products</h3>
                                            </div>

                                            <table class="table product-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Images</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Sales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="{{asset('frontend_assets')}}/images/vegetable/product/1.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>Fantasy Crunchy Choco Chip Cookies</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$25.69</h6>
                                                        </td>
                                                        <td>
                                                            <h6>152</h6>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="{{asset('frontend_assets')}}/images/vegetable/product/2.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>Peanut Butter Bite Premium Butter Cookies 600 g</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$35.36</h6>
                                                        </td>
                                                        <td>
                                                            <h6>34</h6>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="{{asset('frontend_assets')}}/images/vegetable/product/3.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>Yumitos Chilli Sprinkled Potato Chips 100 g</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$78.55</h6>
                                                        </td>
                                                        <td>
                                                            <h6>78</h6>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="product-image">
                                                            <img src="{{asset('frontend_assets')}}/images/vegetable/product/4.png"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>
                                                            <h6>healthy Long Life Toned Milk 1 L</h6>
                                                        </td>
                                                        <td>
                                                            <h6>$32.98</h6>
                                                        </td>
                                                        <td>
                                                            <h6>135</h6>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6">
                                        <div class="order-tab dashboard-bg-box">
                                            <div class="dashboard-title mb-4">
                                                <h3>Recent Order</h3>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table order-table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="product-image">#254834</td>
                                                            <td>
                                                                <h6>Choco Chip Cookies</h6>
                                                            </td>
                                                            <td>
                                                                <label class="success">Shipped</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#355678</td>
                                                            <td>
                                                                <h6>Premium Butter Cookies</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#647536</td>
                                                            <td>
                                                                <h6>Sprinkled Potato Chips</h6>
                                                            </td>
                                                            <td>
                                                                <label class="success">Shipped</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#125689</td>
                                                            <td>
                                                                <h6>Milk 1 L</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#215487</td>
                                                            <td>
                                                                <h6>Raw Mutton Leg</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#365474</td>
                                                            <td>
                                                                <h6>Instant Coffee</h6>
                                                            </td>
                                                            <td>
                                                                <label class="success">Shipped</label>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product-image">#368415</td>
                                                            <td>
                                                                <h6>Jowar Stick and Jowar Chips</h6>
                                                            </td>
                                                            <td>
                                                                <label class="danger">Pending</label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-product" role="tabpanel"
                            aria-labelledby="pills-product-tab">
                            <div class="product-tab">
                                <div class="title">
                                    <h2>All Product</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="{{asset('frontend_assets')}}/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="table-responsive dashboard-bg-box">
                                    <table class="table product-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Images</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Sales</th>
                                                <th scope="col">Edit / Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/1.png"
                                                        class="img-fluid" alt="">
                                                </td>
                                                <td>
                                                    <h6>Fantasy Crunchy Choco Chip Cookies</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$25.69</h6>
                                                </td>
                                                <td>
                                                    <h6>63</h6>
                                                </td>
                                                <td>
                                                    <h6>152</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="product-image">
                                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/2.png"
                                                        class="img-fluid" alt="">
                                                </td>
                                                <td>
                                                    <h6>Peanut Butter Bite Premium Butter Cookies 600 g</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$35.36</h6>
                                                </td>
                                                <td>
                                                    <h6>14</h6>
                                                </td>
                                                <td>
                                                    <h6>34</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="product-image">
                                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/3.png"
                                                        class="img-fluid" alt="">
                                                </td>
                                                <td>
                                                    <h6>Yumitos Chilli Sprinkled Potato Chips 100 g</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$78.55</h6>
                                                </td>
                                                <td>
                                                    <h6>55</h6>
                                                </td>
                                                <td>
                                                    <h6>78</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/4.png"
                                                        class="img-fluid" alt="">
                                                </td>
                                                <td>
                                                    <h6>healthy Long Life Toned Milk 1 L</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$32.98</h6>
                                                </td>
                                                <td>
                                                    <h6>69</h6>
                                                </td>
                                                <td>
                                                    <h6>135</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/5.png"
                                                        class="img-fluid" alt="">
                                                </td>
                                                <td>
                                                    <h6>Raw Mutton Leg, Packaging 5 Kg</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$36.98</h6>
                                                </td>
                                                <td>
                                                    <h6>35</h6>
                                                </td>
                                                <td>
                                                    <h6>154</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/6.png"
                                                        class="img-fluid" alt="">
                                                </td>
                                                <td>
                                                    <h6>Cold Brew Coffee Instant Coffee 50 g</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$36.58</h6>
                                                </td>
                                                <td>
                                                    <h6>69</h6>
                                                </td>
                                                <td>
                                                    <h6>168</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-image">
                                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/7.png"
                                                        class="img-fluid" alt="">
                                                </td>
                                                <td>
                                                    <h6>SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h6>
                                                </td>
                                                <td>
                                                    <h6 class="theme-color fw-bold">$25.69</h6>
                                                </td>
                                                <td>
                                                    <h6>63</h6>
                                                </td>
                                                <td>
                                                    <h6>152</h6>
                                                </td>
                                                <td class="efit-delete">
                                                    <i data-feather="edit" class="edit"></i>
                                                    <i data-feather="trash-2" class="delete"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <nav class="custome-pagination">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                    <i class="fa-solid fa-angles-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-order" role="tabpanel"
                            aria-labelledby="pills-order-tab">
                            <div class="dashboard-order">
                                <div class="title">
                                    <h2>All Order</h2>
                                    <span class="title-leaf title-leaf-gray">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="{{asset('frontend_assets')}}/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="order-tab dashboard-bg-box">
                                    <div class="table-responsive">
                                        <table class="table order-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Order ID</th>
                                                    <th scope="col">Delivery Charge</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Shipping Chage</th>
                                                    <th scope="col">Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($invoices as $invoice )
                                                <tr>
                                                    <td class="product-image">{{$invoice->invoice_number}}</td>
                                                    <td>
                                                        <h6>{{$invoice->payment_option}}</h6>
                                                    </td>
                                                    <td>
                                                        <label class="success">{{$invoice->payment_status}}</label>
                                                    </td>
                                                    <td>
                                                        <label class="success">{{$invoice->delivery_charge}}</label>
                                                    </td>
                                                    <td>
                                                        <h6>{{$invoice->total_amount}}</h6>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td></td>
                                                    <td>No order found</td>
                                                </tr>
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                    <nav class="custome-pagination">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                    <i class="fa-solid fa-angles-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item" aria-current="page">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="fa-solid fa-angles-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="dashboard-profile">
                                <div class="title">
                                    <h2>My Profile</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="{{asset('frontend_assets')}}/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="profile-tab dashboard-bg-box">
                                    <div class="dashboard-title dashboard-flex">
                                        <h3>Profile Name</h3>
                                        <button class="btn btn-sm theme-bg-color text-white" data-bs-toggle="modal"
                                            data-bs-target="#edit-profile">Edit Profile</button>
                                    </div>

                                    <ul>
                                        <li>
                                            <h5>Company Name :</h5>
                                            <h5>Grocery Store</h5>
                                        </li>
                                        <li>
                                            <h5>Email Address :</h5>
                                            <h5>joshuadbass@rhyta.com</h5>
                                        </li>
                                        <li>
                                            <h5>Country / Region :</h5>
                                            <h5>107 Veltri Drive</h5>
                                        </li>

                                        <li>
                                            <h5>Year Established :</h5>
                                            <h5>2022</h5>
                                        </li>

                                        <li>
                                            <h5>Total Employees :</h5>
                                            <h5>154 - 360 People</h5>
                                        </li>
                                        <li>
                                            <h5>Category :</h5>
                                            <h5>Grocery</h5>
                                        </li>

                                        <li>
                                            <h5>Street Address :</h5>
                                            <h5>234 High St</h5>
                                        </li>

                                        <li>
                                            <h5>City / State :</h5>
                                            <h5>107 Veltri Drive</h5>
                                        </li>

                                        <li>
                                            <h5>Zip :</h5>
                                            <h5>B23 6SN</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-security" role="tabpanel"
                            aria-labelledby="pills-security-tab">
                            <div class="dashboard-privacy">
                                <div class="title">
                                    <h2>My Setting</h2>
                                    <span class="title-leaf">
                                        <svg class="icon-width bg-gray">
                                            <use xlink:href="{{asset('frontend_assets')}}/svg/leaf.svg#leaf"></use>
                                        </svg>
                                    </span>
                                </div>

                                <div class="dashboard-bg-box">
                                    <div class="dashboard-title mb-4">
                                        <h3>Notifications</h3>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="desktop" name="desktop"
                                                checked>
                                            <label class="form-check-label ms-2" for="desktop">Show
                                                Desktop Notifications</label>
                                        </div>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="enable" name="desktop">
                                            <label class="form-check-label ms-2" for="enable">Enable
                                                Notifications</label>
                                        </div>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="activity"
                                                name="desktop">
                                            <label class="form-check-label ms-2" for="activity">Get
                                                notification for my own activity</label>
                                        </div>
                                    </div>

                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="dnd" name="desktop">
                                            <label class="form-check-label ms-2" for="dnd">DND</label>
                                        </div>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Save
                                        Changes</button>
                                </div>

                                <div class="dashboard-bg-box">
                                    <div class="dashboard-title mb-4">
                                        <h3>Deactivate Account</h3>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="concern"
                                                name="concern">
                                            <label class="form-check-label ms-2" for="concern">I have a privacy
                                                concern</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="temporary"
                                                name="concern">
                                            <label class="form-check-label ms-2" for="temporary">This is
                                                temporary</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="other" name="concern">
                                            <label class="form-check-label ms-2" for="other">other</label>
                                        </div>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Deactivate
                                        Account</button>
                                </div>

                                <div class="dashboard-bg-box">
                                    <div class="dashboard-title mb-4">
                                        <h3>Delete Account</h3>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="usable" name="usable">
                                            <label class="form-check-label ms-2" for="usable">No longer
                                                usable</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="account" name="usable">
                                            <label class="form-check-label ms-2" for="account">Want to switch on
                                                other
                                                account</label>
                                        </div>
                                    </div>
                                    <div class="privacy-box">
                                        <div
                                            class="form-check custom-form-check custom-form-check-2 d-flex align-items-center">
                                            <input class="form-check-input" type="radio" id="other-2" name="usable">
                                            <label class="form-check-label ms-2" for="other-2">Other</label>
                                        </div>
                                    </div>

                                    <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white">Delete My
                                        Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- User Dashboard Section End -->

<!-- Footer Section Start -->
<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="service-section">
            <div class="row g-3">
                <div class="col-12">
                    <div class="service-contain">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{asset('frontend_assets')}}/svg/product.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Every Fresh Products</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{asset('frontend_assets')}}/svg/delivery.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Free Delivery For Order Over $50</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{asset('frontend_assets')}}/svg/discount.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Daily Mega Discounts</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{asset('frontend_assets')}}/svg/market.svg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>Best Price On The Market</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer section-b-space section-t-space">
            <div class="row g-md-4 g-3">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-logo">
                        <div class="theme-logo">
                            <a href="index.html">
                                <img src="{{asset('frontend_assets')}}/images/logo/1.png" class="blur-up lazyload" alt="">
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            <p>We are a friendly bar serving a variety of cocktails, wines and beers. Our bar is a
                                perfect place for a couple.</p>

                            <ul class="address">
                                <li>
                                    <i data-feather="home"></i>
                                    <a href="javascript:void(0)">1418 Riverwood Drive, CA 96052, US</a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i>
                                    <a href="javascript:void(0)">support@fastkart.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Categories</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Vegetables & Fruit</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Beverages</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Meats & Seafood</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Frozen Foods</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Biscuits & Snacks</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Grocery & Staples</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Useful Links</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="index.html" class="text-content">Home</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">Shop</a>
                            </li>
                            <li>
                                <a href="about-us.html" class="text-content">About Us</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="text-content">Blog</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="text-content">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Help Center</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="order-success.html" class="text-content">Your Order</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="text-content">Your Account</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="text-content">Track Order</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="text-content">Your Wishlist</a>
                            </li>
                            <li>
                                <a href="search.html" class="text-content">Search</a>
                            </li>
                            <li>
                                <a href="faq.html" class="text-content">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Contact Us</h4>
                    </div>

                    <div class="footer-contact">
                        <ul>
                            <li>
                                <div class="footer-number">
                                    <i data-feather="phone"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Hotline 24/7 :</h6>
                                        <h5>+91 888 104 2340</h5>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="footer-number">
                                    <i data-feather="mail"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Email Address :</h6>
                                        <h5>fastkart@hotmail.com</h5>
                                    </div>
                                </div>
                            </li>

                            <li class="social-app">
                                <h5 class="mb-2 text-content">Download App :</h5>
                                <ul>
                                    <li class="mb-0">
                                        <a href="https://play.google.com/store/apps" target="_blank">
                                            <img src="{{asset('frontend_assets')}}/images/playstore.svg" class="blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="https://www.apple.com/in/app-store/" target="_blank">
                                            <img src="{{asset('frontend_assets')}}/images/appstore.svg" class="blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="reserve">
                <h6 class="text-content">©2022 Fastkart All rights reserved</h6>
            </div>

            <div class="payment">
                <img src="{{asset('frontend_assets')}}/images/payment/1.png" class="blur-up lazyload" alt="">
            </div>

            <div class="social-link">
                <h6 class="text-content">Stay connected :</h6>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://in.pinterest.com/" target="_blank">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                    <p class="mt-1 text-content">Recommended deals for you.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="deal-offer-box">
                    <ul class="deal-offer-list">
                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/10.png" class="blur-up lazyload"
                                        alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/11.png" class="blur-up lazyload"
                                        alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/12.png" class="blur-up lazyload"
                                        alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{asset('frontend_assets')}}/images/vegetable/product/13.png" class="blur-up lazyload"
                                        alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Box Modal End -->

<!-- Tap to top start -->
<div class="theme-option">
    <div class="setting-box">
        <button class="btn setting-button">
            <i class="fa-solid fa-gear"></i>
        </button>

        <div class="theme-setting-2">
            <div class="theme-box">
                <ul>
                    <li>
                        <div class="setting-name">
                            <h4>Color</h4>
                        </div>
                        <div class="theme-setting-button color-picker">
                            <form class="form-control">
                                <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                <input type="color" class="form-control form-control-color" id="colorPick"
                                    value="#0da487" title="Choose your color">
                            </form>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>Dark</h4>
                        </div>
                        <div class="theme-setting-button">
                            <button class="btn btn-2 outline" id="darkButton">Dark</button>
                            <button class="btn btn-2 unline" id="lightButton">Light</button>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>RTL</h4>
                        </div>
                        <div class="theme-setting-button rtl">
                            <button class="btn btn-2 rtl-unline">LTR</button>
                            <button class="btn btn-2 rtl-outline">RTL</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- Add address modal box start -->
<div class="modal fade theme-modal" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a new address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                        <label for="fname">First Name</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                        <label for="lname">Last Name</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                        <label for="email">Email Address</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="address"
                            style="height: 100px"></textarea>
                        <label for="address">Enter Address</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="email" class="form-control" id="pin" placeholder="Enter Pin Code">
                        <label for="pin">Pin Code</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn theme-bg-color btn-md text-white" data-bs-dismiss="modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Add address modal box end -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Choose your Delivery Location</h5>
                <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Search Your Area">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>Select a Location</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Alabama</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Arizona</h6>
                                <span>Min: $150</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>California</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Colorado</h6>
                                <span>Min: $140</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Florida</h6>
                                <span>Min: $160</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Georgia</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Kansas</h6>
                                <span>Min: $170</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Minnesota</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>New York</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Washington</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->

<!-- Edit Profile Start -->
<div class="modal fade theme-modal" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-xxl-12">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="pname" value="Jack Jennas">
                                <label for="pname">Full Name</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="email" class="form-control" id="email1" value="vicki.pope@gmail.com">
                                <label for="email1">Email address</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input class="form-control" type="tel" value="4567891234" name="mobile" id="mobile"
                                    maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                        this.value.slice(0, this.maxLength);">
                                <label for="mobile">Email address</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-12">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="address1"
                                    value="8424 James Lane South San Francisco">
                                <label for="address1">Add Address</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-12">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="address2" value="CA 94080">
                                <label for="address2">Add Address 2</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <select class="form-select" id="floatingSelect1"
                                    aria-label="Floating label select example">
                                    <option selected>Choose Your Country</option>
                                    <option value="kindom">United Kingdom</option>
                                    <option value="states">United States</option>
                                    <option value="fra">France</option>
                                    <option value="china">China</option>
                                    <option value="spain">Spain</option>
                                    <option value="italy">Italy</option>
                                    <option value="turkey">Turkey</option>
                                    <option value="germany">Germany</option>
                                    <option value="russian">Russian Federation</option>
                                    <option value="malay">Malaysia</option>
                                    <option value="mexico">Mexico</option>
                                    <option value="austria">Austria</option>
                                    <option value="hong">Hong Kong SAR, China</option>
                                    <option value="ukraine">Ukraine</option>
                                    <option value="thailand">Thailand</option>
                                    <option value="saudi">Saudi Arabia</option>
                                    <option value="canada">Canada</option>
                                    <option value="singa">Singapore</option>
                                </select>
                                <label for="floatingSelect">Country</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <select class="form-select" id="floatingSelect">
                                    <option selected>Choose Your City</option>
                                    <option value="kindom">India</option>
                                    <option value="states">Canada</option>
                                    <option value="fra">Dubai</option>
                                    <option value="china">Los Angeles</option>
                                    <option value="spain">Thailand</option>
                                </select>
                                <label for="floatingSelect">City</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="address3" value="94080">
                                <label for="address3">Pin Code</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" data-bs-dismiss="modal"
                    class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profile End -->

<!-- Edit Card Start -->
<div class="modal fade theme-modal" id="editCard" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel8">Edit Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="finame" value="Mark">
                                <label for="finame">First Name</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="laname" value="Jecno">
                                <label for="laname">Last Name</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <select class="form-select" id="floatingSelect12"
                                    aria-label="Floating label select example">
                                    <option selected>Card Type</option>
                                    <option value="kindom">Visa Card</option>
                                    <option value="states">MasterCard Card</option>
                                    <option value="fra">RuPay Card</option>
                                    <option value="china">Contactless Card</option>
                                    <option value="spain">Maestro Card</option>
                                </select>
                                <label for="floatingSelect12">Card Type</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold"
                    data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light">Update Card</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Card End -->

<!-- Remove Profile Modal Start -->
<div class="modal fade theme-modal remove-profile" id="removeProfile" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
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
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                    data-bs-target="#removeAddress" data-bs-toggle="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade theme-modal remove-profile" id="removeAddress" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box text-center">
                    <h4 class="text-content">It's Removed.</h4>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Remove Profile Modal End -->

<!-- Edit Profile Modal Start -->
<div class="modal fade theme-modal" id="edit-profile" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Your Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="companyName" value="Grocery Store">
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress" value="joshuadbass@rhyta.com">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country / Region</label>
                        <input type="text" class="form-control" id="country" value="107 Veltri Drive">
                    </div>
                    <div class="mb-3">
                        <label for="established" class="form-label">Year Established</label>
                        <input type="email" class="form-control" id="established" value="2022">
                    </div>
                    <div class="mb-3">
                        <label for="employees" class="form-label">Total Employees</label>
                        <input type="text" class="form-control" id="employees" value="154 - 360 People">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="email" class="form-control" id="category" value="Grocery">
                    </div>
                    <div class="mb-3">
                        <label for="street" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="street" value="234 High St">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City / State</label>
                        <input type="email" class="form-control" id="city" value="107 Veltri Drive">
                    </div>
                    <div class="mb-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" value="B23 6SN">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold"
                    data-bs-dismiss="modal">Cancle</button>
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                    data-bs-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profile Modal End -->

<!-- latest jquery-->
<script src="{{asset('frontend_assets')}}/js/jquery-3.6.0.min.js"></script>

<!-- jquery ui-->
<script src="{{asset('frontend_assets')}}/js/jquery-ui.min.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('frontend_assets')}}/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend_assets')}}/js/bootstrap/bootstrap-notify.min.js"></script>
<script src="{{asset('frontend_assets')}}/js/bootstrap/popper.min.js"></script>

<!-- feather icon js-->
<script src="{{asset('frontend_assets')}}/js/feather/feather.min.js"></script>
<script src="{{asset('frontend_assets')}}/js/feather/feather-icon.js"></script>

<!-- Lazyload Js -->
<script src="{{asset('frontend_assets')}}/js/lazysizes.min.js"></script>

<!-- Slick js-->
<script src="{{asset('frontend_assets')}}/js/slick/slick.js"></script>
<script src="{{asset('frontend_assets')}}/js/slick/custom_slick.js"></script>

<!-- Apexchart Js -->
{{-- <script src="{{asset('frontend_assets')}}/js/apexchart.js"></script>
<script src="{{asset('frontend_assets')}}/js/custom-chart.js"></script> --}}

<!-- Nav & tab upside js -->
<script src="{{asset('frontend_assets')}}/js/nav-tab.js"></script>

<!-- script js -->
<script src="{{asset('frontend_assets')}}/js/script.js"></script>

<!-- thme setting js -->
<script src="{{asset('frontend_assets')}}/js/theme-setting.js"></script>
</body>

</html>

@endsection