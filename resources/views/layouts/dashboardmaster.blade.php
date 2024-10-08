<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
    <title>Fastkart - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/linearicon.css">


    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/ratio.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/remixicon.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/bootstrap.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vector-map.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">

    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="{{ route('dashboard') }}">
                            <img class="img-fluid main-logo" src="{{ asset('assets') }}/images/logo/1.png"
                                alt="logo">
                            <img class="img-fluid white-logo" src="{{ asset('assets') }}/images/logo/1-white.png"
                                alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('assets') }}/images/logo/1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>


                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">

                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <i class="ri-notification-line"></i>
                                <span class="badge rounded-pill badge-theme">4</span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i class="ri-notification-line"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
                                            class="pull-right">10 min.</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li>

                        <li>

                            <a class="btn btn-primary" href="{{ route('index') }}">Visit Side</a>

                        </li>
                        <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                @if (auth()->user()->profile_photo)
                                    <img class="user-profile rounded-circle"
                                        src="{{ asset('uploads/profiles') }}/{{ auth()->user()->profile_photo }}"
                                        alt="">
                                @else
                                    <img class="user-profile rounded-circle"
                                        src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" alt="">
                                @endif

                                <div class="user-name-hide media-body">
                                    <span>{{ auth()->user()->name }}</span>
                                    <p class="mb-0 font-roboto">{{ auth()->user()->role }}<i
                                            class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <i data-feather="users"></i>
                                    <span>{{ auth()->user()->email }}</span>

                                </li>
                                <li>
                                    <a href="{{ route('myProfile.index') }}">
                                        <i data-feather="users"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="order-list.html">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile-setting.html">
                                        <i data-feather="settings"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                            <i data-feather="log-out"></i>
                                            <span>Log out</span>
                                        </a>
                                    </form>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="{{ route('dashboard') }}" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="{{ asset('assets') }}/images/logo/full-white.png"
                                alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="{{ route('dashboard') }}">
                            <img class="img-fluid main-logo main-white"
                                src="{{ asset('assets') }}/images/logo/logo.png" alt="logo">
                            <img class="img-fluid main-logo main-dark"
                                src="{{ asset('assets') }}/images/logo/logo-white.png" alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard') }}">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route('product.index') }}">Prodcts List</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('product.create') }}">Add New Products</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>Category</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ url('category') }}">Category List</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('category/create') }}">Add New Category</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-settings-line"></i>
                                        <span>Inventory Management</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="attributes.html">Inventories</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('product.inventory') }}">Add Inventories</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ route('user.index') }}">All users</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.create') }}">Add new user</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="order-list.html">Order List</a>
                                        </li>
                                        <li>
                                            <a href="order-detail.html">Order Detail</a>
                                        </li>
                                        <li>
                                            <a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Coupons</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('coupon.list')}}">Coupon List</a>
                                        </li>

                                        <li>
                                            <a href="{{route('coupon')}}">Create Coupon</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="product-review.html">
                                        <i class="ri-star-line"></i>
                                        <span>Product Review</span>
                                    </a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-settings-line"></i>
                                        <span>Settings</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="profile-setting.html">Profile Setting</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="reports.html">
                                        <i class="ri-file-chart-line"></i>
                                        <span>Reports</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            @yield('content')
            <!-- latest js -->
            <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>

            <!-- Bootstrap js -->
            <script src="{{ asset('assets') }}/js/bootstrap/bootstrap.bundle.min.js"></script>

            <!-- feather icon js -->
            <script src="{{ asset('assets') }}/js/icons/feather-icon/feather.min.js"></script>
            <script src="{{ asset('assets') }}/js/icons/feather-icon/feather-icon.js"></script>

            <!-- scrollbar simplebar js -->
            <script src="{{ asset('assets') }}/js/scrollbar/simplebar.js"></script>
            <script src="{{ asset('assets') }}/js/scrollbar/custom.js"></script>

            <!-- Sidebar jquery -->
            <script src="{{ asset('assets') }}/js/config.js"></script>

            <!-- tooltip init js -->
            <script src="{{ asset('assets') }}/js/tooltip-init.js"></script>

            <!-- Plugins JS -->
            <script src="{{ asset('assets') }}/js/sidebar-menu.js"></script>
            <script src="{{ asset('assets') }}/js/notify/bootstrap-notify.min.js"></script>
            <script src="{{ asset('assets') }}/js/notify/index.js"></script>

            <!-- Apexchar js -->
            <script src="{{ asset('assets') }}/js/chart/apex-chart/apex-chart1.js"></script>
            <script src="{{ asset('assets') }}/js/chart/apex-chart/moment.min.js"></script>
            <script src="{{ asset('assets') }}/js/chart/apex-chart/apex-chart.js"></script>
            <script src="{{ asset('assets') }}/js/chart/apex-chart/stock-prices.js"></script>
            <script src="{{ asset('assets') }}/js/chart/apex-chart/chart-custom1.js"></script>


            <!-- slick slider js -->
            <script src="{{ asset('assets') }}/js/slick.min.js"></script>
            <script src="{{ asset('assets') }}/js/custom-slick.js"></script>

            <!-- customizer js -->
            <script src="{{ asset('assets') }}/js/customizer.js"></script>

            <!-- ratio js -->
            <script src="{{ asset('assets') }}/js/ratio.js"></script>

            <!-- sidebar effect -->
            <script src="{{ asset('assets') }}/js/sidebareffect.js"></script>

            <!-- Theme js -->
            <script src="{{ asset('assets') }}/js/script.js"></script>



            <!-- Data table js -->
            <script src="assets/js/jquery.dataTables.js"></script>
            <script src="assets/js/custom-data-table.js"></script>
</body>

</html>
