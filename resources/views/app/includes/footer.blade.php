<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('/') }}"><img src="{{ asset('img/LOGO2.webp') }}" alt="Приватна клініка Healing"
                                              title="приватна клініка Healing"></a><br><br>
                <p class="small">2022, &copy; приватна клініка “Healing"</p>
            </div>
            <div class="col-md-3">
                <h3>Послуги</h3>

                <ul class="list-group list-group-flush">
                    @foreach($services as $service)
                        <li class="list-group-item"><a
                                href="{{ route('page', $service->slug) }}"> {{ $service->title }}</a></li>
                    @endforeach
                </ul>

            </div>
            <div class="col-md-3">
                <h3>Консультація</h3>
                <ul class="list-group list-group-flush">
                    @foreach($consults as $consult)
                        <li class="list-group-item"><a
                                href="{{ route('page', $consult->slug) }}"> {{ $consult->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Про нас</h3>
                <ul class="list-group list-group-flush">
                    @foreach($abouts as $about)
                        <li class="list-group-item"><a href="{{ route('page', $about->slug) }}"> {{ $about->title }}</a>
                        </li>
                    @endforeach
                    <li class="list-group-item"><a class="dropdown-item" href="{{ route('doctors') }}">Лікарі</a></li>
                    <li class="list-group-item"><a class="dropdown-item" href="{{ route('news') }}">Новини</a></li>
                    <li class="list-group-item"><a href="#call_us">Контакти</a></li>
                </ul>
                <button onclick="topFunction()" id="toTop" title="До верху"><i class="fa-solid fa-arrow-up fa-2x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- hit.ua -->
    <a href='http://hit.ua/?x=23831' target='_blank'>
        <script>
            Cd = document;
            Cr = "&" + Math.random();
            Cp = "&s=1";
            Cd.cookie = "b=b";
            if (Cd.cookie) Cp += "&c=1";
            Cp += "&t=" + (new Date()).getTimezoneOffset();
            if (self != top) Cp += "&f=1";
        </script>
        <script>
            if (navigator.javaEnabled()) Cp += "&j=1";
        </script>
        <script>
            if (typeof (screen) != 'undefined') Cp += "&w=" + screen.width + "&h=" +
                screen.height + "&d=" + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth);
        </script>
        <script>
            Cd.write("<img src='//c.hit.ua/hit?i=23831&g=0&x=2" + Cp + Cr +
                "&r=" + escape(Cd.referrer) + "&u=" + escape(window.location.href) +
                "' border='0' wi" + "dth='1' he" + "ight='1'/>");
        </script>
        <noscript>
            <img src='//c.hit.ua/hit?i=23831&amp;g=0&amp;x=2' alt="stat"/>
        </noscript>
    </a>
    <!-- / hit.ua -->
</footer>

