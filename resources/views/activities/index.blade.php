@extends('layouts.main')
@section('title', '- Activities')
@section('content')

    <div class="breadcrumb-area breadcrumb-bg t-breadcrumb-bg" style="background-image: url({{ asset('data/new.png') }});">
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
                                        လှုပ်ရှားမှုများ
                                    @else
                                        Our Company Activities
                                    @endif
                                </li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>
                            @if (session('key') == 'mm')
                                လှုပ်ရှားမှုများ
                            @else
                                Our Company Activities
                            @endif
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-area py-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($activities as $activitie)
                    <div class="col-lg-12 mb-3"
                        style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; padding: 20px;">
                        <p>
                            @if (session('key') == 'mm')
                                {!! $activitie->description_mm ?? '' !!}
                            @else
                                {!! $activitie->description_eng ?? '' !!}
                            @endif
                        </p>
                        @php
                            $values = explode(',', $activitie->images);
                        @endphp
                        <div class="row">
                            @foreach ($values as $gallery)
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="single-services mb-30">
                                        <div class="services-thumb">
                                            <img src="{{ $gallery }}" class="" alt="images"
                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;" />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
