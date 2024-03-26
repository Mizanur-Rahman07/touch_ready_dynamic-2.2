@extends('frontEnd.master')
@section('title')
Touch Ready || Checkout
@endsection

@section('content')

  <main class="mainBody">
    <h2 class="text-center title_text_blue mt-3">Shopping Cart</h2>
    <section id="WishList" class="pb-5 paddingTop">
      <div class="container">
        <div class="row">
          <div class="col-md-8 res_cart_col_8">
            <div class="wishlist_head">
              <div class="row">
                <div class="col-md-6">
                  <h5 class="wishHead_product">Products</h5>
                </div>
                <div class="col-md-3">
                  <h5 class="wishHead_quantity">Quantity</h5>
                </div>
                <div class="col-md-3">
                  <h5 class="wishHead_action">Sub Total</h5>
                </div>
              </div>
            </div>
            <div class="wishlist_body">
              <div class="wishlist_main_content">
                <div class="row m-0">
                  <div class="col-md-6 res_col_6">
                    <div class="wishlist_content py-3 d-flex">
                      <div class="row m-0">
                        <div class="col-md-6 p-0">
                          <img src="assets/img/wishlist/1.png" alt="" />
                        </div>
                        <div class="col-md-6 p-0">
                          <span class="wishList_res">
                            <h6 class="wishContent_review">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </h6>
                            <h5>Organic Cereal Chocolate</h5>
                            <h6 class="wishCart_price">
                              <strong>$100</strong>
                              <small><s class="text-secondary"> $80</s></small>
                            </h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 res_cart_col_3">
                    <h6 class="cartQuantity">
                      <div class="qty">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                          </div>
                          <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1">
                          <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    </h6>
                  </div>
                  <div class="col-md-3 res_cart_col_3">
                    <h5 class="wishCartSubTotal">
                      $ 40.0
                      <a href=""><i class="far fa-trash-alt trustIcon"></i></a>
                    </h5>
                  </div>
                  <div class="col-md-12 wishList_border_bottom"></div>
                  <div class="col-md-6 res_col_6">
                    <div class="wishlist_content py-3 d-flex">
                      <div class="row m-0">
                        <div class="col-md-6 p-0">
                          <img src="assets/img/wishlist/1.png" alt="" />
                        </div>
                        <div class="col-md-6 p-0">
                          <span class="wishList_res">
                            <h6 class="wishContent_review">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </h6>
                            <h5>Organic Cereal Chocolate</h5>
                            <h6 class="wishCart_price">
                              <strong>$100</strong>
                              <small><s class="text-secondary"> $80</s></small>
                            </h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 res_cart_col_3">
                    <h6 class="cartQuantity">
                      <div class="qty">

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="minus-btn2"><i class="fa fa-minus"></i></button>
                          </div>
                          <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1">
                          <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="plus-btn2"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    </h6>

                  </div>
                  <div class="col-md-3 res_cart_col_3">
                    <h5 class="wishCartSubTotal">
                      $ 40.0
                      <a href=""><i class="far fa-trash-alt trustIcon"></i></a>
                    </h5>
                  </div>
                  <div class="col-md-12 wishList_border_bottom"></div>
                  <div class="col-md-6 res_col_6">
                    <div class="wishlist_content py-3 d-flex">
                      <div class="row m-0">
                        <div class="col-md-6 p-0">
                          <img src="assets/img/wishlist/1.png" alt="" />
                        </div>
                        <div class="col-md-6 p-0">
                          <span class="wishList_res">
                            <h6 class="wishContent_review">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </h6>
                            <h5>Organic Cereal Chocolate</h5>
                            <h6 class="wishCart_price">
                              <strong>$100</strong>
                              <small><s class="text-secondary"> $80</s></small>
                            </h6>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 res_cart_col_3">
                    <h6 class="cartQuantity">
                      <div class="qty">

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                          </div>
                          <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1">
                          <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    </h6>
                  </div>
                  <div class="col-md-3 res_cart_col_3">
                    <h5 class="wishCartSubTotal">
                      $ 40.0
                      <a href=""><i class="far fa-trash-alt trustIcon"></i></a>

                    </h5>
                  </div>
                  <div class="col-md-12 wishList_border_bottom"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="">
                <h5 class="rec_center">
                  <a href="{{route('cart.checkout')}}" class="btn btn-outline-success updateCart">Buy Now</a>
                </h5>
              </div>
            </div>
          </div>

          <div class="col-md-4 res_cart_col_4">
            <div class="shoppingCart_category">
              <div class="">
                <h4>Related Product</h4>
                <p>loading...</p>

                <!-- <h6>SubTotal <span class="float_right">$100.00</span></h6>
                <h6>Shipping <span class="float_right">$60.0</span></h6>
                <h6>Incl.Vat <span class="float_right">$90.0</span></h6>
                <p></p>
                <h5>Total Value <span class="float_right">= $250.0</span></h5>
                <p></p>
                <div class="row">
                  <div class="col_5 paymentCard">
                    <a href=""><img src="assets/img/payments/1.jpg" alt="" srcset="" /></a>
                  </div>
                  <div class="col_5 paymentCard">
                    <a href=""><img src="assets/img/payments/2.jpg" alt="" srcset="" /></a>
                  </div>
                  <div class="col_5 paymentCard">
                    <a href=""><img src="assets/img/payments/3.jpg" alt="" srcset="" /></a>
                  </div>
                  <div class="col_5 paymentCard">
                    <a href=""><img src="assets/img/payments/5.jpg" alt="" srcset="" /></a>
                  </div>
                  <div class="col_5 paymentCard">
                    <a href=""><img src="assets/img/payments/6.png" alt="" srcset="" /></a>
                  </div>
                </div>

                <div class="form-check mt-5">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                  <label class="form-check-label" for="flexCheckChecked">
                    I agree with the terms & conditions
                  </label>
                </div>
              </div>
              <div class="text-center">
                <h5>
                  <a href="" class="btn btn-outline-success shoppingCartBtn">Proceed To CheckOut</a>
                </h5>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection