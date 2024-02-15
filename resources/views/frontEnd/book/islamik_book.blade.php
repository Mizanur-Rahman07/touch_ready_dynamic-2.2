@extends('frontEnd.master')
@section('title')
Touch Ready || Islamik Book
@endsection

@section('content')

<main class="mainBody">
    <div class=" ">
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

    <section id="Auther" class="background-res background-ats py-5 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="">
            <div class="container pt-5">
                <div class="auther_box">
                    <div class="row">
                        <h3 class="title_text_blue pt-4 pb-4">Shop by <span class="title_text_orange">Author</span>
                        </h3>
                        <div class="col-md-2">
                            <a href="author-1.html">
                                <div class="auther_content text-center">
                                    <div class="auther_img">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/mizanur.jpeg" alt="" srcset="" />
                                    </div>
                                    <div class="auther_text text-center">
                                        <h5>মিজানুর রহমান </h5>
                                        <h6>Up to 25% OFF</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="author-2.html">
                                <div class="auther_content text-center">
                                    <div class="auther_img">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/anisul_haque.jpg" alt="" srcset="" />
                                    </div>
                                    <div class="auther_text text-center">
                                        <h5>আনিসুল হক</h5>
                                        <h6>Up to 35% OFF</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="auther-3.html">
                                <div class="auther_content text-center">
                                    <div class="auther_img">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/humayun_ahmed.jpg" alt="" srcset="" />
                                    </div>
                                    <div class="auther_text text-center">
                                        <h5>হুমায়ূন আহমেদ</h5>
                                        <h6>Up to 40% OFF</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="auther-4.html">
                                <div class="auther_content text-center">
                                    <div class="auther_img">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/jafor.jpg" alt="" srcset="" />
                                    </div>
                                    <div class="auther_text text-center">
                                        <h5>মুহম্মদ জাফর ইকবাল</h5>
                                        <h6>Up to 15% OFF</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="auther-4.html">
                                <div class="auther_content text-center">
                                    <div class="auther_img">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/সুমন্ত-আসলাম.jpg" alt="" srcset="" />
                                    </div>
                                    <div class="auther_text text-center">
                                        <h5>সুমন্ত আসলাম</h5>
                                        <h6>Up to 30% OFF</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="auther-5.html">
                                <div class="auther_content text-center">
                                    <div class="auther_img">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/হাসনাত-আবদুল-হাই.jpg" alt="" srcset="" />
                                    </div>
                                    <div class="auther_text text-center">
                                        <h5>হাসনাত আবদুল হাই</h5>
                                        <h6>Up to 45% OFF</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="All_product"
        class="background-res background-ats py-5 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="mb-5 mt-5">
            <div class="container">
                <div class="row">
                    <h3 class="title_text_blue pt-4 pb-4">ইসলামিক<span class="title_text_orange"> বই</span> </h3>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/1.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>শেষরাত্রির গল্পগুলো</h2>
                                <h5>আব্দুল্লাহ মাহমুদ নজীব</h5>
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/2.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>সেরা হোক এবারের রামাদান</h2>
                                <h5>রোদ্রময়ীরা</h5>
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
                                <h5>ড. খালিদ আবু শাদি</h5>
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
                                <h5>আরিফ আজাদ (সম্পাদক)</h5>
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
                                <h5> শাইখ আব্দুল মালিক আল কাসিম</h5>
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
                                <h5>আব্দুল্লাহ মাহমুদ নজীব</h5>
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
                                <h5>আব্দুল্লাহ মাহমুদ নজীব</h5>
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/2.jpg" alt="" srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>সেরা হোক এবারের রামাদান</h2>
                                <h5>রোদ্রময়ীরা</h5>
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
                                <h5>ড. খালিদ আবু শাদি</h5>
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
                                <h5>আরিফ আজাদ (সম্পাদক)</h5>
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
                                <h5> শাইখ আব্দুল মালিক আল কাসিম</h5>
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
                                <h5>আব্দুল্লাহ মাহমুদ নজীব</h5>
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