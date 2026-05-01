<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>About Us | Aurora Oil and Gas Ltd</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="main-styles-link">
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
        <!-- Page Header-->
        {{-- <header class="section page-header">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                    data-xl-stick-up="true" data-xl-stick-up-offset="150px">

                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                        data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>

                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle"
                            data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>

                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{ url('/') }}">
                                <img class="brand-logo-dark" src="{{ asset('images/logo.png') }}"
                                    alt="Aurora Oil and Gas Ltd" width="223" height="60" />
                            </a>
                        </div>
                    </div>

                    <div class="rd-navbar-right">
                        <div class="rd-navbar-main rd-navbar-nav-wrap">
                            <div class="rd-navbar-main-right">
                                <ul class="rd-navbar-contacts">
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
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                            <div class="unit-body">
                                                <a class="address" href="#">United Kingdom (Registered Office)</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="rd-navbar-main-left">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link"
                                            href="{{ url('/about') }}">About
                                            Us</a>
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

                        <div class="rd-navbar-aside rd-navbar-collapse">
                            <div class="rd-navbar-info">
                                <article class="box-icon-minimal">
                                    <div class="unit align-items-center unit-spacing-sm">
                                        <div class="unit-left">
                                            <div class="icon linearicons-trophy2"></div>
                                        </div>
                                        <div class="unit-body">
                                            <div class="box-icon-minimal-title">Governance-Led</div>
                                            <p class="box-icon-minimal-text">Execution & Compliance</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="box-icon-minimal">
                                    <div class="unit align-items-center unit-spacing-xxs">
                                        <div class="unit-left">
                                            <div class="icon linearicons-medal-empty"></div>
                                        </div>
                                        <div class="unit-body">
                                            <div class="box-icon-minimal-title">Risk Managed</div>
                                            <p class="box-icon-minimal-text">HSE & Operational Controls</p>
                                        </div>
                                    </div>
                                </article>

                                <article class="box-icon-minimal">
                                    <div class="unit align-items-center unit-spacing-xs">
                                        <div class="unit-left">
                                            <div class="icon linearicons-receipt"></div>
                                        </div>
                                        <div class="unit-body">
                                            <div class="box-icon-minimal-title">Structured Deals</div>
                                            <p class="box-icon-minimal-text">Bankable Project Frameworks</p>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <a class="button button-icon button-icon-left button-white button-winona"
                                href="{{ asset('docs/aurora-corporate-profile.pdf') }}" download>
                                <span class="icon mdi mdi-download"></span><span>Download Profile</span>
                            </a>

                            <a class="button button-icon button-icon-left button-white button-winona"
                                href="{{ url('/contact') }}">
                                <span class="icon mdi mdi-email-outline"></span><span>Contact Us</span>
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
        </header> --}}
          @include("partials.header_")

        <!-- Breadcrumbs -->
        <section class="bg-gray-7">
            <div class="breadcrumbs-custom box-transform-wrap context-dark">
                <div class="container">
                    <h3 class="breadcrumbs-custom-title">About Aurora Oil and Gas Ltd</h3>
                    <div class="breadcrumbs-custom-decor"></div>
                </div>
                <div class="box-transform" style="background-image: url({{ asset('images/bg-forms.jpg') }});"></div>
            </div>
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </section>

      <!-- About-->
<section class="section section-lg bg-default">
    <div class="container">
        <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-start"
            id="tabs-4">

            <div class="col-lg-4 col-xl-3">
                <h5 class="text-spacing-200">Trusted Energy Partner</h5>

                <ul class="nav list-category list-category-down-md-inline-block">
                    <li class="list-category-item wow fadeInRight" data-wow-delay="0s">
                        <a class="active" href="#tabs-4-1" data-bs-toggle="tab">About</a>
                    </li>
                    <li class="list-category-item wow fadeInRight" data-wow-delay=".1s">
                        <a href="#tabs-4-2" data-bs-toggle="tab">Mission</a>
                    </li>
                    <li class="list-category-item wow fadeInRight" data-wow-delay=".2s">
                        <a href="#tabs-4-3" data-bs-toggle="tab">Goals</a>
                    </li>
                    <li class="list-category-item wow fadeInRight" data-wow-delay=".3s">
                        <a href="#tabs-4-4" data-bs-toggle="tab">Values</a>
                    </li>
                </ul>

                <a class="button button-lg button-primary button-winona" href="{{ url('/contact') }}">
                    Contact Us
                </a>
            </div>

            <div class="col-lg-8 col-xl-9">
                <div class="tab-content tab-content-1">

                    <!-- About -->
                    <div class="tab-pane fade show active" id="tabs-4-1">
                        <h4>Who We Are</h4>

                        <p>
                            Aurora Oil and Gas Ltd is a governance-led energy company focused on developing
                            bankable upstream and midstream opportunities through disciplined execution,
                            strong compliance, and robust risk management.
                        </p>

                        <p>
                            We drive value across the energy chain from development planning and commercial
                            structuring to partner alignment and project delivery while maintaining the highest
                            standards of HSE, transparency, and stakeholder accountability.
                        </p>

                        <img src="{{ asset('images/about-1-835x418.jpg') }}"
                             alt="Aurora operations"
                             width="835"
                             height="418" />
                    </div>

                    <!-- Mission -->
                    <div class="tab-pane fade" id="tabs-4-2">
                        <h4>Our Mission</h4>

                        <p>
                            To deliver responsible energy solutions by structuring and executing projects that
                            are safe, compliant, financially viable, and aligned with long-term stakeholder value.
                        </p>

                        <p>
                            We integrate technical expertise with commercial discipline to ensure every opportunity
                            meets regulatory expectations, investment criteria, and operational excellence standards.
                        </p>

                        <img src="{{ asset('images/about-2-835x418.jpg') }}"
                             alt="Mission"
                             width="835"
                             height="418" />
                    </div>

                    <!-- Goals -->
                    <div class="tab-pane fade" id="tabs-4-3">
                        <h4>Our Goals</h4>

                        <p><strong>1.</strong> Develop a pipeline of de-risked, investment-ready energy assets.</p>
                        <p><strong>2.</strong> Uphold best-in-class governance, compliance, and reporting standards.</p>
                        <p><strong>3.</strong> Enhance operational performance through structured planning and execution.</p>
                        <p><strong>4.</strong> Build trusted partnerships with governments, operators, and investors.</p>

                        <img src="{{ asset('images/about-3-835x418.jpg') }}"
                             alt="Goals"
                             width="835"
                             height="418" />
                    </div>

                    <!-- Values -->
                    <div class="tab-pane fade" id="tabs-4-4">
                        <h4>Our Values</h4>

                        <p><strong>Integrity:</strong> We operate with transparency, discipline, and accountability.</p>
                        <p><strong>Safety:</strong> HSE is embedded in every decision and operation.</p>
                        <p><strong>Excellence:</strong> We deliver through rigorous standards and continuous improvement.</p>
                        <p><strong>Accountability:</strong> We take ownership of outcomes and deliver measurable results.</p>

                        <img src="{{ asset('images/about-4-835x418.jpg') }}"
                             alt="Values"
                             width="835"
                             height="418" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Icon Classic-->
<section class="section section-lg bg-gray-100">
    <div class="container">
        <div class="row row-md row-50">

            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay="0s">
                <article class="box-icon-classic">
                    <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-start">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-hammer-wrench"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title">
                                <a href="{{ url('/') }}#services">Technical Discipline</a>
                            </h5>
                            <p class="box-icon-classic-text">
                                Structured planning, engineering oversight, and disciplined execution across all projects.
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".1s">
                <article class="box-icon-classic">
                    <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-start">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-map-marker-check"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title">
                                <a href="{{ url('/') }}#services">Regulatory Alignment</a>
                            </h5>
                            <p class="box-icon-classic-text">
                                Compliance-driven frameworks that strengthen approvals, partnerships, and investor confidence.
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".2s">
                <article class="box-icon-classic">
                    <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-start">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon linearicons-leaf"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title">
                                <a href="{{ url('/') }}#services">Responsible Operations</a>
                            </h5>
                            <p class="box-icon-classic-text">
                                Safety-first operations with a strong focus on sustainability and responsible development.
                            </p>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>


        <!-- Footer -->
        @include("partials.footer")
    </div>

    <div class="snackbars" id="form-output-global"></div>

    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
