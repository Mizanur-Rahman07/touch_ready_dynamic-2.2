<header class="">
    <!-- nav Start -->
    <nav class="navbar navbar-expand-md position_fixed">
        <div class="container-fluid container ">
            <a class="navbar-brand navLogo" href="./index.html">
                <img src="{{asset('frontEndAsset')}}/assets/images/logo22.jpg" alt="logo"></a>

            <button class="navbar-toggler" style="border-color: gray;" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-secondary"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end bg-white menu" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  text-md-left fw-bold" aria-current="page" href="{{route('/')}}">হোম</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="index.html" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            বই সমূহ
                        </a>
                        <ul class="dropdown-menu sub_menu_hover" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('islamik.book')}}">ইসলামিক বই</a></li>
                            <li><a class="dropdown-item" href="{{route('kids.book')}}">শিশুদের ইসলামিক বই</a></li>
                            <li><a class="dropdown-item" href="#">অন্যান্য বই</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  text-md-left fw-bold" href="{{route('kids.zone')}}">কিডস জোন </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ফ্যাশন
                        </a>
                        <ul class="dropdown-menu sub_menu_hover" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('kasmeri.shal')}}">কাস্মিরী শাল</a></li>
                            <li><a class="dropdown-item" href="#">সৌদিয়ান বোরখা</a></li>
                            <li><a class="dropdown-item" href="#">হিজাব</a></li>
                            <li><a class="dropdown-item" href="#">সাজসজ্জা</a></li>
                            <li><a class="dropdown-item" href="#">অন্যান্য</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-md-left fw-bold" href="#">ফুড জোন</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-md-left fw-bold" href="#">ব্লগ</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link  text-md-left fw-bold" href="#"><i class="fas fa-cart-plus"></i></a>
                    </li>
                    <li class="nav-item navLogin">
                        <a class="nav-link  text-md-left fw-bold" href="{{route('user.login')}}">লগ ইন</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->


</header>
