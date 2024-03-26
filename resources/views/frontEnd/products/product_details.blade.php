@extends('frontEnd.master')
@section('title')
Touch Ready || Product Details
@endsection

@section('content')

<main class="mainBody">
        <section id="Product_Details" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detailsImage">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="detailsSubImg mb-3">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/D_Nee_Sakura_Baby_Powder_180g-D_Nee-dbb9f-237634.jpg"
                                            alt="img" class="subimg" />
                                    </div>
                                    <div class="detailsSubImg mb-3">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Farlin_Powder_Puff_Free_Drop_BF_170B-Farlin-6de51-238440.jpg"
                                            alt="img" class="subimg" />
                                    </div>
                                    <div class="detailsSubImg mb-3">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-body-wash.png"
                                            alt="img" class="subimg" />
                                    </div>
                                </div>
                                <div class="col-md-10 pd_res_col_10">

                                    <div class="detailsMainImg">
                                        <img id="mainImage"
                                            src="{{asset($products->product_image)}}"
                                            alt="image" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="productDetails_content">
                            <span class="productDetails_review justity-content">
                                <h6 class="details_review">
                                    <input class="review" type="radio" name="review1" id="rating1">
                                    <label for="rating1" class="fas fa-star "></label>
                                    <input class="review" type="radio" name="review1" id="rating2">
                                    <label for="rating2" class="fas fa-star "></label>
                                    <input class="review" type="radio" name="review1" id="rating3">
                                    <label for="rating3" class="fas fa-star "></label>
                                    <input class="review" type="radio" name="review1" id="rating4">
                                    <label for="rating4" class="fas fa-star "></label>
                                    <input class="review" type="radio" name="review1" id="rating5">
                                    <label for="rating5" class="far fa-star-half-stroke"></label>
                                </h6>
                                <p class="text-muted">( 10+ Review)</p>
                            </span>
                            <h4 class="py-2">{{$products->product_title}}</h4>
                            <h6 class="compaire_price pb-2">
                                $<strong>${{$products->product_price}}</strong>
                                <small><s class="text-secondary"> ${{$products->product_discount_price}}</s></small>
                            </h6>
                          
                            <!-- ------------------ -->
                            <!-- <div class="product_color d-flex justity-content productDetails_largeDevice">
                                <h5>Color :</h5>
                                <p class="text-muted">Blue</p>
                            </div> -->
                            <div class="d-flex justity-content productDetails_largeDevice">
                                <div class="detailsSubImg2 me-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/D_Nee_Sakura_Baby_Powder_180g-D_Nee-dbb9f-237634.jpg" alt="img" class="subimg" />
                                </div>
                                <div class="detailsSubImg2 me-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Farlin_Powder_Puff_Free_Drop_BF_170B-Farlin-6de51-238440.jpg" alt="img" class="subimg" />
                                </div>
                                <div class="detailsSubImg2 me-2">
                                    <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-body-wash.png" alt="img" class="subimg" />
                                </div>
                            </div>

                            <!-- ---Click Function -->
                            <script src="{{asset('frontEndAsset')}}/assets/js/jquery-3.6.0.min.js"></script>
                            <script>
                                $(".subimg").click(function () {
                                    var imgVar = $(this).attr("src");
                                    $("#mainImage").attr("src", imgVar);
                                });
                            </script>
                            <!-- ---Click Function -->
                            <p class="productDetails_text2">
                                <span class="productDetailsWatch">30</span> People are watching
                                this time
                            </p>
                            <div class="productDetails_availableSize">
                                <h5>Available Size :</h5>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>20 mg</option>
                                    <option value="1">10 mg</option>
                                    <option value="2">20 mg</option>
                                    <option value="3">30 mg</option>
                                </select>
                            </div>
                            <div class="productDetails_quantityTitle">
                                <h5>Quantity :</h5>
                            </div>
                            <div class="productDetails_quantity">
                                <div class="proQuantity">
                                    <div class="proQty d-flex">
                                        <!-- <div><a href="" class="proQtyP">+</a></div>
                                        <div class="proQtyNo">01</div>
                                        <div><a href="" class="proQtyN">-</a></div> -->
                                       
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
                                </div>

                                <h5>
                                    <a href="{{route('cart.checkout')}}" class="btn btn-outline-success productDetailsCart">Buy Now</a>
                                </h5>
                                <div class="proQtyUpDown">
                                    <a href=""><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </div>
                                <div class="proQtyUpDown">
                                    <a href=""><i class="fa-solid fa-share-nodes"></i></a>
                                </div>  
                            </div>
                            <div class="productDetails_SBTC">
                                <h6><strong>SKU : </strong> skmizan345</h6>
                                <h6><strong>Brand : </strong> {{$products->author_name}}</h6>
                                <h6><strong>Tags : </strong> Chips, Snacks Dessert</h6>
                                <h6><strong>Category : </strong> Snacks</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


    </main>
@endsection