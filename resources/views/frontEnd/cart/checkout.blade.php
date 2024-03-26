@extends('frontEnd.master')
@section('title')
Touch Ready || Checkout
@endsection

@section('content')
<main class="mainBody">
    <h2 class="text-center title_text_blue mt-3">Checkout</h2>
    <section id="Checkout" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="billing_details">
                        <form action="" method="post">
                            <h3 class="">Billing Details</h3>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleFormControlInput1" class="form-label">First Name <span
                                                class="text-danger">*</span> </label>
                                        <input type="text" class="form-control form-control-lg"
                                            id="exampleFormControlInput1" placeholder="Enter your first name">
                                    </div>
                                    <div class="col">
                                        <label for="exampleFormControlInput1" class="form-label">Last Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-lg"
                                            id="exampleFormControlInput1" placeholder="Enter your last name">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone No<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    placeholder="Enter Your phone no">
                            </div>
                            <!-- <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Company Name</label>
                                    <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div> -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Country</label>
                                <select class="form-control" id="countrySelect">
                                    <option value="">Select Country</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">District<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    placeholder="Enter your district">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Upozilla<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    placeholder="Enter your thana sohor">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Street Address<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    placeholder="Enter Road Address">
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="checkout_shoppingCart">
                        <div class="">
                            <h4>Your Order</h4>
                            <h6>Product <span class="float_right">$150.00</span></h6>
                            <!-- <h6>SubTotal <span class="float_right">$100.00</span></h6> -->
                            <h6>Shipping <span class="float_right">$60.0</span></h6>
                            <h6>Incl.Vat <span class="float_right">$90.0</span></h6>
                            <p></p>
                            <h5>Total Value <span class="float_right">= $300.0</span></h5>
                            <p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="option1"
                                    value="option1">
                                <label class="form-check-label" for="option1">
                                    Cash on Delivery
                                </label>
                            </div>
                            </p>
                            <div class="row " data-bs-toggle="tooltip" data-bs-placement="right" title="সাময়িক সময়ের জন্য পেমেন্ট গেটওয়ে বন্ধ আছে">
                                <div class="col-md-4 paymentCard">
                                    <div class="form-check" >
                                        <!-- ------ payment getway Disable kora ache = "id="flexRadioDisabled" disabled"  -->
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="option2" id="flexRadioDisabled" disabled
                                            value="option2">
                                        <a href=""><img src="{{asset('frontEndAsset')}}/assets/images/payments/bkash.jpg" alt="" srcset="" /></a>
                                        <label class="form-check-label">Bkash</label>
                                    </div>
                                </div>
                                <div class="col-md-4 paymentCard ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="option3" id="flexRadioDisabled" disabled
                                            value="option3">
                                        <a href=""><img src="{{asset('frontEndAsset')}}/assets/images/payments/nagad.png" alt="" srcset="" /></a>
                                        <label class="form-check-label">Nagad</label>
                                    </div>
                                </div>
                                <div class="col-md-4 paymentCard">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="option4" id="flexRadioDisabled" disabled
                                            value="option4">
                                        <a href=""><img src="{{asset('frontEndAsset')}}/assets/images/payments/rocket.png" alt="" srcset="" /></a>
                                        <label class="form-check-label">Rocket</label>
                                    </div>
                                </div>

                            </div>

                            <div class="form-check py-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked />
                                <label class="form-check-label" for="flexCheckChecked">
                                    I agree with the terms & conditions
                                </label>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5>
                                <a href="" class="btn btn-outline-success shoppingCartBtn">Place Order</a>
                            </h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection