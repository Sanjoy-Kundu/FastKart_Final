@extends('layouts.frontendmaster')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Cart</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
                <div class="col-xxl-9">
                    <div class="cart-table">

                        <div class="table-responsive-xl">
                            <table class="table">
                                <tbody>
                                    @php
                                        $cart_total = 0;
                                       $error = false;
                                    @endphp
                                    <form action="{{route('update.cart')}}" method="post">
                                        @csrf
                                    @forelse (carts() as $cart)
                                    @php
                                        if (stocks($cart->product_id, $cart->color_id, $cart->size_id) < $cart->quantity) {
                                            $error = true;
                                        }
                                    @endphp

                                        <tr class="product-box-contain @if(stocks($cart->product_id, $cart->color_id, $cart->size_id) < $cart->quantity) bg-danger @endif">
                                            <td class="product-detail">
                                                <div class="product border-0">
                                                    <a href="{{route('product.details', $cart->product_id)}}" class="product-image">
                                                        <img src="{{ asset('uploads/products/mainPhoto') }}/{{ $cart->relationToProduct->product_image }}"
                                                            class="img-fluid blur-up lazyload" alt="not found">
                                                    </a>
                                                    <div class="product-detail">
                                                        <ul>
                                                            <li class="name">
                                                                <a
                                                                    href="{{route('product.details', $cart->product_id)}}">{{ $cart->relationToProduct->product_name }}</a>
                                                            </li>
                                                            <li class="text-content"><span
                                                                    class="text-title">Quantity</span>{{ $cart->quantity }}
                                                            </li>
                                                           <li  class="text-content"><span
                                                                    class="text-title badge bg-warning">Stock: {{stocks($cart->product_id, $cart->color_id, $cart->size_id)}}</span>
                                                            </li>


                                                            <li>
                                                                <h5 class="text-content d-inline-block">Price :</h5>
                                                                <span>${{ $cart->relationToProduct->discounted_price }}</span>
                                                                <span
                                                                    class="text-content">$<del>{{ $cart->relationToProduct->product_regular_price }}</del></span>
                                                            </li>
                                                            <p>Product Id{{$cart->product_id}}</p>
                                                            <p> Color: {{$cart->relationToColor->color_name}}</p>
                                                            <p> Size: {{$cart->relationToSize->size_name}}</p>

                                                            <li>
                                                                <h5 class="saving theme-color">Saving :10</h5>
                                                            </li>

                                                            <li class="quantity-price-box">
                                                                <div class="cart_qty">
                                                                    <div class="input-group">
                                                                        <button type="button" class="btn qty-left-minus"
                                                                            data-type="minus" data-field="">
                                                                            <i class="fa fa-minus ms-0"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                        <input class="form-control input-number qty-input"
                                                                            type="text" name="quantity[{{$cart->id}}]" value="0">
                                                                        <button type="button" class="btn qty-right-plus"
                                                                            data-type="plus" data-field="">
                                                                            <i class="fa fa-plus ms-0"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            {{--         <li>
                                                                <h5>Total:
                                                                    ${{ $cart->quantity * $cart->relationToProduct->product_regular_price }}
                                                                </h5>
                                                            </li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                            @if ($cart->relationToProduct->discount)
                                            <td class="price">
                                                <h4 class="table-title text-content">Price</h4>
                                                <h5>${{ $cart->relationToProduct->discounted_price }} <del
                                                        class="text-content">${{ $cart->relationToProduct->product_regular_price }}</del>
                                                </h5>
                                                <h6 class="theme-color">Discount: {{$cart->relationToProduct->discount}}%</h6>
                                                <h6 class="theme-color">You Save : $
                                                    {{ $cart->relationToProduct->product_regular_price - $cart->relationToProduct->discounted_price }}
                                                        </h6>
                                            </td>
                                            @else
                                            <td class="price">
                                                <h4 class="table-title text-content">Price</h4>
                                                <h5>${{ $cart->relationToProduct->product_regular_price  }} </h5>
                                            </td>

                                            @endif


                                            <td class="quantity">
                                                <h4 class="table-title text-content">Qty</h4>
                                                <div class="quantity-price">
                                                    <div class="cart_qty">
                                                        <div class="input-group input-counter">
                                                            <button type="button" class="btn qty-left-minus minus-btn"
                                                                data-type="minus" data-field="" id="quantity_minus">
                                                                <i class="fa fa-minus ms-0" aria-hidden="true"></i>
                                                            </button>
                                                            <input class="form-control input-number qty-input val"
                                                                type="number" name="quantity[{{$cart->id}}]" value="{{ $cart->quantity }}"
                                                                id="cartNumber">
                                                            <button type="button" class="btn qty-right-plus plus-btn"
                                                                id="quantity_plus" data-type="plus" data-field="">
                                                                <i class="fa fa-plus ms-0" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="subtotal">
                                                <h4 class="table-title text-content">Total</h4>
                                                <h5>
                                                    {{$cart->quantity * $cart->relationToProduct->discounted_price}}

                                                    @php
                                                        $cart_total += ($cart->quantity * $cart->relationToProduct->discounted_price)
                                                    @endphp
                                                </h5>

                                            </td>

                                            <td class="save-remove">
                                                <h4 class="table-title text-content">Action</h4>
                                                <a class=""
                                                    href="{{ route('add.to.cart.remove', $cart->id) }}">Remove</a>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-danger fs-2"> Add your product fast</td>
                                    </tr>
                                    @endforelse


                                    @if (carts()->count() > 0)
                                    <tr>
                                        <td colspan="2"></td>
                                        <td><button type="submit" class="btn btn bg-info">Update Cart</button></td>
                                    </tr>
                                    @endif
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3">
                    <div class="summery-box p-sticky">
                        <div class="summery-header">
                            <h3>Cart Total</h3>
                        </div>

                        <div class="summery-contain">
                            <div class="coupon-cart">
                                <h6 class="text-content mb-2">Coupon Apply</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Coupon Code Here...">
                                    <button class="btn-apply">Apply</button>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">{{$cart_total}}</h4>
                                </li>

                                <li>
                                    <h4>Coupon Discount</h4>
                                    <h4 class="price">(-) 0.00</h4>
                                </li>

                                <li class="align-items-start">
                                    <h4>Shipping</h4>
                                    <h4 class="price text-end">$6.90</h4>
                                </li>
                            </ul>
                        </div>

                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>Total (USD) </h4>
                                <h4 class="price theme-color">$132.58</h4>
                            </li>
                        </ul>

                        <div class="button-group cart-button">
                            <ul>
                       {{$error}}
                                @if ($error)
                                <li>
                                    <button class="btn btn-animation proceed-btn fw-bold">Please solve your error</button>
                                </li>
                                @else
                                <li>
                                    <button onclick="location.href = 'checkout.html';"
                                        class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                                </li>
                                @endif




                                <li>
                                    <button onclick="location.href = 'index.html';"
                                        class="btn btn-light shopping-button text-dark">
                                        <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
@endsection
@section('footer_script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $('.input-counter').each(function() {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.plus-btn'),
                btnDown = spinner.find('.minus-btn'),
                min = input.attr('min'),
                max = input.attr('max');
            btnUp.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
            btnDown.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
        });
    </script>
@endsection
