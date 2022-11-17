@extends('layouts.app', ['title' => "Лікарі клініки Хілінг", 'description' => 'В нашій клініці праціюють висококваліфіковані та досвідчені лікарі, професіонали своєї справи'])
@section('content')
    @include('app.includes.header')
    <section id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('main') }}">Головна</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Лікарі</li>
                        </ol>
                    </nav>
                    <h2>Лікарі клініки Healing</h2>
                    <div class="hr_blue"></div>
                    <p class="lead">В нашій клініці праціюють висококваліфіковані та досвідчені лікарі, професіонали
                        своєї справи</p>
                </div>
                <div class="col-12 col-md-6 text-center"><img class="img-fluid" src="{{ asset('img/healing.jpg') }}"
                                                              alt="Лікарі клініки Хілінг"
                                                              title="Лікарі клініки Хілінг"></div>

            </div>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-center my-4">
            <a href="{{ url('/ua/privatna-shvidka-dopomoga') }}" type="button"
               class="btn btn-success py-3 text-uppercase"><h4>Приватна швидка допомога <i
                        class="fa-solid fa-hand-point-right"></i> +380970817777</h4></a>
        </div>
    </div>
    @include('app.includes.doctors')
    @include('app.includes.call_us')
    @include('app.includes.footer')
@endsection
