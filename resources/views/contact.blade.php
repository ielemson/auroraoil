<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Contacts | Aurora Oil & Gas Ltd</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <!-- Favicon -->
    <link rel="icon" href="{{ url('images/favicon.png') }}" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- IMPORTANT: use url() so paths never break -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}" id="main-styles-link">
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
        @include('partials.header_')
        <!-- Breadcrumbs -->
        <section class="bg-gray-7">
            <div class="breadcrumbs-custom box-transform-wrap context-dark">
                <div class="container">
                    <h3 class="breadcrumbs-custom-title">Contacts</h3>
                    <div class="breadcrumbs-custom-decor"></div>
                </div>
                <div class="box-transform" style="background-image: url({{ url('images/bg-services.jpg') }});"></div>
            </div>
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Contacts</li>
                </ul>
            </div>
        </section>
        <!-- Contacts-->
        <section class="section section-lg bg-default text-md-start">
            <div class="container">
                <div class="row row-60 justify-content-center">
                    <div class="col-lg-8">
                        <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
                        <p>
                            For investment partnerships, upstream project discussions, advisory engagements,
                            or general corporate enquiries, please send us a message below.
                        </p>
                        <form id="contactForm" class="rd-form rd-mailform" method="POST"
                            action="{{ route('contact.submit') }}" data-parsley-validate>
                            @csrf

                            <div id="contactAlert"></div>

                            <div class="row row-20 gutters-20">
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-name" type="text" name="name"
                                            required data-parsley-required-message="Please enter your name.">
                                        <label class="form-label" for="contact-name">Your Name*</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                            required data-parsley-type="email"
                                            data-parsley-required-message="Please enter your email address.">
                                        <label class="form-label" for="contact-email">Your E-mail*</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone"
                                            required data-parsley-required-message="Please enter your phone number.">
                                        <label class="form-label" for="contact-phone">Your Phone*</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-company" type="text"
                                            name="company">
                                        <label class="form-label" for="contact-company">Company Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-subject" type="text" name="subject"
                                            required data-parsley-required-message="Please enter a subject.">
                                        <label class="form-label" for="contact-subject">Subject*</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-location" type="text"
                                            name="location" required
                                            data-parsley-required-message="Please enter your location.">
                                        <label class="form-label" for="contact-location">Location*</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">Message*</label>
                                        <textarea class="form-input textarea-lg" id="contact-message" name="message_body" required
                                            data-parsley-required-message="Please enter your message."></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label>
                                        <input type="checkbox" name="consent" value="1" required
                                            data-parsley-required-message="Please accept before submitting.">
                                        I consent to Aurora Oil and Gas Ltd contacting me regarding this enquiry.
                                    </label>
                                </div>
                            </div>

                            <button id="contactBtn" class="button button-secondary button-winona" type="submit">
                                Send Message
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-contacts">
                            <div class="row row-30">
                                <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                    <p class="aside-contacts-title">Phone</p>
                                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                        <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                        <div class="unit-body"><a class="phone" href="tel:+44XXXXXXXXXX">+44 (0)
                                                XXXX XXX XXX</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                    <p class="aside-contacts-title">E-mail</p>
                                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                        <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                        <div class="unit-body"><a class="mail"
                                                href="mailto:info@auroraoil.co.uk">info@auroraoil.co.uk</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                    <p class="aside-contacts-title">Company</p>
                                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                        <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                        <div class="unit-body">
                                            <p class="mb-1">Registered in England &amp; Wales</p>
                                            <p class="mb-0">Company No: 16379620</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Footer-->
        @include('partials.footer')
    </div>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>

    <!-- Javascript (IMPORTANT: use url() so scripts always load) -->
    <script src="{{ url('js/core.min.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>

<script>
    $(function () {
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            let form = $(this);

            if (!form.parsley().isValid()) {
                form.parsley().validate();
                return;
            }

            $('#contactBtn').prop('disabled', true).text('Sending...');
            $('#contactAlert').html('');

            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: form.serialize(),
                success: function (response) {
                    $('#contactAlert').html(`
                        <div class="alert alert-success">
                            ${response.message}
                        </div>
                    `);

                    form[0].reset();
                    form.parsley().reset();
                },
                error: function (xhr) {
                    let message = 'Something went wrong. Please try again.';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    }

                    $('#contactAlert').html(`
                        <div class="alert alert-danger">
                            ${message}
                        </div>
                    `);
                },
                complete: function () {
                    $('#contactBtn').prop('disabled', false).text('Send Message');
                }
            });
        });
    });
</script>

</body>

</html>
