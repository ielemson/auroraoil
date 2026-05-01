<header class="section page-header">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic"
             data-layout="rd-navbar-fixed"
             data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed"
             data-md-device-layout="rd-navbar-fixed"
             data-lg-layout="rd-navbar-fixed"
             data-lg-device-layout="rd-navbar-fixed"
             data-xl-layout="rd-navbar-static"
             data-xl-device-layout="rd-navbar-static"
             data-xxl-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static"
             data-xl-stick-up-offset="150px"
             data-xxl-stick-up-offset="150px"
             data-xl-stick-up="true"
             data-xxl-stick-up="true">

            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>

            <!-- Navbar Panel -->
            <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle"
                        data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                    <span></span>
                </button>

                <div class="rd-navbar-brand">
                    <a class="brand" href="{{ route('home') }}">
                        <img class="brand-logo-dark"
                             src="{{ asset('images/logo.png') }}"
                             alt="Aurora Oil & Gas Ltd"
                             width="223"
                             height="60" />
                    </a>
                </div>
            </div>

            <div class="rd-navbar-right">
                <div class="rd-navbar-main rd-navbar-nav-wrap">

                    <!-- Right Info -->
                    <div class="rd-navbar-main-right">
                        <ul class="rd-navbar-contacts">
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left">
                                        <span class="icon mdi mdi-phone"></span>
                                    </div>
                                    <div class="unit-body">
                                        <a class="phone" href="tel:+44XXXXXXXXXX">
                                            +44 (0) XXXX XXX XXX
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left">
                                        <span class="icon mdi mdi-map-marker"></span>
                                    </div>
                                    <div class="unit-body">
                                        <a class="address" href="#">
                                            Registered in England &amp; Wales
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Main Nav -->
                    <div class="rd-navbar-main-left">
                        <ul class="rd-navbar-nav">

                            {{-- Home --}}
                            <li class="rd-nav-item {{ Route::is('home') ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('home') }}">Home</a>
                            </li>

                            {{-- About --}}
                            <li class="rd-nav-item {{ request()->is('about') ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ url('/about') }}">About Us</a>
                            </li>

                            {{-- Services --}}
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu 
                                {{ request()->is('services*') ? 'active' : '' }}">

                                <a class="rd-nav-link" href="javascript:;">
                                    Services
                                </a>
                                <span class="rd-navbar-submenu-toggle"></span>

                                <ul class="rd-menu rd-navbar-dropdown">
                                    @foreach ($services as $item)
                                        <li class="rd-dropdown-item">
                                            <a class="rd-dropdown-link 
                                                {{ request()->is('services/'.$item->slug) ? 'active' : '' }}"
                                                href="{{ route('services.show', $item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            {{-- Partnerships --}}
                            <li class="rd-nav-item">
                                <a class="rd-nav-link" href="#partnerships">Partnerships</a>
                            </li>

                            {{-- Contact --}}
                            <li class="rd-nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ url('/contact') }}">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <!-- Aside -->
                <div class="rd-navbar-aside rd-navbar-collapse">
                    <div class="rd-navbar-info">

                        <article class="box-icon-minimal">
                            <div class="unit align-items-center unit-spacing-sm">
                                <div class="unit-left">
                                    <div class="icon linearicons-trophy2"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="box-icon-minimal-title">Corporate Standard</div>
                                    <p class="box-icon-minimal-text">Governance &amp; Discipline</p>
                                </div>
                            </div>
                        </article>

                        <article class="box-icon-minimal">
                            <div class="unit align-items-center unit-spacing-xxs">
                                <div class="unit-left">
                                    <div class="icon linearicons-medal-empty"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="box-icon-minimal-title">Registered</div>
                                    <p class="box-icon-minimal-text">England &amp; Wales</p>
                                </div>
                            </div>
                        </article>

                        <article class="box-icon-minimal">
                            <div class="unit align-items-center unit-spacing-xs">
                                <div class="unit-left">
                                    <div class="icon linearicons-receipt"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="box-icon-minimal-title">Company No.</div>
                                    <p class="box-icon-minimal-text">16379620</p>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>

            </div>
        </nav>
    </div>
</header>