@extends('layouts.app', ['title' => "Відгуки про клініку Хілінг", 'description' => 'Healing – сучасна клініка ортопедії, травматології та нейрохірургії'])
@section('content')
    @include('app.includes.header')
    <section id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('main') }}">Головна</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Відгуки про клініку Хілінг</li>
                        </ol>
                    </nav>
                    <h2>Відгуки про клініку Healing</h2>
                    <div class="hr_blue"></div>
                    <p class="lead">Приватна клініка «Healing» співпрацює з найкращими спеціалістами своєї справи, створена з урахуванням успішного досвіду світової медицини, для надання професійної допомоги пацієнтам з травмами та захворюваннями опорно-рухового апарату та супутньою патологією.
                        Healing – сучасна клініка ортопедії, травматології та нейрохірургії </p>
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
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
                <a href="{{ url('/ua/privatna-shvidka-dopomoga') }}" type="button"
                   class="btn btn-success py-3 text-uppercase"><h4 style="color: #fff">Приватна швидка допомога <i
                            class="fa-solid fa-hand-point-right"></i> +380970817777</h4></a>
                <div class="my-1"></div>
                <div class="col col-md-12">
                    @foreach($testimonials as $testimonial)
                        <h2>{{ $testimonial->name }}</h2>
                        Додано: {{ $testimonial->createdAtForHumans() }}
                        <p class="lead">{!! $testimonial->getBodyPreview() !!}</p>
                        <a href="{{ route('testimonial.more', $testimonial->slug) }}"
                           class="btn btn-info">Докладніше</a>
                    @endforeach
                        <div class="mx-auto my-4" style="width: max-content">{{ $testimonials->links() }}</div>
                </div>
            </div>
            <div class="my-2">
                <hr>
            </div>
            <h2>Залиште відгук про нашу клініку</h2>
            <form method="POST" action="{{ route('testimonial-send') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ваше ім'я">
                    <textarea class="form-control" name="body" id="body" cols="30" rows="5" placeholder="Опишіть свої враження від перебування в нашій клініці ..."></textarea>
                    <button style="width: 100%;" class="btn btn-lg btn-success btn-main" href="#">Надіслати відгук</button>
                </div>
            </form>
        </div>
    </section>
    @include('app.includes.call_us')
    @include('app.includes.footer')
@endsection
