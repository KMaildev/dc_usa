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
                                    <a href="{{ route('welcome') }}">
                                        @if (session('key') == 'mm')
                                            ပင်မစာမျက်နှာ
                                        @else
                                            Home
                                        @endif
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    @if (session('key') == 'mm')
                                        ဝန်ဆောင်မှုများ
                                    @else
                                        Our Services
                                    @endif
                                </li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>
                            @if (session('key') == 'mm')
                                ဝန်ဆောင်မှုများ
                            @else
                                Our Services
                            @endif
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="features" class="features py-5">
        <div class="container">
            @foreach ($services as $service)
                <div style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; padding: 20px;"
                    class="row mb-20 gy-4 align-items-center features-item aos-init aos-animate" data-aos="fade-up">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <img src="{{ asset('data/s1.jpeg') }}" alt="img"
                            style="width: 100%; height: auto; background-size: center; object-fit: cover;">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12">
                        <div class="s-section-title mb-30">
                            <h2>
                                @if (session('key') == 'mm')
                                    {{ $service->service_title_mm ?? '' }}
                                @else
                                    {{ $service->service_title_eng ?? '' }}
                                @endif
                            </h2>
                            <h6>
                                D.C. Pyit Tine Htaung USA
                            </h6>
                        </div>
                        <p style="text-align: justify">
                            @if (session('key') == 'mm')
                                {!! $service->service_description_mm ?? '' !!}
                            @else
                                {!! $service->service_description_eng ?? '' !!}
                            @endif
                        </p>
                        <br>
                        <a href="{{ route('contact.index') }}" class="btn red-btn">
                            Contact Us
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('script')
@endsection
