@extends('layouts.frontendmaster')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Shop Top Filter</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Top Filter</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Start -->
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                   {{--  <div class="show-button">
                        <div class="top-filter-menu-2">
                            <div class="sidebar-filter-menu" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample">
                                <a href="javascript:void(0)"><i class="fa-solid fa-filter"></i> Filter Menu</a>
                            </div>

                            <div class="ms-auto d-flex align-items-center">
                                <div class="category-dropdown me-md-3">
                                    <h5 class="text-content">Sort By :</h5>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown">
                                            <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" id="pop"
                                                    href="javascript:void(0)">Popularity</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High
                                                    Price</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low
                                                    Price</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="rating" href="javascript:void(0)">Average
                                                    Rating</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z
                                                    Order</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A
                                                    Order</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" id="off" href="javascript:void(0)">% Off -
                                                    Hight To
                                                    Low</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="grid-option grid-option-2">
                                    <ul>
                                        <li class="three-grid">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets')}}/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li class="grid-btn five-grid d-xxl-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets')}}/svg/grid-4.svg"
                                                    class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            </a>
                                        </li>
                                        <li class="five-grid d-xxl-inline-block d-none active">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets')}}/svg/grid-5.svg"
                                                    class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            </a>
                                        </li>
                                        <li class="list-btn">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets')}}/svg/list.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                 {{--    <div class="top-filter-category" id="collapseExample">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xl-3 col-md-6">
                                <div class="category-title">
                                    <h3>Pack Size</h3>
                                </div>
                                <ul class="category-list custom-padding custom-height">
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="fruit">
                                            <label class="form-check-label" for="fruit">
                                                <span class="name">Fruits & Vegetables</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="cake">
                                            <label class="form-check-label" for="cake">
                                                <span class="name">Bakery, Cake & Dairy</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="behe">
                                            <label class="form-check-label" for="behe">
                                                <span class="name">Beverages</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="snacks">
                                            <label class="form-check-label" for="snacks">
                                                <span class="name">Snacks & Branded Foods</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="beauty">
                                            <label class="form-check-label" for="beauty">
                                                <span class="name">Beauty & Household</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="pets">
                                            <label class="form-check-label" for="pets">
                                                <span class="name">Kitchen, Garden & Pets</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="egg">
                                            <label class="form-check-label" for="egg">
                                                <span class="name">Eggs, Meat & Fish</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="food">
                                            <label class="form-check-label" for="food">
                                                <span class="name">Gourment & World Food</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="care">
                                            <label class="form-check-label" for="care">
                                                <span class="name">Baby Care</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="fish">
                                            <label class="form-check-label" for="fish">
                                                <span class="name">Fish & Seafood</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="marinades">
                                            <label class="form-check-label" for="marinades">
                                                <span class="name">Marinades</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="lamb">
                                            <label class="form-check-label" for="lamb">
                                                <span class="name">Mutton & Lamb</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="other">
                                            <label class="form-check-label" for="other">
                                                <span class="name">Port & other Meats</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="pour">
                                            <label class="form-check-label" for="pour">
                                                <span class="name">Pourltry</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="salami">
                                            <label class="form-check-label" for="salami">
                                                <span class="name">Sausages, bacon & Salami</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="category-title">
                                    <h3>Price</h3>
                                </div>
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" value="">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="category-title">
                                    <h3>Discount</h3>
                                </div>
                                <ul class="category-list">
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <span class="name">upto 5%</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                <span class="name">5% - 10%</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault2">
                                            <label class="form-check-label" for="flexCheckDefault2">
                                                <span class="name">10% - 15%</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault3">
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                <span class="name">15% - 25%</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault4">
                                            <label class="form-check-label" for="flexCheckDefault4">
                                                <span class="name">More than 25%</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="category-title">
                                    <h3>Category</h3>
                                </div>
                                <ul class="category-list custom-padding custom-height">
                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault5">
                                            <label class="form-check-label" for="flexCheckDefault5">
                                                <span class="name">400 to 500 g</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault6">
                                            <label class="form-check-label" for="flexCheckDefault6">
                                                <span class="name">500 to 700 g</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault7">
                                            <label class="form-check-label" for="flexCheckDefault7">
                                                <span class="name">700 to 1 kg</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault8">
                                            <label class="form-check-label" for="flexCheckDefault8">
                                                <span class="name">120 - 150 g each Vacuum 2 pcs</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault9">
                                            <label class="form-check-label" for="flexCheckDefault9">
                                                <span class="name">1 pc</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault10">
                                            <label class="form-check-label" for="flexCheckDefault10">
                                                <span class="name">1 to 1.2 kg</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault11">
                                            <label class="form-check-label" for="flexCheckDefault11">
                                                <span class="name">2 x 24 pcs Multipack</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault12">
                                            <label class="form-check-label" for="flexCheckDefault12">
                                                <span class="name">2x6 pcs Multipack</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault13">
                                            <label class="form-check-label" for="flexCheckDefault13">
                                                <span class="name">4x6 pcs Multipack</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault14">
                                            <label class="form-check-label" for="flexCheckDefault14">
                                                <span class="name">5x6 pcs Multipack</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault15">
                                            <label class="form-check-label" for="flexCheckDefault15">
                                                <span class="name">Combo 2 Items</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault16">
                                            <label class="form-check-label" for="flexCheckDefault16">
                                                <span class="name">Combo 3 Items</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault17">
                                            <label class="form-check-label" for="flexCheckDefault17">
                                                <span class="name">2 pcs</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault18">
                                            <label class="form-check-label" for="flexCheckDefault18">
                                                <span class="name">3 pcs</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault19">
                                            <label class="form-check-label" for="flexCheckDefault19">
                                                <span class="name">2 pcs Vacuum (140 g to 180 g each
                                                    )</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault20">
                                            <label class="form-check-label" for="flexCheckDefault20">
                                                <span class="name">4 pcs</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault21">
                                            <label class="form-check-label" for="flexCheckDefault21">
                                                <span class="name">4 pcs Vacuum (140 g to 180 g each
                                                    )</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault22">
                                            <label class="form-check-label" for="flexCheckDefault22">
                                                <span class="name">6 pcs</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault23">
                                            <label class="form-check-label" for="flexCheckDefault23">
                                                <span class="name">6 pcs carton</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox" id="flexCheckDefault24">
                                            <label class="form-check-label" for="flexCheckDefault24">
                                                <span class="name">6 pcs Pouch</span>
                                                <span class="number">(15)</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}

                    <div
                        class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                    @foreach ($products as $product)
                    <div>
                        <div class="product-box-3 h-100 wow fadeInUp">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="{{route('product.details', $product->id)}}">
                                        <img src="{{asset('uploads/products/mainPhoto')}}/{{$product->product_image}}"
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
                                    <span class="span-name">{{$product->relationshipWithCategory->category_name}}</span>
                                    <a href="{{route('product.details', $product->id)}}">
                                        <h5 class="name">{{$product->product_name}}</h5>
                                    </a>
                                    <p class="text-content mt-1 mb-2 product-content d-none">Cheesy feet cheesy grin brie.
                                        Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                        cheese macaroni cheese croque monsieur.</p>
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
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <span>(4.0)</span>
                                    </div>

                                    <h6 class="unit">Discount: {{$product->discount}}%</h6>
                                    <h5 class="price"><span class="theme-color">${{$product->discounted_price}}</span> <del>${{$product->product_regular_price}}</del>
                                    </h5>
                                    <div class="add-to-cart-box bg-white">
                                        <a href="{{route('product.details', $product->id)}}" class="btn btn-add-cart addcart-button">Add To Cart
                                        </a>
                                        <div class="cart_qty qty-box">
                                            <div class="input-group bg-white">
                                                <button type="button" class="qty-left-minus bg-gray"
                                                    data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <button type="button" class="qty-right-plus bg-gray"
                                                    data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    </div>

                    <nav class="custome-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="true">
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
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Start -->
    <footer class="section-t-space">
        <div class="container-fluid-lg">
            <div class="service-section">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="service-contain">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="{{asset('assets')}}/svg/product.svg" class="blur-up lazyload" alt="">
                                </div>

                                <div class="service-detail">
                                    <h5>Every Fresh Products</h5>
                                </div>
                            </div>

                            <div class="service-box">
                                <div class="service-image">
                                    <img src="{{asset('assets')}}/svg/delivery.svg" class="blur-up lazyload" alt="">
                                </div>

                                <div class="service-detail">
                                    <h5>Free Delivery For Order Over $50</h5>
                                </div>
                            </div>

                            <div class="service-box">
                                <div class="service-image">
                                    <img src="{{asset('assets')}}/svg/discount.svg" class="blur-up lazyload" alt="">
                                </div>

                                <div class="service-detail">
                                    <h5>Daily Mega Discounts</h5>
                                </div>
                            </div>

                            <div class="service-box">
                                <div class="service-image">
                                    <img src="{{asset('assets')}}/svg/market.svg" class="blur-up lazyload" alt="">
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
                                    <img src="{{asset('assets')}}/images/logo/1.png" class="blur-up lazyload" alt="">
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
                                                <img src="{{asset('assets')}}/images/playstore.svg" class="blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="mb-0">
                                            <a href="https://www.apple.com/in/app-store/" target="_blank">
                                                <img src="{{asset('assets')}}/images/appstore.svg" class="blur-up lazyload"
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
                    <img src="{{asset('assets')}}/images/payment/1.png" class="blur-up lazyload" alt="">
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

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="{{asset('assets')}}/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
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
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
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
                                        <img src="{{asset('assets')}}/images/vegetable/product/10.png" class="blur-up lazyload"
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
                                        <img src="{{asset('assets')}}/images/vegetable/product/11.png" class="blur-up lazyload"
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
                                        <img src="{{asset('assets')}}/images/vegetable/product/12.png" class="blur-up lazyload"
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
                                        <img src="{{asset('assets')}}/images/vegetable/product/13.png" class="blur-up lazyload"
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

    <!-- Add to cart Modal Start -->
    <div class="add-cart-box">
        <div class="add-iamge">
            <img src="{{asset('assets')}}/images/cake/pro/1.jpg" class="img-fluid blur-up lazyload" alt="">
        </div>

        <div class="add-contain">
            <h6>Added to Cart</h6>
        </div>
    </div>
    <!-- Add to cart Modal End -->

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

    <!-- latest jquery-->
    <script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="{{asset('assets')}}/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets')}}/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="{{asset('assets')}}/js/feather/feather.min.js"></script>
    <script src="{{asset('assets')}}/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="{{asset('assets')}}/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="{{asset('assets')}}/js/slick/slick.js"></script>
    <script src="{{asset('assets')}}/js/slick/slick-animation.min.js"></script>
    <script src="{{asset('assets')}}/js/slick/custom_slick.js"></script>

    <!-- Price Range Js -->
    <script src="{{asset('assets')}}/js/ion.rangeSlider.min.js"></script>

    <!-- sidebar open js -->
    <script src="{{asset('assets')}}/js/filter-sidebar.js"></script>

    <!-- Quantity js -->
    <script src="{{asset('assets')}}/js/quantity-2.js"></script>

    <!-- WOW js -->
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <script src="{{asset('assets')}}/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="{{asset('assets')}}/js/script.js"></script>


    <!-- thme setting js -->
    <script src="{{asset('assets')}}/js/theme-setting.js"></script>
</body>

</html>
@endsection
