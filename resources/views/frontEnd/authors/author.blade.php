@extends('frontEnd.master')
@section('title')
Touch Ready || Kids Book
@endsection

@section('content')
<main class="mainBody">
    <div class="allBorder border_bottom_0">
        <div id="carouselExampleControls" class="carousel slide panda_slide " data-bs-ride="carousel">
            <div class="carousel-inner topMainBannerSlide">
                <div class="carousel-item active">
                    <div class="row d-flex align-items-center p-5">
                        <div class="col-md-12 topBannerSlideImg">
                            <img class="d-block slideImg" src="{{asset('frontEndAsset')}}/assets/images/rokomariImg/rokomariimg1.jpg" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex  align-items-center p-5">
                        <div class="col-md-12 topBannerSlideImg">
                            <img class="d-block slideImg" src="{{asset('frontEndAsset')}}/assets/images/rokomariImg/rokomariimg2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex  align-items-center p-5">
                        <div class="col-md-12 topBannerSlideImg">
                            <img class="d-block slideImg" src="{{asset('frontEndAsset')}}/assets/images/rokomariImg/rokomariimg3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <section id="All_product" class="mb-5 mt-5">
        <div class="allBorder border_top_0 border_bottom_0">
            <div class="container">
                <div class="row">
                    <h3 class="title_text_blue pt-4 pb-4">সুমন্ত আসলাম <span class="title_text_orange">এর বই</span></h3>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/1.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>সেরা হোক এবারের</h2>
                                <h5>সুমন্ত আসলাম</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. 300</span>
                                <small><s class="text-secondary">$480</s></small>
                                <p class="ftColor">In Strock</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/mm.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>সেরা হোক এবারের রামাদান</h2>
                                <h5>সুমন্ত আসলাম</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. 250</span>
                                <small><s class="text-secondary">$300</s></small>
                                <p class="ftColor">In Strock</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/3.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>জিলহজের উপহার</h2>
                                <h5>সুমন্ত আসলাম</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. 180</span>
                                <small><s class="text-secondary">$220</s></small>
                                <p class="ftColor">In Strock</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/4.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>প্রত্যাবর্তন </h2>
                                <h5>সুমন্ত আসলাম</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. 200</span>
                                <small><s class="text-secondary">$380</s></small>
                                <p class="ftColor">In Strock</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/5.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>যে জীবন মরীচিকা</h2>
                                <h5> সুমন্ত আসলাম</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. 350</span>
                                <small><s class="text-secondary">$450</s></small>
                                <p class="ftColor">In Strock</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/1.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>শেষরাত্রির গল্পগুলো</h2>
                                <h5>সুমন্ত আসলাম</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. 300</span>
                                <small><s class="text-secondary">$480</s></small>
                                <p class="ftColor">In Strock</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/1.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>শেষরাত্রির গল্পগুলো</h2>
                                <h5>সুমন্ত আসলাম</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. 300</span>
                                <small><s class="text-secondary">$480</s></small>
                                <p class="ftColor">In Strock</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection