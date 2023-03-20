@extends('layouts.main')
@section('title', '- Home')
@section('content')

    <section id="category-section" class="s-category-area">
        <div class="container">
            <div class="s-category-wrap">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <a href="javascript:void(0)" class="s-single-cat mb-30">
                            <div class="s-cat-icon">
                                <i class="flaticon-cruise"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5>Sea Freight</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="javascript:void(0)" class="s-single-cat mb-30">
                            <div class="s-cat-icon">
                                <i class="flaticon-air-freight"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5>Air Freight</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="javascript:void(0)" class="s-single-cat mb-30">
                            <div class="s-cat-icon">
                                <i class="flaticon-delivery-1"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5>Insurance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="javascript:void(0)" class="s-single-cat mb-30">
                            <div class="s-cat-icon">
                                <i class="flaticon-package"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5>Forwarding</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="extra-features ef-md-padding pb-115 fix pt-65" id="category-section">
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


    <section class="extra-features ef-md-padding" id="category-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/company/8.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 600px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/company/9.jpg') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 600px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 py-5">
                    <div class="row align-items-center">
                        <div class="single-delivery-services mb-70 pr-75">
                            <div class="ds-icon order-0 order-md-2">
                                <img src="{{ asset('assets/img/icon/ds_icon01.png') }}" alt="icon">
                            </div>
                            <div class="ds-content text-center text-sm-left text-md-right">
                                <h5>Cargo Delivery</h5>
                                <p>
                                    Shipping goods from the United States to Myanmar.
                                </p>
                            </div>
                        </div>
                        <div class="single-delivery-services mb-70 pr-75">
                            <div class="ds-icon order-0 order-md-2">
                                <img src="{{ asset('assets/img/icon/ds_icon02.png') }}" alt="icon">
                            </div>
                            <div class="ds-content text-center text-sm-left text-md-right">
                                <h5>
                                    International Delivery Services
                                </h5>
                                <p>
                                    International shipping from Myanmar.
                                </p>
                            </div>
                        </div>
                        <div class="single-delivery-services mb-70 pr-75">
                            <div class="ds-icon order-0 order-md-2">
                                <img src="{{ asset('assets/img/icon/ds_icon03.png') }}" alt="icon">
                            </div>
                            <div class="ds-content text-center text-sm-left text-md-right">
                                <h5>Shopper</h5>
                                <p>
                                    Buying products from the United States and Myanmar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="fact-area position-relative py-5">
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


    <section class="services-area delivery-bg pt-110 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>
                            Our Services
                        </h2>
                        <p>
                            You expect things done quickly, efficiently, and affordably. Businesses can no longer
                            wait overnight for a critical package or essential supplies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#">
                                    <img src="{{ asset('data/1.jpeg') }}" alt="img"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping-and-delivery"></i>
                                </div>
                                <h3>
                                    <a href="#">
                                        Cargo Service
                                    </a>
                                </h3>
                                <span>
                                    Shipping goods from the United States to Myanmar.
                                </span>
                                <p>
                                    D.C Pyit Tine Htaung Cargo service provides quality shipments of goods for customers
                                    in
                                    U.S., Asia and beyond.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#">
                                    <img src="{{ asset('data/2.jpeg') }}" alt="img"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping"></i>
                                </div>
                                <h3>
                                    <a href="#">
                                        International Delivery Services
                                    </a>
                                </h3>
                                <span>
                                    International shipping from Myanmar.
                                </span>
                                <br>
                                <p>
                                    D.C Pyit Tine Htaung Sale service provides customers in U.S. and Asia with varieties of
                                    goods.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#">
                                    <img src="{{ asset('data/3.jpeg') }}" alt="img"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <h3>
                                    <a href="#">Shopper</a>
                                </h3>
                                <span>
                                    Buying products from the United States and Myanmar.
                                </span>
                                <p>
                                    D.C Pyit Tine Htaung Shoppers service provides customers in U.S., Asia and beyond with
                                    access to their favorite stores online and in-stores.
                                </p>
                            </div>
                        </div>
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


    <section id="features" class="features pt-110">
        <div class="container">
            <div class="row gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">
                <div class="col-md-6">
                    <img src="{{ asset('data/s1.jpeg') }}" alt="img"
                        style="width: 100%; height: 500px; background-size: center; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <div class="s-section-title mb-30">
                        <h2>International Cargo Service</h2>
                        <h6>
                            Shipping goods from the United States to Myanmar.
                        </h6>
                    </div>
                    <p style="text-align: justify">
                        D.C Pyit Tine Htaung’s Cargo Service provides customers in Asia and the United States with reliable
                        logistics support. Our service includes door-to-door express delivery as well as free shipping label
                        for customers in certain locations within the United States while sending items to our office.
                    </p>
                    <br>
                    <a href="{{ route('contact.index') }}" class="btn red-btn">
                        Contact Us
                    </a>
                </div>
            </div>




            <div class="py-5 row gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">
                <div class="col-md-6">
                    <div class="s-section-title mb-30">
                        <h2>
                            Shopper
                        </h2>
                        <h6>
                            Buying products from the United States and Myanmar.
                        </h6>
                    </div>
                    <p style="text-align: justify">
                        D.C Pyit Tine Htaung’s Shopper Service provides customers with access to their choice of online and
                        in-stores such as Amazon, Walmart, Costco, Macy’s and many other premium shops. Customers are
                        responsible for providing information about purchasing items such as web link and full payment is
                        due on the day of the purchase with a 10 percent surcharge.
                    </p>
                    <br>
                    <a href="{{ route('contact.index') }}" class="btn red-btn">
                        Contact Us
                    </a>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('data/s3.jpeg') }}" alt="img"
                        style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
                </div>

            </div>
        </div>
    </section>

@endsection
