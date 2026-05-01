<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>{{ $service->title }} | Aurora Oil and Gas Ltd</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-1.css') }}" id="main-styles-link">
</head>

<body>
<div class="preloader">
    <div class="wrapper-triangle">
        <div class="pen">
            @for($i = 0; $i < 3; $i++)
                <div class="line-triangle">
                    @for($j = 0; $j < 7; $j++)
                        <div class="triangle"></div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</div>

<div class="page">

     <!-- Page Header-->
       @include("partials.header_")

    {{-- Breadcrumbs --}}
    <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title">{{ $service->title }}</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <div class="box-transform" style="background-image: url({{ asset('images/bg-services.jpg') }});"></div>
        </div>

        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('services.index') }}">Services</a></li>
                <li class="active">{{ $service->title }}</li>
            </ul>
        </div>
    </section>

    {{-- Service Details --}}
    <section class="section section-sm section-first bg-default text-start">
        <div class="container">
            <div class="row row-60">

                <div class="col-md-7 col-xl-8">
                    <div class="single-service">

                        @if($service->image)
                            <img src="{{ asset($service->image) }}"
                                 alt="{{ $service->title }}"
                                 width="770"
                                 height="426">
                        @else
                            <img src="{{ asset('images/services/default-service.jpg') }}"
                                 alt="{{ $service->title }}"
                                 width="770"
                                 height="426">
                        @endif

                        <h4>{{ $service->title }}</h4>

                        @if($service->summary)
                            <p class="lead">{{ $service->summary }}</p>
                        @endif

                        @if($service->description)
                            <div class="service-description">
                                {!! $service->description !!}
                            </div>
                        @endif

                    </div>
                </div>

                <div class="col-md-5 col-xl-4">
                    <div class="aside aside-services">
                        <div class="row row-60">

                            <div class="aside-item col-12">
                                <h5 class="aside-services-title">Our Services</h5>

                                <ul class="list-category">
                                    @forelse($services as $item)
                                        <li class="list-category-item">
                                            <a href="{{ route('services.show', $item->slug) }}"
                                               class="{{ $service->slug === $item->slug ? 'active' : '' }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @empty
                                        <li class="list-category-item">
                                            <a href="#">No services available</a>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>

                            <div class="aside-item col-sm-6 col-md-12">
                                <h5 class="aside-services-title">Our Contacts</h5>

                                <div class="box-contacts">
                                    <div class="box-contacts-item">
                                        <div class="box-contacts-title">Business Enquiry</div>
                                        <div class="unit unit-spacing-xs flex-column flex-md-row">
                                            <div class="unit-left">
                                                <span class="icon icon-24 mdi mdi-phone"></span>
                                            </div>
                                            <div class="unit-body">
                                                <a class="phone" href="tel:+447000000000">+44 7000 000000</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-contacts-item">
                                        <div class="box-contacts-title">E-mail</div>
                                        <div class="unit unit-spacing-xs flex-column flex-md-row">
                                            <div class="unit-left">
                                                <span class="icon mdi mdi-email"></span>
                                            </div>
                                            <div class="unit-body">
                                                <a class="mail" href="mailto:info@auroraoilandgas.com">
                                                    info@auroraoilandgas.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="aside-item col-sm-6 col-md-12">
                                <h5 class="aside-services-title">Talk to Aurora</h5>

                                <a class="button button-lg button-icon button-icon-left button-primary button-winona"
                                   href="{{ url('/contact') }}">
                                    <span class="icon mdi mdi-email-outline"></span>
                                    <span>Contact Us</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- Newsletter --}}
    <section class="section section-md bg-gray-8 context-dark text-md-start">
        <div class="container">
            <div class="row row-30 justify-content-center align-items-center">
                <div class="col-lg-4 col-xl-3">
                    <h5>Newsletter</h5>
                    <p class="text-white-05">Sign up for our newsletter and follow us on social media</p>
                </div>

                <div class="col-lg-8 col-xl-9">
                    <form class="rd-form rd-mailform rd-form-inline rd-form-inline-lg" method="POST" action="#">
                        @csrf
                        <div class="form-wrap">
                            <input class="form-input" id="subscribe-email" type="email" name="email">
                            <label class="form-label" for="subscribe-email">Your E-mail*</label>
                        </div>

                        <div class="form-button">
                            <button class="button button-winona button-lg button-secondary" type="submit">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

</div>

<div class="snackbars" id="form-output-global"></div>

<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>