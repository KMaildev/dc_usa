@extends('layouts.main')
@section('title', '- News')
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
                                    <a href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">News & Media</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Latest news</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">

                    @foreach ($news as $new)
                        <div class="single-blog-post blog-classic-post mb-60">
                            <div class="blog-thumb mb-35">
                                <a href="{{ route('news.show', $new->id) }}">
                                    <img src="{{ $new->photo }}" alt="img">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4>
                                    <a href="{{ route('news.show', $new->id) }}">
                                        {{ $new->title ?? '' }}
                                    </a>
                                </h4>

                                <p>
                                    {{ Str::limit($new->description, 200) }}
                                </p>

                                <div class="blog-classic-meta">
                                    <ul>
                                        <li class="blog-post-date">
                                            <i class="far fa-clock"></i>
                                            {{ $new->upload_date ?? '' }}
                                        </li>

                                        <li class="blog-more-read">
                                            <a href="{{ route('news.show', $new->id) }}">
                                                More Reading...
                                            </a>
                                        </li>

                                        <li class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection
