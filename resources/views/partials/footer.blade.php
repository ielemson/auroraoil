<footer class="section footer-classic context-dark">
            <div class="footer-classic-content">
                <div class="container">
                    <div class="row row-50 row-lg-0 g-0">

                        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                            <div class="footer-classic-header">
                                <h6 class="footer-classic-title">Quick links</h6>
                            </div>
                            <div class="footer-classic-body">
                                <ul class="footer-classic-list d-inline-block d-sm-block">
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>

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
                                        href="{{ url('/contact') }}">Request a quote</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 position-static">
                            <div class="footer-classic-gmap">
                                <div class="google-map-container" data-center="London, United Kingdom" data-zoom="5"
                                    data-icon="{{ url('images/gmap_marker.png') }}"
                                    data-icon-active="{{ url('images/gmap_marker_active.png') }}" data-styles="[]">
                                    <div class="google-map"></div>
                                    <ul class="google-map-markers">
                                        <li data-location="London, United Kingdom"
                                            data-description="Aurora Oil & Gas Ltd"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-classic-panel">
                <div class="container">
                    <p class="rights">
                        <span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span>
                        <span>Aurora Oil &amp; Gas Ltd</span><span>.&nbsp;</span>
                        <a href="{{ url('/privacy-policy') }}">Privacy policy</a>
                    </p>
                </div>
            </div>
        </footer>