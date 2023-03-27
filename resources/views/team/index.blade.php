@extends('layouts.main')
@section('title', '- Team')
@section('content')

    <br>
    <section class="services-area delivery-bg pt-110 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>Our Team Members</h2>
                        <p>
                            Meet Our Professional Experienced Team
                        </p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row">

                    @foreach ($teams as $team)
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-10">
                            <div class="s-single-services mb-50"
                                style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; padding: 20px;">
                                <div class="services-thumb mb-25">
                                    <img src="{{ $team->photo }}" class="" alt="images"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;" />
                                </div>
                                <div class="s-services-content">
                                    <h6>
                                        {{ $team->name ?? '' }}
                                    </h6>
                                    <h3>{{ $team->position ?? '' }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
