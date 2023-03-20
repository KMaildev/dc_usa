<header>
    <div id="header-sticky" class="main-header transparent-header" style="background-color: white;">
        <div class="container header-container-p">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('data/weblogo.jpg') }}" class="mobile-logo logo-sticky-none" alt="Logo"
                                style="width: 35%">
                        </a>

                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('data/weblogo.jpg') }}" class="mobile-logo s-logo-none" alt="Logo"
                                style="width: 40%">
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="menu-area">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>

                                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                                        <a href="{{ route('welcome') }}" style="color: #E93F33;">
                                            Home
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('about') ? 'active' : '' }}">
                                        <a href="{{ route('about.index') }}" style="color: #E93F33;">
                                            About Of Our Company
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('services') ? 'active' : '' }}">
                                        <a href="{{ route('services.index') }}" style="color: #E93F33;">
                                            Our Services
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('price_calculator') ? 'active' : '' }}" hidden>
                                        <a href="{{ route('price_calculator.index') }}" style="color: #E93F33;">
                                            Price Calculator
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('news') ? 'active' : '' }}">
                                        <a href="{{ route('news.index') }}" style="color: #E93F33;">
                                            News
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact.index') }}" style="color: #E93F33;">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn">
                            <a href="#" class="btn" data-toggle="modal" data-target="#exampleModalLong">
                                <img src="{{ asset('assets/img/icon/calculator-symbols.png') }}" alt="icon">
                                Track
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>


            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content fare-rate-modal">
                        <ul class="nav nav-tabs setup-panel">
                            <li class="nav-item single-steps">
                                <a class="nav-link btn-amber" href="#step-1">
                                    TRACK & TRACE
                                </a>
                            </li>
                        </ul>
                        <form action="https://www.dhl.com/us-en/home/tracking.html" method="get" target="_blank">
                            <div class="single-setup" id="step-1">
                                <div class="fare-rate-tab-content">
                                    <div class="modal-shipping-info">
                                        <ul>
                                            <li>
                                                <div class="shipping-step-count">
                                                    <h5>A</h5>
                                                </div>
                                                <div class="shipping-address-form">
                                                    <div class="shipping-address-box form-group">
                                                        <label for="from-country-location">
                                                            Tracking number
                                                        </label>
                                                        <input type="text" required="required"
                                                            id="from-country-location"
                                                            placeholder="Enter your tracking number" name="tracking-id">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-shipping-more-list">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-map"></i>
                                                    13814 Loree Ln, Rockville, MD, United States, Maryland
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@dcpyittinehtaungusa.com">
                                                    <i class="fa fa-envelope"></i>
                                                    info@dcpyittinehtaungusa.com
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tel:09 882 528 882">
                                                    <i class="fa fa-phone-volume"></i>
                                                    09 882 528 882,
                                                </a>
                                                <a href="tel:09 420 617 436">
                                                    09 420 617 436
                                                </a>
                                            </li>

                                            <li>
                                                <a href="tel: +1 301-448-6248">
                                                    <i class="fa fa-tty"></i>
                                                    +1 301-448-6248,
                                                </a>
                                                <a href="tel:+1 202 697 6601">
                                                    +1 202 697 6601
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
