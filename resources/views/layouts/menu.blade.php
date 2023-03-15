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
                                            Our Company
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('services') ? 'active' : '' }}">
                                        <a href="{{ route('services.index') }}" style="color: #E93F33;">
                                            Our Services
                                        </a>
                                    </li>

                                    <li class="{{ request()->is('price_calculator') ? 'active' : '' }}">
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
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
