<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">

    <!-- Title -->
    <title>About GNG Finance | Renewable Energy Project Finance</title>

    <!-- Meta Description -->
    <meta name="description"
        content="GNG Finance is the dedicated renewable energy financing platform of Green Energy Finance (UK) Ltd. We provide structured capital solutions for solar, wind, storage, mini-grid, EV charging, and energy efficiency projects.">

    <!-- Meta Keywords -->
    <meta name="keywords"
        content="GNG Finance, renewable energy finance, solar project finance, wind financing, battery storage finance, mini-grid funding, EV charging infrastructure finance, clean energy capital">

    <!-- Author -->
    <meta name="author" content="GNG Finance">

    <!-- Open Graph (for LinkedIn & social sharing) -->
    <meta property="og:title" content="About GNG Finance | Renewable Energy Project Finance">
    <meta property="og:description"
        content="Institutional financing solutions for bankable renewable energy infrastructure projects.">
    <meta property="og:type" content="website">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-6.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- header style two -->

    <div class="header-header-two">
        <!-- header top -->
        <div class="header-two-solari header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-m">
                            <div class="left">
                                <div class="inf">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>Mon – Fri: 8:00 – 18:00</p>
                                </div>
                                <div class="inf">
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto:info@gngfinance.com">info@gngfinance.com</a>
                                </div>
                            </div>
                            <div class="right">
                                <div class="social-header-top-h2">

                                </div>
                            </div>
                        </div><!-- header-top-m -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header main start -->
        <div class="header-main-h2 header--sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-haeder-wrapper-h2">

                            <!-- Logo -->
                            <a href="{{ url('/') }}" class="logo-area" aria-label="GNG Finance Home">
                                <img src="{{ asset('assets/images/logo/gng-logo-bg-trans.png') }}" alt="GNG Finance">
                            </a>

                            <!-- Navigation -->
                            <div class="header-nav main-nav-one">
                                <nav aria-label="Primary">
                                    <ul>
                                        <li>
                                            <a class="nav-link" href="{{ url('/') }}">HOME</a>
                                        </li>

                                        <!-- ABOUT -->
                                        <li class="">
                                            <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>

                                        </li>

                                        <!-- SERVICES -->
                                        <li class="">
                                            <a class="nav-link" href="{{ url('/services') }}">SERVICES</a>

                                        </li>

                                        <!-- SOLUTIONS -->
                                        <li class="has-dropdown">
                                            <a class="nav-link" href="#">Solutions</a>
                                            <ul class="submenu">
                                                @php
                                                    $services = config('services.gng_finance_services');
                                                @endphp

                                                @foreach ($services as $service)
                                                    <li>
                                                        <a href="{{ route('services.show', $service['slug']) }}">
                                                            {{ $service['title'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <!-- CONTACT -->
                                        <li><a class="nav-link" href="{{ url('/contact') }}">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- Actions -->
                            <div class="actions-area">
                                <button class="search-btn" id="search" type="button" aria-label="Search">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.75 14.7188C16.0625 15.0312 16.0625 15.5 15.75 15.7812C15.625 15.9375 15.4375 16 15.25 16C15.0312 16 14.8438 15.9375 14.6875 15.7812L10.5 11.5938C9.375 12.5 7.96875 13 6.46875 13C2.90625 13 0 10.0938 0 6.5C0 2.9375 2.875 0 6.46875 0C10.0312 0 12.9688 2.9375 12.9688 6.5C12.9688 8.03125 12.4688 9.4375 11.5625 10.5312L15.75 14.7188ZM1.5 6.5C1.5 9.28125 3.71875 11.5 6.5 11.5C9.25 11.5 11.5 9.28125 11.5 6.5C11.5 3.75 9.25 1.5 6.5 1.5C3.71875 1.5 1.5 3.75 1.5 6.5Z"
                                            fill="#4AAB3D" />
                                    </svg>
                                </button>

                                <button class="menu-btn" id="menu-btn" type="button" aria-label="Open Menu">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#4AAB3D" />
                                        <rect y="7" width="20" height="2" fill="#4AAB3D" />
                                        <rect width="20" height="2" fill="#4AAB3D" />
                                    </svg>
                                </button>

                                <a href="tel:++447412646894" class="rts-btn btn-primary">
                                    Speak With Our Team: +447412646894
                                </a>
                            </div>

                        </div><!-- main-haeder-wrapper-h2 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header main end -->
    </div>
    <!-- header style two End -->

    <div class="rts-bread-crumb-area bg_image bg-breadcrumb">
        <div class="container ptb--65">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <span class="bg-text-stok">About</span>

                            <div class="title skew-up">
                                <a href="{{ url('/about') }}">About Us</a>
                            </div>

                            <div class="slug skew-up">
                                <a href="{{ url('/') }}">HOME /</a>
                                <a class="active" href="{{ url('/about') }}">ABOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header style two -->
    @include('partials.header_')
    <!-- header style two End -->

    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="rts-about-left-image-area">
                        <div class="thumbnail">
                            <img src="assets/images/about/20.png" alt="GNG Finance renewable energy project finance">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-right-content-area-solar-energy">
                        <div class="title-area-left">
                            <p class="pre">
                                <span>About</span> GNG Finance
                            </p>
                            <h2 class="title skew-up">
                                Financing Clean & Renewable Energy
                            </h2>
                        </div>

                        <ul class="nav custom-nav-soalr-about nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Who We Are</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Our Mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Our Vision</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Why -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="single-about-content-solar">
                                    {{-- <p class="disc">
                                        We partner with developers, investors, and project sponsors to transform clean
                                        energy concepts into fully bankable investments. From detailed financial
                                        modelling to investor-grade documentation and transaction support, we ensure
                                        every project meets the rigorous standards of lenders and institutional capital.
                                    </p>
                                    <p class="disc">
                                        Our approach combines technical insight, financial discipline, and practical
                                        execution so your project doesn’t just look viable on paper, but stands
                                        confidently in front of banks and investors.
                                    </p> --}}
                                    <p class="disc">
                                        GNG Finance is the dedicated renewable energy financing platform of Green Energy
                                        Finance (UK) Ltd. Our mandate is clear: we finance green and renewable energy
                                        projects only. We do not finance general businesses or unrelated ventures.
                                    </p>
                                    <p class="disc">
                                        We support developers, asset owners, and partners across the clean energy value
                                        chain solar, wind, battery storage, off-grid and mini-grid systems, EV charging,
                                        and energy efficiency. Our focus is to evaluate feasibility, strengthen
                                        bankability, and align financing to the technical and commercial realities of
                                        each energy asset.
                                    </p>

                                </div>
                            </div>

                            <!-- Mission -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="single-about-content-solar">
                                    <p class="disc">
                                        To accelerate the deployment of renewable energy infrastructure by providing
                                        specialized financing that is practical, transparent, and built for sustainable
                                        performance.
                                    </p>


                                </div>
                            </div>

                            <!-- Focus -->
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="single-about-content-solar">
                                    <p class="disc">
                                        To be a trusted financing partner in the global energy transition—known for
                                        integrity, sector focus, and measurable environmental impact.
                                    </p>

                                </div>
                            </div>

                        </div><!-- tab-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->
    <div class="rts-service-details-area rts-section-gap">
        <div class="container">
            <div class="row g-40">

                <div class="col-lg-8">
                    <div class="left-service-details-wrapper">

                        <div class="thumbnail-large">
                            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                        </div>

                        <div class="content--sd-top reveal">
                            <h3 class="title title-g">
                                {{ $service['title'] }}
                            </h3>

                            <p class="disc-1">
                                {{ $service['summary'] }}
                            </p>

                            <p class="disc-2">
                                {{ $service['description'] }}
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-md-12 col-sm-12 col-12">

                    <!-- Search Widget -->
                    <div class="rts-single-wized search">
                        <div class="wized-body mt--0">
                            <div class="rts-search-wrapper">
                                <input class="Search" type="text" placeholder="Enter Keyword">
                                <button><i class="fal fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Services Sidebar -->
                    <div class="rts-single-wized Categories">
                        <div class="wized-header">
                            <h5 class="title text-start mt--0">
                                Our Services
                            </h5>
                        </div>

                        <div class="wized-body">
                            @foreach ($services as $item)
                                <ul class="single-categories">
                                    <li>
                                        <a href="{{ route('services.show', $item['slug']) }}"
                                            class="{{ $service['slug'] === $item['slug'] ? 'active' : '' }}">
                                            {{ $item['title'] }}
                                            <i class="far fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- rts call to action area start -->


    @include('partials.footer')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>


    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->


    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text"
                        placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>

    <div id="anywhere-home" class="">
    </div>


    <!-- jquery js -->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrolltigger.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/split-text.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/contact.form.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/split-type.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>

    <script src="assets/js/main.js"></script>
    <!-- Scripts style two End -->
</body>

</html>
