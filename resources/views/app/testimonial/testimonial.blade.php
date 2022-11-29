@extends('layouts.app', ['title' => "$testimonials->name", 'description' => "$testimonials->body"])
@section('content')
    @include('app.includes.header')
    <section id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('main') }}">Головна</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('testimonial.index') }}">Відгуки</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $testimonials->name }}</li>
                        </ol>
                    </nav>
                    <h2>{{ $testimonials->name }}</h2>

                    <div class="hr_blue"></div>
                    Додано: {{ $testimonials->createdAtForHumans() }}
                    <div class="my-5"></div>
                </div>
                <div class="col-12 col-md-6 text-center"><img class="img-fluid" src="{{ asset('img/healing.jpg') }}"
                                                              alt="{{ $testimonials->name }}"
                                                              title="{{ $testimonials->name }}"></div>
            </div>
        </div>
    </section>
    <section id="page" class="page" style="min-height: 800px">
        <div class="container">
            <div class="row">
                <a href="{{ url('/ua/nevidkladna-medicna-dopomoga') }}" type="button"
                   class="btn btn-success py-3 text-uppercase"><h4 style="color: #fff">Приватна швидка допомога <i
                            class="fa-solid fa-hand-point-right"></i> +380970817777</h4></a>
                <div class="my-5"></div>
                <h3>Відгук від {{ $testimonials->name }}</h3>
                <p class="lead"> {{ $testimonials->body }}</p>
            </div>
        </div>
    </section>
    @include('app.includes.call_us')
    @include('app.includes.footer')
@endsection
