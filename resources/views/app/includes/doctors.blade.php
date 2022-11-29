<section class="intro">
    <div class="container">
        <h2 class="text-center">Фахівці центру</h2>
        <div class="hr_blue" style="margin: 0 auto;"></div>
        <p class="lead">
            У нашому центрі працюють лікарі з багаторічним досвідом роботи. Більшість з них — члени
            всеукраїнських <br> та міжнародних асоціацій.
        </p>
    </div>
</section>
<section id="doctors" class="doctors">
    <div class="container">
        <div class="row">
            @foreach($doctors as $doctor)
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ ($doctor->img ?? '/img/no-image.jpg') }}" class="card-img-top"
                                 title="{{ $doctor->name }}"
                                 alt="{{ $doctor->name }}">
                            <h3 class="card-title">{{ $doctor->name }}</h3>
                            <h4>Спеціальність: {{ $doctor->speciality }}</h4>
                            <p class="card-text">{!! $doctor->getContentPreview() !!}</p>
                            <a href="{{ route('doctors.more', $doctor->slug) }}"
                               class="btn btn-info">Докладніше</a>
                        </div>
                    </div>
                    <div class="my-3"></div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-5">
            <a href="{{ route('doctors') }}" class="btn btn-success col col-md-4 text-uppercase">всі фахівці
                центру <i class="fa-solid fa-align-left"></i></a>
        </div>
    </div>
</section>
<section id="partners" class="partners">
    <div class="container">
        <div class="row">
            <div class="col col-md-5">
                <h2>Партнери</h2>
                <div class="hr_blue"></div>
                <p class="lead">Наш партнер — <a target="_blank" href="https://clinicbeletage.de/">Clinic
                        Bel Etage</a>, Дюсельдорф, Німеччина. Спеціалізація — ортопедія, травматологія,
                    нейрохірургія. Проводять онлайн консультації, оперативні втручання на базі клініки.</p>
            </div>
            <div class="col col-md-7">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/img/part_img01.png') }}" class="card-img-top"
                                 alt="Партнери клініки Healing">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/img/image_133.png') }}" class="card-img-top" alt="Наш партнер — Clinic
                            Bel Etage, Дюсельдорф, Німеччина.">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
