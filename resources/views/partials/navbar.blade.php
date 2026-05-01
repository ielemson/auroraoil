  <div class="navbar-area">
      <div class="shipping-responsive-nav">
          <div class="container">
              <div class="shipping-responsive-menu">
                  <div class="logo">
                      <a href="{{ url('/') }}" aria-label="Green Energy Cornwall Ltd Home">
                          <img src="assets/img/logo.png" class="white-logo" alt="Green Energy Cornwall Ltd logo">
                          <img src="assets/img/logo-black.png" class="black-logo" alt="Green Energy Cornwall Ltd logo">
                      </a>
                  </div>
              </div>
          </div>
      </div>

      <div class="shipping-nav">
          <div class="container">
              <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="{{ url('/') }}" aria-label="Green Energy Cornwall Ltd Home">
                      <img src="assets/img/logo.png" class="white-logo" alt="Green Energy Cornwall Ltd logo">
                      <img src="assets/img/logo-black.png" class="black-logo" alt="Green Energy Cornwall Ltd logo">
                  </a>

                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a href="{{ url('/') }}" class="nav-link">Home</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('/about') }}" class="nav-link">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('services') }}" class="nav-link">Services</a>
                          </li>
                          {{-- <li class="nav-item">
                              <a href="{{ url('project') }}" class="nav-link">Projects</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('faq') }}" class="nav-link">FAQ</a>
                          </li> --}}
                          <li class="nav-item">
                              <a href="{{ url('contact') }}" class="nav-link active">Contact</a>
                          </li>
                      </ul>

                      <div class="other-option">
                          <a class="default-btn" href="{{ url('services') }}">Explore Services <span></span></a>
                      </div>
                  </div>

              </nav>
          </div>
      </div>
  </div>
