@extends('layouts.frontendmaster')
@section('content')
<!--Modal Start--->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Add Your Address Here</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('customer.address')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label"><h3>Label</h3></label>
                  <input type="text" class="form-control" placeholder="House Shop Home address" name="label">
                </div>

                <div class="mb-3">
                  <label class="form-label"><h3>Customer Name</h3></label>
                  <input type="text" class="form-control" placeholder="Your name here ... " name="customer_name">
                </div>

                <div class="mb-3">
                  <label class="form-label"><h3>Customer Adress</h3></label>
                 <textarea class="form-control" name="customer_address" id=""  rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label"><h3>Zipcode</h3></label>
                    <input type="text" class="form-control" name="zip_code" placeholder="Your name here ... ">
                  </div>

                <div class="mb-3">
                    <label class="form-label"><h3>Mobile</h3></label>
                    <input type="tel" class="form-control" name="customer_mobile" placeholder="Your name Mobile Here">
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </div>
<!--Modal End--->

    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Checkout</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout section Start -->
    <section class="checkout-section-2 section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-lg-8">
                    <div class="left-sidebar-checkout">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
                                            trigger="loop-on-hover"
                                            colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                                            class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Delivery Address</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                @forelse ($addresses as $address)
                                                <div class="col-xxl-6 col-lg-12 col-md-6 col-sm-12 col-xxl-4">
                                                    <div class="delivery-address-box">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jack"
                                                                    id="flexRadioDefault1">
                                                            </div>

                                                            <div class="label">
                                                                <label>{{$address->label}}</label>
                                                            </div>

                                                            <ul class="delivery-address-detail">
                                                                <li>
                                                                    <h4 class="fw-500">{{$address->customer_name}}</h4>
                                                                </li>

                                                                <li>
                                                                    <p class="text-content"><span
                                                                            class="text-title">Address
                                                                            : </span>{{$address->customer_address}}</p>
                                                                </li>

                                                                <li>
                                                                    <h6 class="text-content"><span
                                                                            class="text-title">Zip Code
                                                                            :</span>{{$address->zip_code}}</h6>
                                                                </li>

                                                                <li>
                                                                    <h6 class="text-content mb-0"><span
                                                                            class="text-title">Phone
                                                                            :</span>{{$address->customer_mobile}}</h6>
                                                                </li>
                                                                <li>
                                                                    <h4 class="text-content mb-0"><span
                                                                            class="text-title">Delete
                                                                            :</span><a href="{{route('address.delete', $address->id)}}"><i class="fa fa-remove fs-2 text-danger"></i></a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty

                                                @endforelse



                                                <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 delivery-option text-center">
                                               {{--      <a href="#"><i class="fa fa-plus"></i>Add Address</a> --}}
                                               <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus"></i>  Add Address </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/oaflahpk.json"
                                            trigger="loop-on-hover" colors="primary:#0baf9a" class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Delivery Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div
                                                                    class="form-check custom-form-check hide-check-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="standard" id="standard" checked>
                                                                    <label class="form-check-label"
                                                                        for="standard">Inside Dhaka 60 (BDT)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div
                                                                    class="form-check mb-0 custom-form-check show-box-checked">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="standard" id="future">
                                                                    <label class="form-check-label" for="future">Outside Dhaka 120 (BDT)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 future-box">
                                                    <div class="future-option">
                                                        <div class="row g-md-0 gy-4">
                                                            <div class="col-md-6">
                                                                <div class="delivery-items">
                                                                    <div>
                                                                        <h5 class="items text-content"><span>3
                                                                                Items</span>@
                                                                            $693.48</h5>
                                                                        <h5 class="charge text-content">Delivery Charge
                                                                            $34.67
                                                                            <button type="button" class="btn p-0"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Extra Charge">
                                                                                <i
                                                                                    class="fa-solid fa-circle-exclamation"></i>
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <form
                                                                    class="form-floating theme-form-floating date-box">
                                                                    <input type="date" class="form-control">
                                                                    <label>Select Date</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/qmcsqnle.json"
                                            trigger="loop-on-hover" colors="primary:#0baf9a,secondary:#0baf9a"
                                            class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Payment Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="accordion accordion-flush custom-accordion"
                                                id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingFour">
                                                        <div class="accordion-button collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseFour">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="cash"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="flexRadioDefault" id="cash" checked> Cash
                                                                    On Delivery</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseFour"
                                                        class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <p class="cod-review">Pay digitally with SMS Pay
                                                                Link. Cash may not be accepted in COVID restricted
                                                                areas. <a href="javascript:void(0)">Know more.</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingOne">
                                                        <div class="accordion-button collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="credit"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="flexRadioDefault" id="credit">
                                                                    Credit or Debit Card</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row g-2">
                                                                <div class="col-12">
                                                                    <div class="payment-method">
                                                                        <div
                                                                            class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                            <input type="text" class="form-control"
                                                                                id="credit2"
                                                                                placeholder="Enter Credit & Debit Card Number">
                                                                            <label for="credit2">Enter Credit & Debit
                                                                                Card Number</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div
                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="text" class="form-control"
                                                                            id="expiry" placeholder="Enter Expiry Date">
                                                                        <label for="expiry">Expiry Date</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div
                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="text" class="form-control" id="cvv"
                                                                            placeholder="Enter CVV Number">
                                                                        <label for="cvv">CVV Number</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div
                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="password" class="form-control"
                                                                            id="password" placeholder="Enter Password">
                                                                        <label for="password">Password</label>
                                                                    </div>
                                                                </div>

                                                                <div class="button-group mt-0">
                                                                    <ul>
                                                                        <li>
                                                                            <button
                                                                                class="btn btn-light shopping-button">Cancel</button>
                                                                        </li>

                                                                        <li>
                                                                            <button class="btn btn-animation">Use This
                                                                                Card</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingTwo">
                                                        <div class="accordion-button collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseTwo">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="banking"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="flexRadioDefault" id="banking">Net
                                                                    Banking</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <h5 class="text-uppercase mb-4">Select Your Bank
                                                            </h5>
                                                            <div class="row g-2">
                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="bank1">
                                                                        <label class="form-check-label"
                                                                            for="bank1">Industrial & Commercial
                                                                            Bank</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="bank2">
                                                                        <label class="form-check-label"
                                                                            for="bank2">Agricultural Bank</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="bank3">
                                                                        <label class="form-check-label" for="bank3">Bank
                                                                            of America</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="bank4">
                                                                        <label class="form-check-label"
                                                                            for="bank4">Construction Bank Corp.</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="bank5">
                                                                        <label class="form-check-label" for="bank5">HSBC
                                                                            Holdings</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="bank6">
                                                                        <label class="form-check-label"
                                                                            for="bank6">JPMorgan Chase & Co.</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="select-option">
                                                                        <div class="form-floating theme-form-floating">
                                                                            <select
                                                                                class="form-select theme-form-select"
                                                                                aria-label="Default select example">
                                                                                <option value="hsbc">HSBC Holdings
                                                                                </option>
                                                                                <option value="loyds">Lloyds Banking
                                                                                    Group</option>
                                                                                <option value="natwest">Nat West Group
                                                                                </option>
                                                                                <option value="Barclays">Barclays
                                                                                </option>
                                                                                <option value="other">Others Bank
                                                                                </option>
                                                                            </select>
                                                                            <label>Select Other Bank</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingThree">
                                                        <div class="accordion-button collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseThree">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="wallet"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="flexRadioDefault" id="wallet">My
                                                                    Wallet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <h5 class="text-uppercase mb-4">Select Your Wallet
                                                            </h5>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <label class="form-check-label"
                                                                            for="amazon"><input
                                                                                class="form-check-input mt-0"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="amazon">Amazon Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="gpay">
                                                                        <label class="form-check-label"
                                                                            for="gpay">Google Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="airtel">
                                                                        <label class="form-check-label"
                                                                            for="airtel">Airtel Money</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="paytm">
                                                                        <label class="form-check-label"
                                                                            for="paytm">Paytm Pay</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="jio">
                                                                        <label class="form-check-label" for="jio">JIO
                                                                            Money</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="custom-form-check form-check">
                                                                        <input class="form-check-input mt-0"
                                                                            type="radio" name="flexRadioDefault"
                                                                            id="free">
                                                                        <label class="form-check-label"
                                                                            for="free">Freecharge</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right-side-summery-box">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <h3>Order Summery of <sup><span class="text-danger"><b>{{auth()->user()->name}}</b></span></sup></h3>
                            </div>
                            <h1>{{session('test')}}</h1>
                            <ul class="summery-contain">
                            {{--     {{Carts()}} --}}
                              @foreach (Carts() as $cart)
                              <li>
                                <img src="{{asset('uploads/products/mainPhoto')}}/{{$cart->relationToProduct->product_image}}"
                                    class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                <h4>{{$cart->relationToProduct->product_name}}<span>X {{$cart->quantity}}</span></h4>
                                <h4 class="price">${{$cart->relationToProduct->discounted_price * $cart->quantity}}</h4>
                            </li>
                                @endforeach



                       {{--          <li>
                                    <img src="{{asset('assets')}}/images/vegetable/product/2.png"
                                        class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Eggplant <span>X 3</span></h4>
                                    <h4 class="price">$12.23</h4>
                                </li>

                                <li>
                                    <img src="{{asset('assets')}}/images/vegetable/product/3.png"
                                        class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Onion <span>X 2</span></h4>
                                    <h4 class="price">$18.27</h4>
                                </li>

                                <li>
                                    <img src="{{asset('assets')}}/images/vegetable/product/4.png"
                                        class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Potato <span>X 1</span></h4>
                                    <h4 class="price">$26.90</h4>
                                </li>

                                <li>
                                    <img src="{{asset('assets')}}/images/vegetable/product/5.png"
                                        class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Baby Chili <span>X 1</span></h4>
                                    <h4 class="price">$19.28</h4>
                                </li>

                                <li>
                                    <img src="{{asset('assets')}}/images/vegetable/product/6.png"
                                        class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                    <h4>Broccoli <span>X 2</span></h4>
                                    <h4 class="price">$29.69</h4>
                                </li> --}}
                            </ul>

                            <ul class="summery-total">
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">${{session('session_sub_total')}}</h4>
                                </li>
                             <li>
                                    <h4>Coupon Name</h4>
                                    <h4 class="price">{{session('session_coupon_name') ? session('session_coupon_name') : "N/A" }}</h4>
                                </li>

                                <li>
                                    <h4>Discount</h4>
                                    <h4 class="price">{{session('session_discount')}}%</h4>
                                </li>
                                <li>
                                    <h4>Discount Amount</h4>
                                    <h4 class="price">${{ (session('session_discounted_amount') * session('session_discount')) / 100}}</h4>
                                </li>
                                <li>
                                    <h4>Total Amount</h4>
                                    <h4 class="price">${{session('session_sub_total') -  (session('session_discounted_amount') * session('session_discount')) / 100}}</h4>
                                </li>

                           {{--      <li>
                                    <h4>Shipping</h4>
                                    <h4 class="price">$8.90</h4>
                                </li>

                                <li>
                                    <h4>Tax</h4>
                                    <h4 class="price">$29.498</h4>
                                </li>

                                <li>
                                    <h4>Coupon/Code</h4>
                                    <h4 class="price">$-23.10</h4>
                                </li>

                                <li class="list-total">
                                    <h4>Total (USD)</h4>
                                    <h4 class="price">$19.28</h4>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="checkout-offer">
                            <div class="offer-title">
                                <div class="offer-icon">
                                    <img src="{{asset('assets')}}/images/inner-page/offer.svg" class="img-fluid" alt="">
                                </div>
                                <div class="offer-name">
                                    <h6>Available Offers</h6>
                                </div>
                            </div>

                            <ul class="offer-detail">
                                <li>
                                    <p>Combo: BB Royal Almond/Badam Californian, Extra Bold 100 gm...</p>
                                </li>
                                <li>
                                    <p>combo: Royal Cashew Californian, Extra Bold 100 gm + BB Royal Honey 500 gm</p>
                                </li>
                            </ul>
                        </div>

                        <button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout section End -->
@endsection



