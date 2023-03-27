@extends('layouts.main')
@section('title', '- Price Calculator')
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
                                <li class="breadcrumb-item active" aria-current="page">
                                    Price Calculator
                                </li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>
                            Price Calculator
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection
