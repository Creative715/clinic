@extends('layouts.app', ['title' => "$news->title", 'description' => "$news->description"])
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
                                    href="{{ route('news') }}">Новини</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $news->title }}</li>
                        </ol>
                    </nav>
                    <h2>{{ $news->title }}</h2>

                    <div class="hr_blue"></div>
                    Додано: {{ $news->createdAtForHumans() }}
                    <div class="my-5"></div>
                </div>
                <div class="col-12 col-md-6 text-center"><img class="img-fluid" src="{{ asset('img/healing.jpg') }}"
                                                              alt="{{ $news->title }}" title="{{ $news->title }}"></div>
            </div>
        </div>
    </section>
    <section id="page" class="page" style="min-height: 800px">
        <div class="container">
            <div class="row">
                <a href="{{ url('/ua/privatna-shvidka-dopomoga') }}" type="button"
                   class="btn btn-success py-3 text-uppercase"><h4 style="color: #fff">Приватна швидка допомога <i
                            class="fa-solid fa-hand-point-right"></i> +380970817777</h4></a>
                <div class="my-5"></div>
                <h3> {{ $news->title }}</h3>
                <img data-src="{{ $news->img }}" src="{{ asset('/img/200.gif') }}" class="img-thumbnail" title="{{ $news->title }}"
                     alt="{{ $news->title }}">
                <p class="lead"> {!! $news->content !!}</p>
            </div>
        </div>
    </section>
    @include('app.includes.call_us')
    @include('app.includes.footer')
@endsection
