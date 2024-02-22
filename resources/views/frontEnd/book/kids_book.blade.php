@extends('frontEnd.master')
@section('title')
Touch Ready || Kids Book
@endsection

@section('content')
<main class="mainBody">
        <div class=" ">
            <div id="carouselExampleControls" class="carousel slide panda_slide " data-bs-ride="carousel">
                <div class="carousel-inner topMainBannerSlide">
                    <div class="carousel-item active">
                        <div class="row d-flex align-items-center p-5">
                           
                            <div class="col-md-12 topBannerSlideImg">
                                <img class="d-block slideImg" src="{{asset('frontEndAsset')}}/assets/images/rokomariImg/rokomariimg1.jpg"
                                    alt="...">
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

        <section id="Auther" class="background-res background-ats py-3 justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="">
            <div class="container pt-5">
                <div class="auther_box">
                    <div class="row">
                        <h3 class="title_text_blue pt-4 pb-4 ms-3">Shop by <span class="title_text_orange">Author</span>
                        </h3>

                        @foreach($authors as $author)
                        <div class="col-md-2">
                            <a href=""></a>
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

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="All_product"
        class="background-res background-ats py-3 justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="mb-5 mt-5">
            <div class="container">
                <div class="row">
                    <h3 class="title_text_blue pt-4 pb-4">শিশুদের <span class="title_text_orange">ইসলামিক বই </span>
                    </h3>
                    @foreach($kidzs_islamik_books as $book)
                    <div class="col_5_change mb-2">
                        <div class="product_col f_border text-center">
                            <div class="product_img">
                                <img src="{{asset($book->product_image)}}" alt=""
                                    srcset="" />
                            </div>
                            <div class="product_content">
                                <h2>{{substr($book->product_title,0,30)}}</h2>
                                <h5>{{substr($book->product_sub_title,0,50)}}</h5>
                                <h6 class="allProductReview_icon text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </h6>
                                <span class="fw-bold">TK. {{substr($book->product_price,0,20)}}</span>
                                <small><s class="text-secondary">TK. {{substr($book->product_discount_price,0,20)}}</s></small>
                                <p class="ftColor">{{($book->strock==1? 'In Strock':'Strock Out')}}</p>
                                <div class="featured_btn">
                                    <a href="" class="btn btn-outline-dark mb-3 rounded-pill">
                                        <i class="fas fa-shopping-cart"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    </main>
@endsection