@extends('layouts.app_ro', ['title' => "$pageros->seo_title", 'description' => "$pageros->description"])
@section('content')
    @include('app.includes.header_ro')
    <section id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('ro') }}">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $pageros->title }}</li>
                        </ol>
                    </nav>
                    <h2>{{ $pageros->seo_title }}</h2>
                    <div class="hr_blue"></div>
                    <p class="lead">{!! $pageros->intro !!}</p>
                </div>
                <div class="col-12 col-md-6 text-center"><img class="img-fluid" src="{{ $pageros->img }}" alt="{{ $pageros->seo_title }}" title="{{ $pageros->seo_title }}"> </div>
            </div>
        </div>
    </section>
    <section id="page" class="page">
        <div class="container">
                <div class="row">
                    <a href="{{ url('/ru/chastnaia-skoraia-pomosch') }}" type="button" class="btn btn-success py-3 text-uppercase"><h4 style="color: #fff">Частная скорая помощь <i class="fa-solid fa-hand-point-right"></i> +380970817777</h4></a>
                    <div class="my-1"></div>
                    @include('app.includes.content_ro')
                </div>
            <div class="row">
            <div class="my-4">{!! $pageros->price_block !!}</div>
            <div class="my-4">{!! $pageros->dot_block !!}</div>
            </div>
        </div>
    </section>
    @if ( !empty($pageros->diagnostic))
    <section id="mrt-kt" class="mrt-kt">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"><img style="margin-top: -90px" src="{{ asset('/public/img/portrait-young-medic.webp') }}" alt="МРТ КТ в Житомире"></div>
                <div class="col-md-6 align-self-center">
                    <p>{{ $pageros->diagnostic }}</p>
                    <button style="width: 100%;" type="button" class="btn btn-success btn-block py-md-2 px-md-2 px-sm-2 px-lg-4 my-md-0 my-sm-2 "><i class="fa-solid fa-location-dot"></i> м. Житомир, Чуднівське шосе 1</button>
                </div>
            </div>
        </div>
    </section>
    @endif
    @include('app.includes.call_us_ro')
    @include('app.includes.footer_ro')
@endsection

