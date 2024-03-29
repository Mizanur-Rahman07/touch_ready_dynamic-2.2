@extends('frontEnd.master')
@section('title')
Touch Ready || User Registration
@endsection

@section('content')
<main class="mainBody">

    <section id="Feature_product"
        class="background-res background-ats py-5 d-flex justify-content-center align-items-center"
        style="background-image: url('{{asset('frontEndAsset')}}/assets/images/background_img/Background-Image-1.png');">
        <div class="container">

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="login_page">
                        <div class="login_page_logo">
                            <img src="{{asset('frontEndAsset')}}/assets/images/logo22-removebg-preview.png" alt="" />
                        </div>
                        <form action="{{ route('new.register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1"
                                    placeholder="Enter Username">
                            </div><br>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputUsername1"
                                    placeholder="Enter email or Phone No">
                            </div><br>

                            <div class="form-group">
                                <input  type="text" name="phone" class="form-control form-control-lg" id="number"
                                    placeholder="number">
                            </div><br>
                            <div class="form-group">
                                <input  type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div><br>
                            <div class="form-group">
                                <input  type="text" name="address" class="form-control form-control-lg" id="address"
                                    placeholder="address">
                            </div><br>
                            <div class="form-group">
                                <input  type="file" name="image" class="form-control form-control-lg" id="image"
                                    placeholder="">
                            </div><br>
                           
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="login_btn mt-3 text-center">
                                SIGN UP
                            </button>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{route('user.login')}}" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>


</main>
@endsection