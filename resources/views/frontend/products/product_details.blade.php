@extends('layouts.frontendmaster')

@section('content')
    <!---LOGIN MODEL START---->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Login Your account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="form-control" action="{{ route('custom.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Your Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Your Password</label>
                            <input type="password" class="form-control" id="" placeholder="Enter Your Password"
                                name="password">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary bg-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---LOGIN MODEL END---->

    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                @if (session('login_error'))
                    <div class="alert alert-danger">{{ session('login_error') }}</div>
                @endif
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>{{ $product_details->product_name }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <li class="breadcrumb-item active">{{ $product_details->product_name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-6 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-2">
                                    <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                        <div class="product-main-2 no-arrow">
                                            @foreach ($featuer_photos as $photo)
                                                <div>
                                                    <div class="slider-image">
                                                        <img src="{{ asset('uploads/products/featured_photos') }}/{{ $photo->featured_photo_name }}"
                                                            data-zoom-image="{{ asset('uploads/products/featured_photos') }}/{{ $photo->featured_photo_name }}"
                                                            class="img-fluid image_zoom_cls-2 blur-up lazyload"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                        <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                            @foreach ($featuer_photos as $featuer_photo)
                                                <div>
                                                    <div class="sidebar-image">
                                                        <img src="{{ asset('uploads/products/featured_photos') }}/{{ $featuer_photo->featured_photo_name }}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">

                            <div class="right-box-contain">
                                <h6 class="offer-top"> {{ $product_details->discount }}% Off</h6>
                                <h2 class="name"> {{ $product_details->product_name }}</h2>
                                <div class="price-rating">
                                    <h3 class="theme-color price">${{ $product_details->discounted_price }}<del
                                            class="text-content">${{ $product_details->product_regular_price }} </del>
                                        <span class="offer theme-color">({{ $product_details->discount }}%
                                            off)</span>
                                    </h3>
                                    <div class="product-rating custom-rate">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span class="review">23 Customer Review</span>
                                    </div>
                                </div>

                                <div class="procuct-contain">

                                    <p>{{ $product_details->short_description }}
                                    </p>
                                </div>

                                <div class="product-packege ">
                                    <div class="product-title">
                                        <h4>Color</h4>

                                    </div>
                                    {{--    <h1 id="color_test">Available color</h1> --}}
                                    <select name="" class="form-control" id="color_dropdown">
                                        {{-- <option value="">--select size first---</option> --}}
                                        <option value="">--select size first---</option>

                                    </select>
                                    <div class="product-title">
                                        <h4>Size</h4>
                                    </div>
                                {{--    <button id="hello_btn">hello</button> --}}
                                    <select name="" id="size_dropdown" class="form-control">
                                        <option value="">----select one size ---</option>
                                        @foreach ($inventories->unique('product_size_id') as $inventory)
                                            <option value="{{ $inventory->relationshipWithSize->id }}">

                                                {{ $inventory->relationshipWithSize->size_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="note-box product-packege">
                                    <div class="cart_qty qty-box product-qty">
                                        <div class="input-group">
                                            <button type="button" class="qty-right-plus addcart_button" data-type="plus"
                                                data-field="" id="quantity_plus" onclick="incrementValue()">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="number"
                                                name="quantity" value="1" id="number">
                                            <button type="button" class="qty-left-minus addcart_button"
                                                data-type="minus" data-field="" onclick="decrementValue()">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>

                                    @auth
                                        <a href="#" class="btn btn-md bg-dark cart-button text-white w-100 d-none"
                                            id="add_to_cart_btn">Add
                                            To
                                            Cart</a>
                                    @else
                                        <button type="button" class="btn btn-md bg-dark cart-button text-white w-100"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            LogIn
                                        </button>
                                        {{--   <a href="#" class="btn btn-md bg-dark cart-button text-white w-100">Please
                                            login</a> --}}
                                    @endauth
                                </div>
                                <div class="d-none">
                                    <p>Color id : <span id="d_color_id"></span> </p>
                                    <p>Size id : <span id="d_size_id"></span></p>
                                    <p>User Quantity : <span id="user_quantiry"></span></p>
                                    <p>Product Id : <span id="d_product_id">{{ $product_details->id }}</span></p>
                                </div>



                                @auth
                                    <div class="buy-box">
                                        @if (App\Models\Wishlist::where(['user_id' => auth()->id(), 'product_id' => $product_details->id])->exists())
                                            <a href="#">
                                                <i data-feather="heart" class="text-danger"></i>
                                                <span class="text-danger">Already Added to wishlist</span>
                                            </a>
                                        @else
                                            <a href="{{ route('product.wishlist.add', $product_details->id) }}">
                                                <i data-feather="heart"></i>
                                                <span>Add To Wishlist</span>
                                            </a>
                                        @endif

                                    </div>
                                @endauth

                                {{--       <div class="buy-box">
                                    <a href="{{ route('product.add.to.wishlist', $product_details->id) }}">
                                        <i data-feather="heart"></i>
                                        <span>Add To Wishlist</span>
                                    </a>
                                </div>
 --}}

                                <div class="pickup-box">
                                    <div class="product-title">
                                        <h4>Store Information</h4>
                                    </div>

                                    <div class="pickup-detail">
                                        <h4 class="text-content">Lollipop cake chocolate chocolate cake dessert
                                            jujubes.
                                            Shortbread sugar plum dessert powder cookie sweet brownie.</h4>
                                    </div>

                                    <div class="product-info">
                                        <ul class="product-info-list product-info-list-2">
                                            <li>Category:
                                                <b>{{ $product_details->relationshipWithCategory->category_name }}</b>
                                            </li>
                                            <li>Selling Since:
                                                {{ $product_details->created_at->format('d-M-Y') }}
                                            </li>
                                            <li>Stock:{{ $inventories->sum('product_quantity') }}</li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="paymnet-option">
                                    <div class="product-title">
                                        <h4>Guaranteed Safe Checkout</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend_assets') }}/images/product/payment/1.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend_assets') }}/images/product/payment/2.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend_assets') }}/images/product/payment/3.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend_assets') }}/images/product/payment/4.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('frontend_assets') }}/images/product/payment/5.svg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product-section-box">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab"
                                            aria-controls="description" aria-selected="true">Description</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab"
                                            data-bs-target="#info" type="button" role="tab" aria-controls="info"
                                            aria-selected="false">Additional info</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="care-tab" data-bs-toggle="tab"
                                            data-bs-target="#care" type="button" role="tab" aria-controls="care"
                                            aria-selected="false">Care Instuctions</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                            data-bs-target="#review" type="button" role="tab"
                                            aria-controls="review" aria-selected="false">Review</button>
                                    </li>
                                </ul>

                                <div class="tab-content custom-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="product-description">
                                            <div class="nav-desh">
                                                <p>{{ $product_details->long_description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="info" role="tabpanel"
                                        aria-labelledby="info-tab">
                                        <p>{{ $product_details->additional_information }}</p>
                                    </div>

                                    <div class="tab-pane fade" id="care" role="tabpanel"
                                        aria-labelledby="care-tab">
                                        <div class="information-box">
                                            {{ $product_details->short_description }}
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="review" role="tabpanel"
                                        aria-labelledby="review-tab">
                                        <div class="review-box">
                                            <div class="row g-4">
                                                <div class="col-xl-6">
                                                    <div class="review-title">
                                                        <h4 class="fw-500">Customer reviews</h4>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="product-rating">
                                                            <ul class="rating">
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star" class="fill"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                                <li>
                                                                    <i data-feather="star"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="ms-3">4.2 Out Of 5</h6>
                                                    </div>

                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <div class="rating-list">
                                                                    <h5>5 Star</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 68%" aria-valuenow="100"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                            68%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="rating-list">
                                                                    <h5>4 Star</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 67%" aria-valuenow="100"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                            67%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="rating-list">
                                                                    <h5>3 Star</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 42%" aria-valuenow="100"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                            42%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="rating-list">
                                                                    <h5>2 Star</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 30%" aria-valuenow="100"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                            30%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="rating-list">
                                                                    <h5>1 Star</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: 24%" aria-valuenow="100"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                            24%
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="review-title">
                                                        <h4 class="fw-500">Add a review</h4>
                                                    </div>

                                                    <div class="row g-4">
                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="text" class="form-control" id="name"
                                                                    placeholder="Name">
                                                                <label for="name">Your Name</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="email" class="form-control" id="email"
                                                                    placeholder="Email Address">
                                                                <label for="email">Email Address</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="url" class="form-control" id="website"
                                                                    placeholder="Website">
                                                                <label for="website">Website</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-floating theme-form-floating">
                                                                <input type="url" class="form-control" id="review1"
                                                                    placeholder="Give your review a title">
                                                                <label for="review1">Review Title</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-floating theme-form-floating">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                                                                <label for="floatingTextarea2">Write Your
                                                                    Comment</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="review-title">
                                                        <h4 class="fw-500">Customer questions & answers</h4>
                                                    </div>

                                                    <div class="review-people">
                                                        <ul class="review-list">
                                                            <li>
                                                                <div class="people-box">
                                                                    <div>
                                                                        <div class="people-image">
                                                                            <img src="{{ asset('frontend_assets') }}/images/review/1.jpg"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="people-comment">
                                                                        <a class="name"
                                                                            href="javascript:void(0)">Tracey</a>
                                                                        <div class="date-time">
                                                                            <h6 class="text-content">14 Jan, 2022 at
                                                                                12.58 AM</h6>

                                                                            <div class="product-rating">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="reply">
                                                                            <p>Icing cookie carrot cake chocolate cake
                                                                                sugar plum jelly-o danish. Dragée dragée
                                                                                shortbread tootsie roll croissant muffin
                                                                                cake I love gummi bears. Candy canes ice
                                                                                cream caramels tiramisu marshmallow cake
                                                                                shortbread candy canes cookie.<a
                                                                                    href="javascript:void(0)">Reply</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="people-box">
                                                                    <div>
                                                                        <div class="people-image">
                                                                            <img src="{{ asset('frontend_assets') }}/images/review/2.jpg"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="people-comment">
                                                                        <a class="name"
                                                                            href="javascript:void(0)">Olivia</a>
                                                                        <div class="date-time">
                                                                            <h6 class="text-content">01 May, 2022 at
                                                                                08.31 AM</h6>
                                                                            <div class="product-rating">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="reply">
                                                                            <p>Tootsie roll cake danish halvah powder
                                                                                Tootsie roll candy marshmallow cookie
                                                                                brownie apple pie pudding brownie
                                                                                chocolate bar. Jujubes gummi bears I
                                                                                love powder danish oat cake tart
                                                                                croissant.<a
                                                                                    href="javascript:void(0)">Reply</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="people-box">
                                                                    <div>
                                                                        <div class="people-image">
                                                                            <img src="{{ asset('frontend_assets') }}/images/review/3.jpg"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="people-comment">
                                                                        <a class="name"
                                                                            href="javascript:void(0)">Gabrielle</a>
                                                                        <div class="date-time">
                                                                            <h6 class="text-content">21 May, 2022 at
                                                                                05.52 PM</h6>

                                                                            <div class="product-rating">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                            class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="reply">
                                                                            <p>Biscuit chupa chups gummies powder I love
                                                                                sweet pudding jelly beans. Lemon drops
                                                                                marzipan apple pie gingerbread macaroon
                                                                                croissant cotton candy pastry wafer.
                                                                                Carrot cake halvah I love tart caramels
                                                                                pudding icing chocolate gummi bears.
                                                                                Gummi bears danish cotton candy muffin
                                                                                marzipan caramels awesome feel. <a
                                                                                    href="javascript:void(0)">Reply</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                    <div class="right-sidebar-box">
                        <div class="vendor-box">
                            <div class="verndor-contain">
                                <div class="vendor-image">
                                    @if ($vendor->profile_photo)
                                        <img src="{{ asset('uploads/profiles') }}/{{ $vendor->profile_photo }}"
                                            class="blur-up lazyload" alt="">
                                    @else
                                        <img src="{{ asset('frontend_assets') }}/images/product/vendor.png"
                                            class="blur-up lazyload" alt="">
                                    @endif


                                </div>

                                <div class="vendor-name">
                                    <h4 class="fw-500">Name: {{ $vendor->name }}</h4>
                                    <h5 class="fw-500">Role: {{ $vendor->role }}</h5>


                                    <div class="product-rating mt-1">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(36 Reviews)</span>
                                    </div>

                                </div>
                            </div>

                            <p class="vendor-detail">Noodles & Company is an American fast-casual
                                restaurant that offers international and American noodle dishes and pasta.</p>

                            <div class="vendor-list">
                                <ul>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="map-pin"></i>
                                            <h5>Email: <span class="text-content">{{ $vendor->email }}</span></h5>
                                        </div>
                                    </li>

                                    {{--   <li>
                                        <div class="address-contact">
                                            <i data-feather="headphones"></i>
                                            <h5>Contact Seller: <span class="text-content">(+1)-123-456-789</span></h5>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                        <!-- Trending Product -->
                        <div class="pt-25">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list product-right-sidebar border-0 p-0">
                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend_assets') }}/images/vegetable/product/23.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 70.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend_assets') }}/images/vegetable/product/24.png"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Dates Medjoul Premium Imported</h6>
                                                    </a>
                                                    <span>450 G</span>
                                                    <h6 class="price theme-color">$ 40.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend_assets') }}/images/vegetable/product/25.png"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Good Life Walnut Kernels</h6>
                                                    </a>
                                                    <span>200 G</span>
                                                    <h6 class="price theme-color">$ 52.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-0">
                                        <div class="offer-product">
                                            <a href="product-left-thumbnail.html" class="offer-image">
                                                <img src="{{ asset('frontend_assets') }}/images/vegetable/product/26.png"
                                                    class="blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="product-left-thumbnail.html">
                                                        <h6 class="name">Apple Red Premium Imported</h6>
                                                    </a>
                                                    <span>1 KG</span>
                                                    <h6 class="price theme-color">$ 80.00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Banner Section -->
                        <div class="ratio_156 pt-25">
                            <div class="home-contain">
                                <img src="{{ asset('frontend_assets') }}/images/vegetable/banner/8.jpg"
                                    class="bg-img blur-up lazyload" alt="">
                                <div class="home-detail p-top-left home-p-medium">
                                    <div>
                                        <h6 class="text-yellow home-banner">Seafood</h6>
                                        <h3 class="text-uppercase fw-normal"><span
                                                class="theme-color fw-bold">Freshes</span> Products</h3>
                                        <h3 class="fw-light">every hour</h3>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn btn-animation btn-md fw-bold mend-auto">Shop Now <i
                                                class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->

    <!-- Releted Product Section Start -->
    <section class="product-list-section section-b-space">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Related Products</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="{{ asset('frontend_assets') }}/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-6_1 product-wrapper">
                        @forelse ($related_products as $related_product)
                            <div>
                                <div class="product-box-3 wow fadeInUp">
                                    <div class="product-header">
                                        <div class="product-image">
                                            <a href="{{ route('product.details', $related_product->id) }}">
                                                <img src="{{ asset('uploads/products/mainPhoto') }}/{{ $related_product->product_image }}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <ul class="product-option">
                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                    <a href="compare.html">
                                                        <i data-feather="refresh-cw"></i>
                                                    </a>
                                                </li>

                                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product-footer">
                                        <div class="product-detail">
                                            <span
                                                class="span-name">{{ $related_product->relationshipWithCategory->category_name }}</span>
                                            <a href="product-left-thumbnail.html">
                                                <h5 class="name">{{ $related_product->product_name }}</h5>
                                            </a>
                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                </ul>
                                                <span>(5.0)</span>
                                            </div>
                                            <h6 class="unit">500 G</h6>
                                            <h5 class="price"><span
                                                    class="theme-color">${{ $related_product->discounted_price }}</span>
                                                <del>${{ $related_product->product_regular_price }}</del>
                                            </h5>
                                            <div class="add-to-cart-box bg-white">
                                                <button class="btn btn-add-cart addcart-button ">Add
                                                    <span class="add-icon bg-light-gray">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group bg-white">

                                                        <button type="button"
                                                            class="qty-left-minus bg-gray addcart-button"
                                                            data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                            name="quantity" value="0" id="">
                                                        <button type="button"
                                                            class="qty-right-plus bg-gray addcart-button" data-type="plus"
                                                            data-field="">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3>Related Product Comming soon.</h3>
                        @endforelse




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Releted Product Section End -->
@endsection

<!---Custom javascript from frontend master --->
@section('footer_script')
{{--     <script>
        var plusButton = document.getElementById('quantity_plus');
        console.log("hello");
        console.log(plusButton);
    </script> --}}




    <script>
        /*   =========Basic Jquery =========
            $(document).ready(function() {
            $('#hello_btn').click(function() {
            alert('Hello world');
            });
            });
        */

/* $(document).ready(function(){
    $('#hello_btn').click(function(){
        alert('hello');
    })
}) */
$(document).ready(function(){
    $('#size_dropdown').change(function(){
        $('#add_to_cart_btn').addClass('d-none');
        var size_id = $(this).val();
        var product_id = {{$product_details->id}};
        $("#d_size_id").html(size_id);

        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({

        type: "POST",
                    url: "/get/color/list",
                    data: {
                        size_id: size_id,
                        product_id: product_id,
                    },
                    success: function(data) {
                        $('#color_dropdown').html(data);
                    }
        });
    });

    $("#color_dropdown").change(function(){
        var color_dropdown_value = $(this).val();
        $("#d_color_id").html(color_dropdown_value);
             if (color_dropdown_value) {
                    $("#add_to_cart_btn").removeClass('d-none');
                } else {
                    $("#add_to_cart_btn").addClass('d-none');
                }
    });
    $("#add_to_cart_btn").click(function(){
        var quantityNumber = $(".qty-input").val();
                var d_color_id = $("#d_color_id").html();
                var d_size_id = $("#d_size_id").html();
                var d_product_id = $("#d_product_id").html();
                //alert(d_product_id);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/add/to/cart",
                    data: {
                        d_color_id: d_color_id,
                        d_size_id: d_size_id,
                        d_product_id: d_product_id,
                        quantityNumber: quantityNumber,
                    },
                    success: function(data) {
                        //   alert(data);
                        //  alert(data);
                        if (data == 'Successfully') {
                            location.reload();
                        } else {
                            alert(data);
                        }

                    }
                });


    });
})




            /*
        $(document).ready(function() {
            $('#size_dropdown').change(function() {
                $('#add_to_cart_btn').addClass('d-none'); //add_to_cart button hide(2 no steps)
                //alert('dropdown change');
                //ajax setup
                var size_id = $(this).val();
                var product_id = {{ $product_details->id }};
                //  alert(product_id);
                $("#d_size_id").html(size_id);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/get/color/list",
                    data: {
                        size_id: size_id,
                        product_id: product_id,
                    },
                    success: function(data) {

                        $('#color_dropdown').html(data);
                        alert(data);
                    }
                });
            });


            //working with color dropdown
            $("#color_dropdown").change(function() {
                // alert("dropdown alert");
                var color_dropdown_value = $(this).val();
                $("#d_color_id").html(color_dropdown_value);
                //alert(color_dropdown_value);
                // $("#add_to_cart_btn").removeClass('d-none'); //add_to_cart button show(setps-1)
                if (color_dropdown_value) {
                    $("#add_to_cart_btn").removeClass('d-none');
                } else {
                    $("#add_to_cart_btn").addClass('d-none');
                }
            });

            //add to cart niye kaj korbo
            $("#add_to_cart_btn").click(function() {
                // alert("hello");
                var quantityNumber = $(".qty-input").val();
                var d_color_id = $("#d_color_id").html();
                var d_size_id = $("#d_size_id").html();
                var d_product_id = $("#d_product_id").html();
                // alert(d_product_id);
                //ajax setup start
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/add/to/cart",
                    data: {
                        d_color_id: d_color_id,
                        d_size_id: d_size_id,
                        d_product_id: d_product_id,
                        quantityNumber: ,
                    },
                    success: function(data) {
                        //   alert(data);
                        //  alert(data);
                        if (data == 'Successfully') {
                            location.reload();
                        } else {
                            alert(data);
                        }

                    }
                });
                //ajax setup end
            });
        });

*/

    </script>
@endsection
