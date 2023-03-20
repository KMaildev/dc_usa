@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')

    <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
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
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>support</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="support-area support-bg pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>Get In Touch</h2>
                        <p style="text-align: justify;">
                            We welcome any inquiries or favorable feedback from you. You may submit in your inquiries via
                            our web form below, or alternatively, you may either email us at
                            <a href="mailto:contact@dcpyittinehtaungusa.com">
                                contact@dcpyittinehtaungusa.com
                            </a>
                            . We
                            will try our very best to reply you as soon as possible.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="support-form">
                        <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Name <small>*</small></label>
                                        <input class="form-control" type="text" value="{{ old('name') }}"
                                            placeholder="Your Name*" name="name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Email <small>*</small></label>
                                        <input class="form-control" name="email" type="text"
                                            value="{{ old('email') }}" placeholder="Email Address">
                                        @error('email')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Subject <small>*</small></label>
                                        <input class="form-control" name="subject" type="text"
                                            value="{{ old('subject') }}" placeholder="Subject*">
                                        @error('subject')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input class="form-control" type="text" value="{{ old('phone') }}"
                                            placeholder="Your Phone*" name="phone">
                                        @error('phone')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Message</label>
                                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit"
                                    class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                    data-loading-text="Please wait...">Send your message</button>
                                <button type="reset"
                                    class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-area primary-bg pt-70 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon01.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>US Location</h5>
                            <span>
                                13814 Loree Lane Rockville, MD 20853
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon02.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Phone Number</h5>
                            <span>
                                <a href="tel: 1 301-448-6248">
                                    +1 301-448-6248
                                </a>
                            </span>
                            <span>
                                <a href="tel:1202 697 6601">
                                    +1 202 697 6601
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon03.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>email informing</h5>
                            <span>
                                <a href="mailto:contact@dcpyittinehtaungusa.com">
                                    contact@dcpyittinehtaungusa.com
                                </a>
                                <a href="mailto:info@dcpyittinehtaungusa.com">
                                    info@dcpyittinehtaungusa.com
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon04.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Yangon</h5>
                            <span>
                                <a href="tel:09 882 528 882">
                                    09 882 528 882
                                </a>
                            </span>
                            <span>
                                <a href="tel:09 420 617 436">
                                    09 420 617 436
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3097.049551403412!2d-77.09683378463161!3d39.08256904361285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7ce0e9b3a5da5%3A0x1b581fb4b1f93ae0!2s13814%20Loree%20Ln%2C%20Rockville%2C%20MD%2020853%2C%20USA!5e0!3m2!1sen!2smm!4v1677936215596!5m2!1sen!2smm"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
