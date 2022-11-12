@extends('layouts.app', ['title' => "Новини медицини", 'description' => 'Найсвіжіші новини медицини в Україні та світі'])
@section('content')
    @include('app.includes.header')
    <section id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('main') }}">Головна</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Новини медицини</li>
                        </ol>
                    </nav>
                    <h2>Новини медицини</h2>
                    <div class="hr_blue"></div>
                    <p class="lead">Найсвіжіші новини медицини в Україні та світі</p>
                </div>
                <div class="col-12 col-md-6 text-center"><img class="img-fluid" src="{{ asset('img/healing.jpg') }}"
                                                              alt="Новини медицини - клінікa Хілінг"
                                                              title="Новини медицини - клінікa Хілінг"></div>

            </div>
        </div>
    </section>
    @include('app.includes.news')
    @include('app.includes.call_us')
    @include('app.includes.footer')
@endsection
