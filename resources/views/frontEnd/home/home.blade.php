@extends('frontEnd.master')
@section('title')
Touch Ready || Home
@endsection

@section('content')
<main class="mainBody">
    <div class=" ">
        <div id="carouselExampleControls" class="carousel slide panda_slide " data-bs-ride="carousel">
            <div class="carousel-inner topMainBannerSlide">
                <div class="carousel-item active">
                    <div class="row d-flex align-items-center p-5">
                        <div class="col-md-12 topBannerSlideImg">
                            <img class="d-block slideImg"
                                src="{{asset('frontEndAsset')}}/assets/images/rokomariImg/rokomariimg1.jpg" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex  align-items-center p-5">
                        <div class="col-md-12 topBannerSlideImg">
                            <img class="d-block slideImg"
                                src="{{asset('frontEndAsset')}}/assets/images/rokomariImg/rokomariimg2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex  align-items-center p-5">
                        <div class="col-md-12 topBannerSlideImg">
                            <img class="d-block slideImg"
                                src="{{asset('frontEndAsset')}}/assets/images/rokomariImg/rokomariimg3.jpg" alt="">
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
    <section>
        <div id="Category" class="">
            <div class="container overflow-hidden  pb-4">
                <div class="row">
                    <h3 class="title_text_blue pt-4 pb-4">Shop by <span class="title_text_orange">Category</span>
                    </h3>
                    @foreach($pro_categories as $category)
                    <div class="col-md-2 pb-4">
                        <a href="#">
                            <div class="category_content text-center">
                                <div class="category_img">
                                    <img src="{{asset($category->category_image)}}" alt="" srcset="" />
                                </div>
                                <div class="category_text text-center">
                                    <h5>{{substr($category->category_title,0,50)}}</h5>
                                    <h6>Up to {{substr($category->category_discount,0,10)}} %OFF</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="Hot_Discount"
        class="background-res background-ats py-3 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class=" mb-5 mt-5 ">
            <div class="container">
                <div class="row">
                    <h3 class="title_text_blue pt-4 pb-4">Hot <span class="title_text_orange">Discount</span>
                        Product</h3>
                    <div class="col_5_change mb-2">
                        <div class="hotDis_col f_border text-center">
                            <div class="hotDis_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/discount_product/1.jpg" alt=""
                                    srcset="" />
                            </div>
                            <div class="hotDiscount_content">
                                <h2>তারাফুল</h2>
                                <h5>আব্দুল্লাহ মাহমুদ নজীব</h5>
                                <span class="fw-bold">TK. 120</span>
                                <small><s class="text-secondary">TK.280</s></small>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="hotDis_col f_border text-center">
                            <div class="hotDis_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/discount_product/2.jpg" alt=""
                                    srcset="" />
                            </div>
                            <div class="hotDiscount_content">
                                <h2>মেঘ রোদ্দুর বৃষ্টি</h2>
                                <h5>রোদ্রময়ীরা</h5>
                                <span class="fw-bold">TK. 100</span>
                                <small><s class="text-secondary">TK.200</s></small>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="hotDis_col f_border text-center">
                            <div class="hotDis_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/discount_product/5.jpg" alt=""
                                    srcset="" />
                            </div>
                            <div class="hotDiscount_content">
                                <h2>অবাধ্যতার ইতিহাস</h2>
                                <h5>আব্দুল্লাহ মাহমুদ নজীব</h5>
                                <span class="fw-bold">TK. 120</span>
                                <small><s class="text-secondary">TK.280</s></small>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="hotDis_col f_border text-center">
                            <div class="hotDis_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/discount_product/3.jpg" alt=""
                                    srcset="" />
                            </div>
                            <div class="hotDiscount_content">
                                <h2>সন্তানঃ স্বপ্ন দিয়ে বোনা</h2>
                                <h5> আকরাম হোসাইন</h5>
                                <span class="fw-bold">TK. 100</span>
                                <small><s class="text-secondary">TK.250</s></small>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_5_change mb-2">
                        <div class="hotDis_col f_border text-center">
                            <div class="hotDis_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/discount_product/4.jpg" alt=""
                                    srcset="" />
                            </div>
                            <div class="hotDiscount_content">
                                <h2>গল্পগুলো অন্যরকম</h2>
                                <h5>আব্দুল্লাহ মাহমুদ নজীব</h5>
                                <span class="fw-bold">TK. 120</span>
                                <small><s class="text-secondary">TK.280</s></small>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Auther" class="background-res background-ats py-3 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="">
            <div class="container pt-5">
                <div class="auther_box">
                    <div class="row">
                        <h3 class="title_text_blue pt-4 pb-4">Shop by <span class="title_text_orange">Author</span>
                        </h3>

                        @foreach($authors as $author)
                        <div class="col-md-2">
                            <a href="author-1.html"></a>
                            <div class="auther_content text-center">
                                <div class="auther_img">
                                    <img src="{{asset($author->author_image)}}" alt="" srcset="" />
                                </div>
                                <div class="auther_text text-center">
                                    <h5>{{substr($author->author_name,0,50)}}</h5>
                                    <h6>Up to {{substr($author->author_discount,0,10)}}% OFF</h6>
                                </div> 
                            </div>
                        </div>
                        @endforeach


                        <!-- <div class="col-md-2">
                            <a href="author-2.html">
                                <div class="auther_content text-center">
                                    <div class="auther_img">
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/anisul_haque.jpg"
                                            alt="" srcset="" />
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
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/humayun_ahmed.jpg"
                                            alt="" srcset="" />
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
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/jafor.jpg" alt=""
                                            srcset="" />
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
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/সুমন্ত-আসলাম.jpg"
                                            alt="" srcset="" />
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
                                        <img src="{{asset('frontEndAsset')}}/assets/images/auther_img/হাসনাত-আবদুল-হাই.jpg"
                                            alt="" srcset="" />
                                    </div>
                                    <div class="auther_text text-center">
                                        <h5>হাসনাত আবদুল হাই</h5>
                                        <h6>Up to 45% OFF</h6>
                                    </div>
                                </div>
                            </a>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="All_product"
        class="background-res background-ats py-3 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="mb-5 mt-5">
            <div class="container">
                <div class="row">
                    <h3 class="title_text_blue pt-4 pb-4">ইসলামিক <span class="title_text_orange">বই</span> </h3>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/1.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/2.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/3.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/4.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/5.jpg" alt=""
                                    srcset="" />
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
                </div>
                <div class="see_more text-center mt-3">
                    <div class="featured_btn">
                        <a href="{{route('islamik.book')}}" class="btn btn-outline-dark mb-3 rounded-pill">
                            See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="All_product"
        class="background-res background-ats py-3 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="mb-5 mt-5">
            <div class="container">
                <div class="row">
                    <h3 class="title_text_blue pt-4 pb-4">শিশুদের <span class="title_text_orange">ইসলামিক বই </span>
                    </h3>
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/1.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/2.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/3.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/4.jpg" alt=""
                                    srcset="" />
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
                                <img src="{{asset('frontEndAsset')}}/assets/images/all-product/5.jpg" alt=""
                                    srcset="" />
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
                </div>
                <div class="see_more text-center mt-3">
                    <div class="featured_btn">
                        <a href="{{route('kids.book')}}" class="btn btn-outline-dark mb-3 rounded-pill">
                            See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Feature_product"
        class="background-res background-ats py-3 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="container">
            <div class="row">
                <h3 class="title_text_blue pt-4 pb-4">Kids <span class="title_text_orange">Zone</span> </h3>
                <div class="col_5_change mb-3">
                    <div class="featured_col f_border text-center">
                        <div class="featured_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-soap.png" alt=""
                                srcset="" />
                        </div>
                        <div class="featured_content">
                            <p class="text-muted mt-4">By.Touch Ready BD</p>
                            <h2>johnsone Soap</h2>
                            <h6 class="featured_icon text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="text-muted">Unit : 80gm</p>
                            <h4>
                                <span class="ftColor">$100</span>
                                <small><s class="text-secondary">$80</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_5_change mb-3">
                    <div class="featured_col f_border text-center">
                        <div class="featured_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-lotions-&-creams.png"
                                alt="" srcset="" />
                        </div>
                        <div class="featured_content">
                            <p class="text-muted mt-4">By.Touch Ready BD</p>
                            <h2>Lotions & Cream</h2>
                            <h6 class="featured_icon text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="text-muted">Unit : 70gm</p>
                            <h4>
                                <span class="ftColor">$120</span>
                                <small><s class="text-secondary">$100</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_5_change mb-3">
                    <div class="featured_col f_border text-center">
                        <div class="featured_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-cleaners.png"
                                alt="" srcset="" />
                        </div>
                        <div class="featured_content">
                            <p class="text-muted mt-4">By.Touch Ready BD</p>
                            <h2>Body Wash</h2>
                            <h6 class="featured_icon text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="text-muted">Unit : 200gm</p>
                            <h4>
                                <span class="ftColor">$100</span>
                                <small><s class="text-secondary">$70</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_5_change mb-3">
                    <div class="featured_col f_border text-center">
                        <div class="featured_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-body-wash.png"
                                alt="" srcset="" />
                        </div>
                        <div class="featured_content">
                            <p class="text-muted mt-4">By.Touch Ready BD</p>
                            <h2>Savlon Handwash</h2>
                            <h6 class="featured_icon text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="text-muted">Unit : 100gm</p>
                            <h4>
                                <span class="ftColor">$60</span>
                                <small><s class="text-secondary">$50</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_5_change mb-3">
                    <div class="featured_col f_border text-center">
                        <div class="featured_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Farlin_Powder_Puff_Free_Drop_BF_170B-Farlin-6de51-238440.jpg"
                                alt="" srcset="" />
                        </div>
                        <div class="featured_content">
                            <p class="text-muted mt-4">By.Agora Agroo ltd</p>
                            <h2>Cleaners Cream</h2>
                            <h6 class="featured_icon text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            <p class="text-muted">Unit : 500gm</p>
                            <h4>
                                <span class="ftColor">$200</span>
                                <small><s class="text-secondary">$150</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see_more text-center mt-3">
                <div class="featured_btn">
                    <a href="{{route('kids.zone')}}" class="btn btn-outline-dark mb-3 rounded-pill">
                        See More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="Kasmeri_Shal"
        class="background-res background-ats py-3 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="container">
            <div class="row">
                <h3 class="title_text_blue pt-4 pb-4">কাস্মিরী <span class="title_text_orange">শাল</span> </h3>
                <div class="col-md-3 mb-3">
                    <div class="kasmeri_col f_border text-center">
                        <div class="kasmeri_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kasmeri-shal/5c9ba30b72d71185b77fb5b0ab7e1243.jpg"
                                alt="" srcset="" />
                        </div>

                        <div class="kasmeri_content">
                            <h2>কাস্মিরী টুর শাল</h2>
                            <span class="ftColor">$৩০০</span>
                            <small><s class="text-secondary">$১৮০</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="kasmeri_col f_border text-center">
                        <div class="kasmeri_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kasmeri-shal/kashmiri-shawls.jpg" alt=""
                                srcset="" />
                        </div>

                        <div class="kasmeri_content">
                            <h2>কাস্মিরী কিং শাল</h2>
                            <span class="ftColor">$২৫০</span>
                            <small><s class="text-secondary">$১৯০</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="kasmeri_col f_border text-center">
                        <div class="kasmeri_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kasmeri-shal/embroided-kashmiri-shawl-500x500-500x500.jpg"
                                alt="" srcset="" />
                        </div>

                        <div class="kasmeri_content">
                            <h2>কাস্মিরী কিং শাল</h2>
                            <span class="ftColor">$২৫০</span>
                            <small><s class="text-secondary">$১৯০</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="kasmeri_col f_border text-center">
                        <div class="kasmeri_img">
                            <img src="{{asset('frontEndAsset')}}/assets/images/kasmeri-shal/18c2614b3df84932ba9bda33d33e3121.jpg"
                                alt="" srcset="" />
                        </div>

                        <div class="kasmeri_content">
                            <h2>কাস্মিরী কিং শাল</h2>
                            <span class="ftColor">$২৫০</span>
                            <small><s class="text-secondary">$১৯০</s></small>
                            </h4>
                            <div class="featured_btn">
                                <a href="" class="btn btn-outline-dark my-3 rounded-pill">
                                    <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="see_more text-center mt-3">
                <div class="featured_btn">
                    <a href="{{route('kasmeri.shal')}}" class="btn btn-outline-dark mb-3 rounded-pill">
                        See More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="Our_talk" class="background-res background-ats pt-3 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="">
            <div class="aboutUs">
                <div class="container">
                    <div class="row">
                        <h3 class="title_text_blue pt-4 pb-4"><span class="title_text_orange">আমাদের</span> কথা
                        </h3>
                        <div class="col-md-6 mb-5">
                            <iframe class="ourTalk_video"
                                src="https://www.youtube.com/embed/ec7cMhvK5hE?si=BSka89kzb44PmR9X"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="ourTalk_contect text-muted ">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae maxime
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae maxime
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                    sit incidunt qui commodi tempora quos.

                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae maxime
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.

                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae maxime
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae maxime
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae maxime
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae maxime
                                    aperiam nesciunt provident nostrum doloribus eos, voluptas tempore deserunt a
                                    ullam odit culpa omnis. Quo itaque quidem veniam nobis amet eveniet, sapiente
                                    iste corrupti sequi, esse repudiandae voluptates ipsa consequatur recusandae
                                    voluptatem similique sit incidunt qui commodi tempora quos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="About" class="background-res background-ats pt-5 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="">
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title_text_blue pt-4 pb-4">আমাদের <span class="title_text_orange">সম্পর্কে</span>
                            </h3>
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators about_Dot">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="customer mt-5">
                                            <h6 class="fw-bold">Who We Me</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="custSupport d-flex ">
                                                        <p class="custIcon"><i class="fas fa-cloud-download-alt"></i>
                                                        </p>
                                                        <p class="">I am Nazmul Haque (Ex Accountent & Present
                                                            Manager at Biddabari Online platform).</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custSupport d-flex">
                                                        <p class="custIcon"><i class="fas fa-address-card"></i>
                                                        </p>
                                                        <p class="">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing
                                                            elit. Dolorum, laborum.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="customer mt-5">
                                            <h6 class="fw-bold">ONLINE SUPPORTS</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="custSupport d-flex ">
                                                        <p class="custIcon"><i class="fas fa-phone-alt"></i></p>
                                                        <p class="">"Touch Ready Website" is such a different and
                                                            unique online Ecomerce platform where you can rely
                                                            yourself. You just keep your faith on TouchReady,
                                                            believe it, it will do the rest.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custSupport d-flex ">
                                                        <p class="custIcon"><i class="fas fa-envelope"></i></p>
                                                        <p class="">Any Query !!!! Please Share me
                                                            mdnazmulhaque.kgm@gmail.com</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="customer mt-5">
                                            <h6 class="fw-bold">Refund & Delevary </h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="custSupport d-flex ">
                                                        <p class="custIcon"><i class="fas fa-sync"></i></p>
                                                        <p class="">"Touch Ready Website" is such a different and
                                                            unique online Ecomerce platform where you can rely
                                                            yourself. You just keep your faith on TouchReady,
                                                            believe it, it will do the rest.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custSupport d-flex ">
                                                        <p class="custIcon"><i class="fas fa-truck"></i></p>
                                                        <p class="">"Touch Ready Website" is such a different and
                                                            unique online Ecomerce platform where you can rely
                                                            yourself. You just keep your faith on TouchReady,
                                                            believe it, it will do the rest.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="aboutImg ">
                                <img src="{{asset('frontEndAsset')}}/assets/images/Nazmul33.png" class="" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="About" class="background-res background-ats d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="banner_page background-res"
            style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Home-page-banner-1.png'); ">
            <div class="">

            </div>
        </div>
    </section>

    <section id="Location" class="">
        <div class="allBorder border_top_0 border_bottom_0">
            <!-- <div class="container"> -->
            <div class="map py-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.367430564635!2d90.38409157592721!3d23.734273389394065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bc89540001%3A0x11b747dd95876c8e!2sBiddabari!5e0!3m2!1sen!2sbd!4v1704317201224!5m2!1sen!2sbd"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- </div> -->
        </div>
    </section>

</main>
@endsection