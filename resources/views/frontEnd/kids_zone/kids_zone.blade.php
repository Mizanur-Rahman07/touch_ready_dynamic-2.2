@extends('frontEnd.master')
@section('title')
Touch Ready || Kids Zone
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

    <section id="Feature_product" class="background-res background-ats py-5 d-flex justify-content-center align-items-center"
    style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
      <div class="container">
        <div class="row">
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-soap.png" alt="" srcset="" />
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
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-lotions-&-creams.png" alt="" srcset="" />
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
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-cleaners.png" alt="" srcset="" />
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
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/kid-body-wash.png" alt="" srcset="" />
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
                <img
                  src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Farlin_Powder_Puff_Free_Drop_BF_170B-Farlin-6de51-238440.jpg"
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/D_Nee_Sakura_Baby_Powder_180g-D_Nee-dbb9f-237634.jpg" alt=""
                  srcset="" />
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img
                  src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Kodomo_Baby_Powder_Extra_Mild_200_gm-Kodomo-0eded-241127.jpg"
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Kodomo_Baby_Powder_Extra_Mild_400gm-Kodomo-3bd10-240904.jpg"
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img
                  src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Kodomo_Baby_Powder_Natural_Soft_Protecti-Kodomo-ed079-240858.jpg"
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img
                  src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Meril_Baby_Powder_100_gm-Square_Toiletries_Ltd-bcca9-239896.jpg"
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-wash/D_Nee_Gift_Set_8_Pcs-D_Nee-b67f0-265566.jpg" alt=""
                  srcset="" />
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-wash/Kodomo_Baby_Gift_Set_Basket-Kodomo-6e7b7-240944.jpg" alt=""
                  srcset="" />
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img
                  src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-care/Farlin_Powder_Puff_Free_Drop_BF_170B-Farlin-6de51-238440.jpg"
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-wash/Kodomo_Baby_Gift_Set_Large_8_Pcs-Kodomo-8f872-240941.jpg"
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
          <div class="col_5_change mb-3">
            <div class="featured_col f_border text-center">
              <div class="featured_img">
                <img
                  src="{{asset('frontEndAsset')}}/assets/images/kids-zone/baby-wash/New_born_Baby_Kids_Health_Care_Kit_Set-Wall_Touch-e4cbc-359570.jpg"
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
      </div>
    </section>


  </main>
@endsection