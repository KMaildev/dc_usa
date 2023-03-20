@extends('layouts.main')
@section('title', '- Price Calculator')
@section('content')

    <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg" style="background-image: url({{ asset('data/about.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    About Us
                                </li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>
                            About Us
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="extra-features ef-md-padding pb-115 fix pt-65">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="section-title mb-25">
                        <h6>About of Our Company</h6>
                        <h2>
                            D.C. Pyit Tine Htaung
                            <span>USA</span>
                        </h2>
                    </div>
                    <div class="extra-features-content">
                        <h5>Express delivery innovative service effective logistics solution for the delivery small cargo.
                        </h5>
                        <p style="text-align: justify">
                            “D.C. Pyit Tine Htaung USA ” is established to provide reliable, affordable
                            and hassle-free logistics services to customers around the globe.

                            <br>

                            Based in the United States, it provides logistics services for customers importing products from
                            Asia mainly Myanmar and Thailand as well as exporting American products abroad.

                            <br>

                            Import items to the United States include food products and household goods while exports range
                            from cosmetics, medicine to electronic devices.

                            <br>

                            D.C Pyit Tine Htaung Trading & Logistics Inc aims to maintain supply chain by trading goods
                            between countries while maintaining international standards and legal practice in providing
                            services.

                        </p>
                        <a href="{{ route('contact.index') }}" class="btn">
                            <i class="fa fa-map"></i>
                            Contact Us
                        </a>

                        <a href="tel:09 882 528 882" class="btn">
                            Call Now
                            <i class="fa fa-phone"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div class="extra-features-img">
                        <img src="{{ asset('data/company/5.jpg') }}" class="wow bounceInDown" data-wow-delay=".3s"
                            alt="img"
                            style="width: 100%; height: auto; background-size: center; object-fit: cover; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area delivery-bg inner-help-bg pt-110 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>
                            Company Statement
                        </h2>
                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                            small cargo. This service
                            is useful for companies various.</p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="s-single-services mb-50">
                            <div class="services-thumb mb-25">
                                <img src="{{ asset('data/mission.jpeg') }}" alt="img"
                                    style="width: 100%; height: 380px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="s-services-content">
                                <h6>
                                    D.C. Pyit Tine Htaung USA
                                </h6>
                                <h3>
                                    Our mission Statement
                                </h3>
                                <p style="text-align: justify">
                                    Our mission is to provide the highest quality services possible in today's challenging
                                    world. Ensuring delivery of your shipment on schedule is our priority and we take very
                                    seriously at every step throughout the shipping process, no matter how small or big,
                                    business or pleasure. Entrusting us with your freight is the highest compliment we
                                    always value. We sincerely believe that helping to make your job easier and your
                                    decisions cost effective is our success.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="s-single-services mb-50">
                            <div class="services-thumb mb-25">
                                <img src="{{ asset('data/value.webp') }}" alt="img"
                                    style="width: 100%; height: 380px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="s-services-content">
                                <h6>
                                    D.C. Pyit Tine Htaung USA
                                </h6>
                                <h3>
                                    Our Vision Statement
                                </h3>
                                <p style="text-align: justify;">
                                    Guided by our relentless focus on our companies’ imperatives, D.C. Pyit Tine Htaung USA
                                    will constantly strive to implement the critical initiatives required to achieve our
                                    vision. In doing this, we will deliver operational excellence in every corner of our
                                    company and meet or exceed our commitments to all customers we serve on a daily basis.
                                    All of our long-term strategies and short-term actions will be moulded by a set of core
                                    values that are shared by each and every associate.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="fact-area position-relative pt-110">
        <div class="fact-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-70">
                        <h6>Delivery Anything</h6>
                        <h2>Exclusive Cargo Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-package"></i>
                        </div>
                        <div class="fact-content">
                            <h4><span class="count">3,560</span> km</h4>
                            <h6>Package Delivered</h6>
                            <p>Express delivery is an innaiv service effective logistics solution</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <div class="fact-content">
                            <h4><span class="count">195</span></h4>
                            <h6>Countries Covered</h6>
                            <p>Express delivery is an innaiv service effective logistics solution</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-user"></i>
                        </div>
                        <div class="fact-content">
                            <h4><span class="count">456</span> k</h4>
                            <h6>Happy Customer</h6>
                            <p>Express delivery is an innaiv service effective logistics solution</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-like"></i>
                        </div>
                        <div class="fact-content">
                            <h4><span class="count">10</span> Yr</h4>
                            <h6>Year Experience</h6>
                            <p>Express delivery is an innaiv service effective logistics solution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection
