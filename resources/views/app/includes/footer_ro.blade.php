<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/"><img src="/img/LOGO2.webp" alt="Часная клиника Healing"
                                 title="приватна клініка Healing"></a><br><br>
                <p class="small">© <?= date('Y') ?> Часная клиника “Healing"</p>
            </div>
            <div class="col-md-3">
                <h3>Услуги</h3>
                <ul class="list-group list-group-flush">
                    @foreach($services1 as $service)
                        <li class="list-group-item"><a href="{{ route('pagero', $service->slug) }}"> {{ $service->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Консультация</h3>
                <ul class="list-group list-group-flush">
                    @foreach($consults1 as $consult)
                        <li class="list-group-item"><a href="{{ route('pagero', $consult->slug) }}"> {{ $consult->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <h3>О нас</h3>
                <ul class="list-group list-group-flush">
                    @foreach($abouts1 as $about)
                        <li class="list-group-item"><a href="{{ route('pagero', $about->slug) }}"> {{ $about->title }}</a></li>
                    @endforeach
                    <li class="list-group-item"><a href="#call_us">Контакт</a></li>
                </ul>
                <button onclick="topFunction()" id="toTop" title="Вверх"><i
                        class="fa-solid fa-arrow-up fa-2x"></i></button>
            </div>
        </div>
    </div>
</footer>
