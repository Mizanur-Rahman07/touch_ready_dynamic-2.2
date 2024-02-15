@extends('frontEnd.master')
@section('title')
Touch Ready || User Login
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
                        <form action="" method="post">
                            <h4>Hello! let's get started</h4>
                            <h6 class="">Sign in to continue.</h6>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1"
                                    placeholder="Enter email or Phone no">
                            </div><br>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Password">
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
                                SIGN IN
                            </button>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">

                                    Click here

                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="{{route('user.registration')}}" class="text-primary">Create</a>
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