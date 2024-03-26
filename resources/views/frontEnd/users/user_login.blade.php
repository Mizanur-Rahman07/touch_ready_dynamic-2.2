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
                        <!-- <div class="login_page_logo">
                            <img src="{{asset('frontEndAsset')}}/assets/images/logo22-removebg-preview.png" alt="" />
                        </div> -->

 
                        <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
                            <li class="nav-item ms-4" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">As a User</button>
                            </li>
                            <li class="nav-item ms-4" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">As a Admin</button>
                            </li>
                        </ul>


                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <h4 class="card-title text-center" style="color:red;"> {{ session('message')}}</h4>
                                <form method="POST" action="{{ route('user.login') }}">
                            @csrf
                            <h4>Hello! let's get started</h4>
                            <h6 class="">Sign in to continue.</h6>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control form-control-lg"
                                    id="exampleInputUsername1" placeholder="Enter email or Phone no">
                            </div><br>
                            <div class="form-group">
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-lg" id="exampleInputPassword1"
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
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot
                                    password?</a>
                                @endif
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="{{route('user.registration')}}"
                                    class="text-primary">Create</a>
                            </div>
                        </form>


                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                            
                                <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>Hello! let's get started</h4>
                            <h6 class="">Sign in to continue.</h6>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control form-control-lg"
                                    id="exampleInputUsername1" placeholder="Enter email or Phone no">
                            </div><br>
                            <div class="form-group">
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-lg" id="exampleInputPassword1"
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
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot
                                    password?</a>
                                @endif
                            </div>
                        </form>


                            </div>
                       
                        </div>










                        
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>


</main>
@endsection