<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">

    <!-- Title -->
    <title>Services GNG Finance | Renewable Energy Project Finance</title>

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
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/plugins/metismenu.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="header-header-two">

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

        <div class="header-main-h2 header--sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-haeder-wrapper-h2">


                            <a href="{{ url('/') }}" class="logo-area" aria-label="GNG Finance Home">
                                <img src="{{ asset('assets/images/logo/gng-logo-bg-trans.png') }}" alt="GNG Finance">
                            </a>


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
                                        {{-- <li class="">
                                            <a class="nav-link" href="{{ url('/services') }}">SERVICES</a>

                                        </li> --}}
                                        <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a
                                                class="rd-nav-link" href="projects.html">Services</a><span
                                                class="rd-navbar-submenu-toggle"></span>
                                            <!-- RD Navbar Dropdown-->
                                            <ul class="rd-menu rd-navbar-dropdown">


                                                @php
                                                    use App\Models\Service;

                                                    $services = Service::where('is_active', 1)
                                                        ->orderBy('sort_order')
                                                        ->get();
                                                @endphp

                                                @foreach ($services as $item)
                                                    <li>
                                                        <a href=""
                                                            class="{{ isset($service) && $service->slug === $item->slug ? 'active' : '' }}">

                                                        </a>
                                                    </li>

                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link"
                                                            href="{{ route('services.show', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <!-- SOLUTIONS -->


                                        <!-- CONTACT -->
                                        <li><a class="nav-link" href="{{ url('/contact') }}">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>

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
    <div class="rts-bread-crumb-area bg_image bg-breadcrumb">
        <div class="container ptb--65">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">
                            <span class="bg-text-stok">Our Services</span>

                            <div class="title skew-up">
                                <a href="{{ url('/about') }}">SERVICES</a>
                            </div>

                            <div class="slug skew-up">
                                <a href="{{ url('/') }}">HOME /</a>
                                <a class="active" href="{{ url('/about') }}">SERVICE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.header_')

    <div class="rts-service-area rts-section-gap bg-service_s">
        <div class="container">
            <div class="row g-40">

                <!-- Solar Project Financing -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-single-s-main">
                        <div class="icon">
                            <i class="fa-solid fa-solar-panel fa-2x"></i>
                        </div>
                        <a href="{{ url('/services') }}">
                            <h5 class="title">Solar Project Financing</h5>
                        </a>
                        <p class="disc">
                            Financing for commercial rooftop and utility-scale solar projects aligned to build timelines
                            and long-term performance.
                        </p>

                    </div>
                </div>

                <!-- Wind Energy Financing -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-single-s-main yellow-bg">
                        <div class="icon">
                            <i class="fa-solid fa-wind fa-2x"></i>
                        </div>
                        <a href="{{ url('/services') }}">
                            <h5 class="title">Wind Energy Financing</h5>
                        </a>
                        <p class="disc">
                            Structured funding for wind farms and scalable clean power infrastructure matched to project
                            milestones.
                        </p>

                    </div>
                </div>

                <!-- Battery Storage & Hybrid Systems -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-single-s-main">
                        <div class="icon">
                            <i class="fa-solid fa-battery-full fa-2x"></i>
                        </div>
                        <a href="{{ url('/services') }}">
                            <h5 class="title">Battery & Hybrid Systems</h5>
                        </a>
                        <p class="disc">
                            Financing for energy storage and hybrid systems that enhance reliability and maximize
                            renewable value.
                        </p>

                    </div>
                </div>

                <!-- Off-Grid & Mini-Grid Financing -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-single-s-main">
                        <div class="icon">
                            <i class="fa-solid fa-plug-circle-bolt fa-2x"></i>
                        </div>
                        <a href="{{ url('/services') }}">
                            <h5 class="title">Off-Grid & Mini-Grid</h5>
                        </a>
                        <p class="disc">
                            Funding for rural electrification and decentralized systems aligned to phased rollout and
                            demand realities.
                        </p>

                    </div>
                </div>

                <!-- EV Charging Infrastructure -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-single-s-main">
                        <div class="icon">
                            <i class="fa-solid fa-charging-station fa-2x"></i>
                        </div>
                        <a href="{{ url('/services') }}">
                            <h5 class="title">EV Charging Infrastructure</h5>
                        </a>
                        <p class="disc">
                            Financing for public and fleet charging networks supporting clean mobility expansion.
                        </p>

                    </div>
                </div>

                <!-- Energy Efficiency & Green Retrofit -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-single-s-main">
                        <div class="icon">
                            <i class="fa-solid fa-lightbulb fa-2x"></i>
                        </div>
                        <a href="{{ url('/services') }}">
                            <h5 class="title">Energy Efficiency & Retrofit</h5>
                        </a>
                        <p class="disc">
                            Financing for efficiency upgrades including LED conversion, smart energy systems, and green
                            retrofits.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('partials.footer')
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
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
    <script src="assets/js/plugins/jquery.min.js"></script>
    <script src="assets/js/vendor/jqueryui.js"></script>
    <script src="assets/js/plugins/counter-up.js"></script>
    <script src="assets/js/plugins/swiper.js"></script>
    <script src="assets/js/plugins/metismenu.js"></script>
    <script src="assets/js/vendor/waypoint.js"></script>
    <script src="assets/js/vendor/waw.js"></script>
    <script src="assets/js/plugins/gsap.min.js"></script>
    <script src="assets/js/plugins/scrolltigger.js"></script>
    <script src="assets/js/vendor/split-text.js"></script>
    <script src="assets/js/vendor/contact.form.js"></script>
    <script src="assets/js/vendor/split-type.js"></script>
    <script src="assets/js/plugins/jquery-timepicker.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/vendor/magnific-popup.min.js"></script>

    <script src="assets/js/main.js"></script>
    <!-- Scripts style two End -->
</body>

</html>
