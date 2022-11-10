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
                                                              alt="Відгуки про клініку Хілінг"
                                                              title="Відгуки про клініку Хілінг"></div>

            </div>
        </div>
    </section>
    <section id="page" class="page">
        <div class="container">
            <div class="row">
                <a href="{{ url('/ua/privatna-shvidka-dopomoga') }}" type="button"
                   class="btn btn-success py-3 text-uppercase"><h4 style="color: #fff">Приватна швидка допомога <i
                            class="fa-solid fa-hand-point-right"></i> +380970817777</h4></a>
                <div class="my-1"></div>
                <div class="col-12 col-md-6">
                    @foreach($news as $new)
                        <h2>{{ $new->name }}</h2>
                        Додано: {{ $new->createdAtForHumans() }}
                        <p class="lead">{!! $new->getContentPreview() !!}</p>
                        <a href="{{ route('news.more', $new->slug) }}"
                           class="btn btn-info">Докладніше</a>
                    @endforeach
                </div>

            </div>
            <div class="my-2">
                <hr>
            </div>
        </div>
    </section>
    @include('app.includes.call_us')
    @include('app.includes.footer')
@endsection
