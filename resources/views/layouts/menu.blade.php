<header>
    <div id="header-sticky" class="main-header transparent-header" style="background-color: white;">
        <div class="container-fulid header-container-p">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 col-md-2">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('data/weblogo.jpg') }}" class="mobile-logo logo-sticky-none" alt="Logo"
                            style="width: 78%">
                    </a>

                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('data/weblogo.jpg') }}" class="mobile-logo s-logo-none" alt="Logo"
                            style="width: 78%">
                    </a>
                </div>

                <div class="col-lg-10 col-md-10">
                    <div class="menu-area">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>

                                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                                        <a href="{{ route('welcome') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ပင်မစာမျက်နှာ
                                            @else
                                                Home
                                            @endif
                                        </a>
                                    </li>


                                    <li class="{{ request()->is('about') ? 'active' : '' }}">
                                        <a href="javascript:void(0)" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ကုမ္ပဏီအကြောင်း
                                            @else
                                                About Us
                                            @endif
                                        </a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    @if (session('key') == 'mm')
                                                        ကျွန်ုပ်တို့၏ကုမ္ပဏီအကြောင်း
                                                    @else
                                                        About of Our Company
                                                    @endif
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('team.index') }}">
                                                    @if (session('key') == 'mm')
                                                        ကျွန်ုပ်တို့၏အဖွဲ့သားများ
                                                    @else
                                                        Our Team Members
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="{{ request()->is('services') ? 'active' : '' }}">
                                        <a href="{{ route('services.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ဝန်ဆောင်မှုများ
                                            @else
                                                Our Services
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('price_calculator') ? 'active' : '' }}">
                                        <a href="{{ route('price_calculator.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                စျေးနှုန်းတွက်ရန်
                                            @else
                                                Calculator
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('news') ? 'active' : '' }}">
                                        <a href="{{ route('news.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                သတင်း
                                            @else
                                                News
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('activities') ? 'active' : '' }}">
                                        <a href="{{ route('activities.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                လှုပ်ရှားမှုများ
                                            @else
                                                Activities
                                            @endif
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact.index') }}" style="color: #E93F33;">
                                            @if (session('key') == 'mm')
                                                ဆက်သွယ်ရန်
                                            @else
                                                Contact Us
                                            @endif
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn">

                            <a href="{{ route('set_eng') }}">
                                <img src="https://www.dare-dragon.com//data/us.gif" alt=""
                                    style="width: 45px; height: auto; padding: 2px;">
                            </a>

                            <a href="{{ route('set_mm') }}">
                                <img src="https://www.dare-dragon.com//data/mm.png" alt=""
                                    style="width: 43px; height: auto; padding: 2px;">
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
