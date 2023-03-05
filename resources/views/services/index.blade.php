@extends('layouts.main')
@section('title', '- Price Calculator')
@section('content')

    <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg"
        style="background-image: url({{ asset('data/service_banner.jpeg') }})">
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
                                    Our Services
                                </li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>
                            Our Services
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


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


    <section id="features" class="features">
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
                        <h2>International Cargo Service</h2>
                        <h6>
                            International shipping from Myanmar.
                        </h6>
                    </div>
                    <p style="text-align: justify">
                        D.C Pyit Tine Htaung’s Sale Service generously offers customers with tasty Asian foods such as dried
                        fishes, prawns and many other groceries. Authentic Myanmar foods prepared by popular chefs are also
                        available in stock or pre-order.
                    </p>
                    <br>
                    <a href="{{ route('contact.index') }}" class="btn red-btn">
                        Contact Us
                    </a>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('data/s2.jpeg') }}" alt="img"
                        style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
                </div>
            </div>





            <div class="py-5 row gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">

                <div class="col-md-6">
                    <img src="{{ asset('data/s3.jpeg') }}" alt="img"
                        style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
                </div>

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


            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
