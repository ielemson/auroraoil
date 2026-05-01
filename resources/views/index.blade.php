<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
   <title>Aurora Oil and Gas Ltd | Responsible Energy Development</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<!-- SEO -->
<meta name="description" content="Aurora Oil and Gas Ltd is a UK-registered energy company focused on upstream development, energy trading, and investment structuring with strong governance and HSE standards.">
<meta name="keywords" content="Aurora Oil and Gas, oil and gas UK, upstream development, energy trading, ESG energy, energy investment, oil and gas advisory">
<meta name="author" content="Aurora Oil and Gas Ltd">
<meta name="robots" content="index, follow">

<!-- Favicon -->
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

<!-- Open Graph (Facebook, LinkedIn) -->
<meta property="og:type" content="website">
<meta property="og:title" content="Aurora Oil and Gas Ltd | Responsible Energy Development">
<meta property="og:description" content="Delivering structured energy development, trading, and advisory services with strong governance and operational excellence.">
<meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="Aurora Oil and Gas Ltd">

<!-- Twitter (X) -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Aurora Oil and Gas Ltd | Responsible Energy Development">
<meta name="twitter:description" content="Governance-led energy company delivering upstream, trading, and investment solutions.">
<meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

<!-- Theme Color (optional but recommended) -->
<meta name="theme-color" content="#0d2c4a">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-1.css') }}" id="main-styles-link">
</head>

<body>
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="page">

        <!-- Page Header -->
        <header class="section page-header">
            <!-- RD Navbar -->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="150px" data-xl-stick-up-offset="150px" data-xxl-stick-up-offset="150px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">

                    <div class="rd-navbar-inner-outer">
                        <div class="rd-navbar-inner">

                            <!-- RD Navbar Panel -->
                            <div class="rd-navbar-panel">
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>

                                <!-- Brand -->
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="{{ url('/') }}">
                                        <img class="brand-logo-dark"
                                            src="{{ asset('images/logo.png') }}"
                                            alt="Aurora Oil and Gas Ltd" width="203" height="51" />
                                    </a>
                                </div>
                            </div>

                            <div class="rd-navbar-right rd-navbar-nav-wrap">
                                <!-- Top bar: contacts/social -->
                                <div class="rd-navbar-aside">
                                    <ul class="rd-navbar-contacts-2">
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                                <div class="unit-body">
                                                    <a class="phone" href="tel:+44XXXXXXXXXX">+44 (0) XXXX XXX XXX</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-spacing-xs">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span>
                                                </div>
                                                <div class="unit-body">
                                                    <a class="address" href="{{ url('/contact') }}">United Kingdom</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Main nav -->
                                <div class="rd-navbar-main">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item active"><a class="rd-nav-link"
                                                href="{{ url('/') }}">Home</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link"
                                                href="{{ url('/about') }}">About Us</a>
                                        </li>
                                        <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu">
                                            <a class="rd-nav-link" href="javascript:;">Services</a><span
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
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link"
                                                            href="{{ route('services.show', $item->slug) }}">
                                                            {{ $item->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="rd-nav-item"><a class="rd-nav-link"
                                                href="#partnerships">Partnerships</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link"
                                                href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1"
                                data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap"
                                data-multitoggle-isolate="data-multitoggle-isolate">
                                <div class="project-hamburger">
                                    <span class="project-hamburger-arrow"></span>
                                    <span class="project-hamburger-arrow"></span>
                                    <span class="project-hamburger-arrow"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                </nav>
            </div>
        </header>

        <!-- HERO: Swiper (content replaced; theme intact) -->
        <section class="section swiper-container swiper-slider swiper-slider-2" data-loop="true" data-autoplay="5000"
            data-simulate-touch="false" data-slide-effect="fade">

            <div class="swiper-wrapper text-sm-start">

                <div class="swiper-slide context-dark"
                    data-slide-bg="{{ asset('images/mining/slide-1-1920x753.jpg') }}">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-7 offset-lg-1 offset-xxl-0">
                                    <h3 class="oh swiper-title">
                                        <span class="d-inline-block" data-caption-animate="slideInUp"
                                            data-caption-delay="0">
                                          Excellence in Every Operation.
                                        </span>
                                    </h3>
                                    <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft"
                                        data-caption-delay="300">
                                       Safety-led performance with uncompromising operational standards.
                                    </h5>
                                    <a class="button button-lg button-secondary button-winona button-shadow-2"
                                        href="{{ url('/services') }}" data-caption-animate="fadeInUp"
                                        data-caption-delay="300">
                                        Explore Services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide context-dark"
                    data-slide-bg="{{ asset('images/mining/slide-2-1920x753.jpg') }}">
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-7 offset-lg-1 offset-xxl-0">
                                    <h3 class="oh swiper-title">
                                        <span class="d-inline-block" data-caption-animate="slideInDown"
                                            data-caption-delay="0">
                                           Partnerships That Create Value.
                                        </span>
                                    </h3>
                                    <h5 class="swiper-subtitle" data-caption-animate="fadeInRight"
                                        data-caption-delay="300">
                                       Working with industry leaders to unlock scalable energy opportunities.
                                    </h5>
                                    <div class="button-wrap oh">
                                        <a class="button button-lg button-secondary button-winona button-shadow-2"
                                            href="{{ url('/about') }}" data-caption-animate="slideInUp"
                                            data-caption-delay="0">
                                            About Aurora
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              

            </div>

            <div class="swiper-pagination" data-bullet-custom="true"></div>

            <div class="swiper-button-prev">
                <div class="preview">
                    <div class="preview__img"></div>
                </div>
                <div class="swiper-button-arrow"></div>
            </div>
            <div class="swiper-button-next">
                <div class="swiper-button-arrow"></div>
                <div class="preview">
                    <div class="preview__img"></div>
                </div>
            </div>
        </section>

        <!-- ABOUT (tabs kept, content upgraded for Oil & Gas) -->
        <section class="section section-md section-lg-0 bg-gray-100 text-md-start section-relative" id="about">
            <div class="tabs-custom container" id="tabs-8">
                <div class="row row-40 flex-lg-row-reverse">
                    <div class="col-lg-4">
                        <div class="nav-tabs-2-button">
                            <h5 class="nav-tabs-2-title">About Aurora</h5>
                            <span class="icon mdi mdi-arrow-down" data-custom-scroll-to="about"></span>
                        </div>
                        <ul class="nav nav-tabs-2">
                            <li class="nav-item-2 wow fadeInRight" role="presentation">
                                <a class="active" href="#tabs-8-1" data-bs-toggle="tab">Core values</a>
                            </li>
                            <li class="nav-item-2 wow fadeInRight" role="presentation">
                                <a href="#tabs-8-2" data-bs-toggle="tab">Our Mission</a>
                            </li>
                            <li class="nav-item-2 wow fadeInRight" role="presentation">
                                <a href="#tabs-8-3" data-bs-toggle="tab">Our Vision</a>
                            </li>
                            <li class="nav-item-2 wow fadeInRight" role="presentation">
                                <a href="#tabs-8-4" data-bs-toggle="tab">Governance</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8 tab-content-2 wow fadeInLeft">
                        <div class="tab-content">

                            <!-- Values -->
                            <div class="tab-pane fade show active" id="tabs-8-1">
                                <div class="row row-40 row-lg-50 row-xl-60">

                                    <div class="col-sm-6">
                                        <article class="box-icon-classic">
                                            <div
                                                class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-start">
                                                <div class="unit-left">
                                                    <div class="box-icon-classic-icon linearicons-hammer-wrench"></div>
                                                </div>
                                                <div class="unit-body">
                                                    <h5 class="box-icon-classic-title">
                                                        <a href="{{ url('/services') }}">Integrity & Transparency</a>
                                                    </h5>
                                                    <p class="box-icon-classic-text">
                                                        We operate with clear governance, ethical conduct, and
                                                        accountability internally and with partners.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="col-sm-6">
                                        <article class="box-icon-classic">
                                            <div
                                                class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-start">
                                                <div class="unit-left">
                                                    <div class="box-icon-classic-icon linearicons-map-marker-check">
                                                    </div>
                                                </div>
                                                <div class="unit-body">
                                                    <h5 class="box-icon-classic-title">
                                                        <a href="#esg">Safety & Compliance</a>
                                                    </h5>
                                                    <p class="box-icon-classic-text">
                                                        HSE-first culture and regulatory alignment underpin every
                                                        decision from planning through execution.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="col-sm-6">
                                        <article class="box-icon-classic">
                                            <div
                                                class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-start">
                                                <div class="unit-left">
                                                    <div class="box-icon-classic-icon linearicons-users2"></div>
                                                </div>
                                                <div class="unit-body">
                                                    <h5 class="box-icon-classic-title">
                                                        <a href="#partnerships">Partnership Mindset</a>
                                                    </h5>
                                                    <p class="box-icon-classic-text">
                                                        We work with operators, investors, and service partners to
                                                        deliver performance and shared value.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="col-sm-6">
                                        <article class="box-icon-classic">
                                            <div
                                                class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-start">
                                                <div class="unit-left">
                                                    <div class="box-icon-classic-icon linearicons-leaf"></div>
                                                </div>
                                                <div class="unit-body">
                                                    <h5 class="box-icon-classic-title">
                                                        <a href="#esg">Responsible Development</a>
                                                    </h5>
                                                    <p class="box-icon-classic-text">
                                                        We pursue efficiency, reduced operational impact, and
                                                        responsible stakeholder engagement across our activities.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                </div>
                            </div>

                            <!-- Mission -->
                            <div class="tab-pane fade" id="tabs-8-2">
                                <div class="box-info">
                                    <div class="unit flex-column flex-md-row align-items-center">
                                        <div class="unit-left">
                                            <div class="box-info-figure">
                                                <img src="{{ asset('images/mining/about-1-326x390.jpg') }}"
                                                    alt="Aurora mission" width="326" height="390" />
                                            </div>
                                        </div>
                                        <div class="unit-body">
                                            <div class="box-info-content">
                                                <h5 class="box-info-title">Our Mission</h5>
                                                <p class="box-info-text">
                                                    To develop and manage energy assets with integrity, apply modern
                                                    technical and commercial disciplines to enhance efficiency and
                                                    recovery,
                                                    and structure energy investments that create sustainable stakeholder
                                                    value while maintaining a safety-first culture and robust
                                                    compliance.
                                                </p>
                                                <a class="box-info-link" href="{{ url('/services') }}">Explore our
                                                    services</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vision -->
                            <div class="tab-pane fade" id="tabs-8-3">
                                <div class="box-info">
                                    <div class="unit flex-column flex-md-row align-items-center">
                                        <div class="unit-left">
                                            <div class="box-info-figure">
                                                <img src="{{ asset('images/mining/about-2-326x390.jpg') }}"
                                                    alt="Aurora vision" width="326" height="390" />
                                            </div>
                                        </div>
                                        <div class="unit-body">
                                            <div class="box-info-content">
                                                <h5 class="box-info-title">Our Vision</h5>
                                                <p class="box-info-text">
                                                    To be a respected and innovative energy partner delivering
                                                    responsible, efficient, and value-driven solutions in both mature
                                                    and emerging markets,
                                                    anchored on strong governance, operational excellence, and long-term
                                                    performance.
                                                </p>
                                                <a class="box-info-link" href="#partnerships">Partner with Aurora</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Governance -->
                            <div class="tab-pane fade" id="tabs-8-4">
                                <div class="box-info">
                                    <div class="unit flex-column flex-md-row align-items-center">
                                        <div class="unit-left">
                                            <div class="box-info-figure">
                                                <img src="{{ asset('images/mining/about-3-326x390.jpg') }}"
                                                    alt="Aurora governance" width="326" height="390" />
                                            </div>
                                        </div>
                                        <div class="unit-body">
                                            <div class="box-info-content">
                                                <h5 class="box-info-title">Governance & Compliance</h5>
                                                <p class="box-info-text">
                                                    Aurora Oil and Gas Ltd operates in alignment with UK corporate
                                                    governance standards and applicable regulatory requirements.
                                                    We maintain structured oversight processes, internal compliance
                                                    protocols, and ethical business practices to ensure accountability,
                                                    transparency,
                                                    and disciplined decision-making across our portfolio.
                                                </p>
                                                <a class="box-info-link" href="{{ url('/contact') }}">Request
                                                    corporate
                                                    information</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /tab-content -->
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES (restructured: 6 cards -> 5 core services + ESG/assurance card) -->
        {{-- <section class="section section-xl bg-default text-center" id="services">
            <div class="container">
                <div class="title-group">
                    <h3 class="oh">
                        <span class="d-inline-block wow slideInUp" data-wow-delay="0s">Services</span>
                    </h3>
                    <p class="text-width-small wow fadeInUp" data-wow-delay=".1s">
                        Structured upstream development, commercial supply, and investment support delivered with strong
                        governance, HSE discipline, and performance focus.
                    </p>
                </div>

                <div class="row row-lg row-40 justify-content-center">

                    <!-- 1 Upstream -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div class="oh">
                            <article class="services-classic wow slideInLeft" data-wow-delay="0s"
                                data-wow-duration="1s">
                                <a class="services-classic-figure" href="{{ url('/contact') }}">
                                    <img src="{{ asset('images/services-13-370x274.jpg') }}"
                                        alt="Upstream Exploration & Production" width="370" height="274" />
                                </a>
                                <div class="services-classic-caption">
                                    <div class="unit align-items-lg-center">
                                        <div class="unit-left">
                                            <span class="services-classic-icon linearicons-ship"></span>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="services-classic-title"><a
                                                    href="{{ url('/contact') }}">Upstream Exploration
                                                    &amp; Production</a></h5>
                                            <p class="services-classic-text">Asset evaluation, development planning,
                                                drilling oversight, and production optimisation.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- 2 Asset Development -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div class="oh">
                            <article class="services-classic wow slideInLeft" data-wow-delay=".15s"
                                data-wow-duration="1s">
                                <a class="services-classic-figure" href="{{ url('/contact') }}">
                                    <img src="{{ asset('images/services-14-370x274.jpg') }}"
                                        alt="Asset Development & Project Management" width="370" height="274" />
                                </a>
                                <div class="services-classic-caption">
                                    <div class="unit align-items-lg-center">
                                        <div class="unit-left">
                                            <span class="services-classic-icon linearicons-power"></span>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="services-classic-title"><a href="{{ url('/contact') }}">Asset
                                                    Development
                                                    &amp; Project Management</a></h5>
                                            <p class="services-classic-text">FDP, CAPEX/OPEX planning, governance,
                                                milestones, and execution oversight.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- 3 Trading & Supply -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div class="oh">
                            <article class="services-classic wow slideInLeft" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                <a class="services-classic-figure" href="{{ url('/contact') }}">
                                    <img src="{{ asset('images/services-15-370x274.jpg') }}"
                                        alt="Energy Trading & Commercial Supply" width="370" height="274" />
                                </a>
                                <div class="services-classic-caption">
                                    <div class="unit align-items-lg-center">
                                        <div class="unit-left">
                                            <span class="services-classic-icon linearicons-factory2"></span>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="services-classic-title"><a
                                                    href="{{ url('/contact') }}">Trading &amp;
                                                    Commercial Supply</a></h5>
                                            <p class="services-classic-text">Structured offtake, product sourcing,
                                                supply assurance, and pricing/risk support.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- 4 Advisory -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div class="oh">
                            <article class="services-classic wow slideInRight" data-wow-delay="0s"
                                data-wow-duration="1s">
                                <a class="services-classic-figure" href="{{ url('/contact') }}">
                                    <img src="{{ asset('images/services-16-370x274.jpg') }}"
                                        alt="Energy Advisory & Investment Structuring" width="370"
                                        height="274" />
                                </a>
                                <div class="services-classic-caption">
                                    <div class="unit align-items-lg-center">
                                        <div class="unit-left">
                                            <span class="services-classic-icon linearicons-fire"></span>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="services-classic-title"><a
                                                    href="{{ url('/contact') }}">Advisory &amp;
                                                    Investment Structuring</a></h5>
                                            <p class="services-classic-text">Feasibility, due diligence, JV
                                                structuring, and finance coordination for viable projects.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- 5 ESG -->
                    <div class="col-md-6 col-lg-5 col-xl-4" id="esg">
                        <div class="oh">
                            <article class="services-classic wow slideInRight" data-wow-delay=".15s"
                                data-wow-duration="1s">
                                <a class="services-classic-figure" href="{{ url('/contact') }}">
                                    <img src="{{ asset('images/services-17-370x274.jpg') }}"
                                        alt="ESG & Responsible Development" width="370" height="274" />
                                </a>
                                <div class="services-classic-caption">
                                    <div class="unit align-items-lg-center">
                                        <div class="unit-left">
                                            <span class="services-classic-icon linearicons-drop2"></span>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="services-classic-title"><a href="{{ url('/contact') }}">ESG
                                                    &amp;
                                                    Responsible Development</a></h5>
                                            <p class="services-classic-text">HSE standards, environmental stewardship,
                                                and responsible stakeholder engagement.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- 6 Assurance / Governance -->
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div class="oh">
                            <article class="services-classic wow slideInRight" data-wow-delay=".3s"
                                data-wow-duration="1s">
                                <a class="services-classic-figure" href="{{ url('/contact') }}">
                                    <img src="{{ asset('images/services-18-370x274.jpg') }}"
                                        alt="Governance-led Delivery" width="370" height="274" />
                                </a>
                                <div class="services-classic-caption">
                                    <div class="unit align-items-lg-center">
                                        <div class="unit-left">
                                            <span class="services-classic-icon linearicons-sun"></span>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="services-classic-title"><a
                                                    href="{{ url('/contact') }}">Governance-led
                                                    Delivery</a></h5>
                                            <p class="services-classic-text">Clear oversight, compliance, and
                                                disciplined execution to protect value and performance.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

        @php
    $serviceIcons = [
        'linearicons-ship',
        'linearicons-power',
        'linearicons-factory2',
        'linearicons-fire',
        'linearicons-drop2',
        'linearicons-sun',
    ];

    $animations = [
        'slideInLeft',
        'slideInLeft',
        'slideInLeft',
        'slideInRight',
        'slideInRight',
        'slideInRight',
    ];
@endphp

<section class="section section-xl bg-default text-center" id="services">
    <div class="container">
        <div class="title-group">
            <h3 class="oh">
                <span class="d-inline-block wow slideInUp" data-wow-delay="0s">Services</span>
            </h3>
            <p class="text-width-small wow fadeInUp" data-wow-delay=".1s">
                Structured upstream development, commercial supply, and investment support delivered with strong
                governance, HSE discipline, and performance focus.
            </p>
        </div>

        <div class="row row-lg row-40 justify-content-center">
            @forelse($services as $index => $service)
                <div class="col-md-6 col-lg-5 col-xl-4" id="{{ $service->slug === 'esg-responsible-development' ? 'esg' : '' }}">
                    <div class="oh">
                        <article class="services-classic wow {{ $animations[$index % count($animations)] }}"
                                 data-wow-delay="{{ ($index % 3) * 0.15 }}s"
                                 data-wow-duration="1s">

                            <a class="services-classic-figure" href="{{ route('services.show', $service->slug) }}">
                                @if($service->image)
                                    <img src="{{ asset($service->image) }}"
                                         alt="{{ $service->title }}"
                                         width="370"
                                         height="274" />
                                @else
                                    <img src="{{ asset('images/services/default-service.jpg') }}"
                                         alt="{{ $service->title }}"
                                         width="370"
                                         height="274" />
                                @endif
                            </a>

                            <div class="services-classic-caption">
                                <div class="unit align-items-lg-center">
                                    <div class="unit-left">
                                        <span class="services-classic-icon {{ $serviceIcons[$index % count($serviceIcons)] }}"></span>
                                    </div>

                                    <div class="unit-body">
                                        <h5 class="services-classic-title">
                                            <a href="{{ route('services.show', $service->slug) }}">
                                                {{ $service->title }}
                                            </a>
                                        </h5>

                                        <p class="services-classic-text">
                                            {{ Str::limit($service->summary, 120) }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>No services available at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

        <!-- PARTNERSHIPS (new section using theme components) -->
        <section class="section section-md bg-gray-100 text-md-start" id="partnerships">
            <div class="container">
                <div class="row row-40 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                        <h3>Partnerships</h3>
                        <p>
                            Aurora Oil and Gas Ltd collaborates with technical operators, investors, service providers,
                            and institutions to deliver efficient project execution and sustainable commercial outcomes.
                            We welcome structured discussions around asset development, offtake arrangements, and
                            investment partnerships.
                        </p>
                        <ul class="list-marked">
                            <li>Operators &amp; technical partners</li>
                            <li>Investors &amp; financing institutions</li>
                            <li>Offtakers &amp; supply chain partners</li>
                            <li>Engineering &amp; specialist service providers</li>
                        </ul>
                        <a class="button button-lg button-secondary button-winona button-shadow-2"
                            href="{{ url('/contact') }}">Start a conversation</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="box-info-figure">
                            <img src="{{ asset('images/mining/about-2-326x390.jpg') }}" alt="Energy partnerships"
                                width="540" height="450" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER (content replaced; structure preserved) -->
        <footer class="section footer-classic context-dark footer-classic-2">
            <div class="footer-classic-content">
                <div class="container">
                    <div class="row row-50 row-lg-0 g-0">

                        <!-- Quick links -->
                        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                            <div class="footer-classic-header">
                                <h6 class="footer-classic-title">Quick links</h6>
                            </div>
                            <div class="footer-classic-body">
                                <ul class="footer-classic-list d-inline-block d-sm-block">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/services') }}">Services</a></li>
                                    <li><a href="#esg">ESG</a></li>
                                    <li><a href="#partnerships">Partnerships</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>

                            </div>
                        </div>

                        <!-- Get in touch -->
                        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                            <div class="footer-classic-header">
                                <div class="box-width-230">
                                    <h6 class="footer-classic-title">Get in touch</h6>
                                </div>
                            </div>
                            <div class="footer-classic-body">
                                <div class="box-width-230">
                                    <div class="footer-classic-contacts">
                                        <div class="footer-classic-contacts-item">
                                            <div class="unit unit-spacing-sm align-items-center">
                                                <div class="unit-left"><span
                                                        class="icon icon-24 mdi mdi-phone"></span></div>
                                                <div class="unit-body"><a class="phone" href="tel:+44XXXXXXXXXX">+44
                                                        (0) XXXX XXX XXX</a></div>
                                            </div>
                                        </div>
                                        <div class="footer-classic-contacts-item">
                                            <div class="unit unit-spacing-sm align-items-center">
                                                <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                                                <div class="unit-body"><a class="mail"
                                                        href="mailto:info@auroraoil.co.uk">info@auroraoil.co.uk</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="button button-sm button-primary button-winona"
                                        href="{{ url('/contact') }}">
                                        Speak with our team
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /footer-classic-content -->

            <div class="footer-classic-panel">
                <div class="container">
                    <p class="rights">
                        <span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span>
                        <span>Aurora Oil and Gas Ltd</span><span>.&nbsp;</span>
                        <span>Company No. 16379620</span><span>.&nbsp;</span>
                        <a href="{{ url('/') }}">Privacy policy</a>
                    </p>
                </div>
            </div>
        </footer>

    </div><!-- /page -->

    <div class="snackbars" id="form-output-global"></div>

    <!-- Javascript -->
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
