<div class="top-panel d-none d-sm-none d-md-block">
    <div class="container">
        <div class="row align-items-start">
            <div class="col col-md-3 col-sm-3">
                <p><i class="fa-solid fa-clock"></i> Графік роботи: цілодобово</p>
            </div>
            <div class="col col-md-3 col-sm-3">
                <p><i class="fa-solid fa-location-dot"></i> м. Житомир, Чуднівське шосе 1</p>
            </div>
            <div class="col col-md-2 col-sm-4">
                <p><a href="tel:+380970817777"><i class="fa-solid fa-phone"></i> +380970817777</a></p>
            </div>
            <div class="col col-md-3 col-sm-2">
                <div class="row">
                    <div class="col text-center"><a href="{{ url('/') }}">UA</a> / <a href="{{ route('ro') }}">RU</a>
                    </div>
                    <div class="col"><p><a target="_blank" href="https://www.facebook.com/healing.zt.ua/"><i
                                    class="fa-brands fa-facebook float-end"
                                    style="color:#fff; font-size: 22px;"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-block d-lg-none">
    <a href="tel:+380970817777"><i class="fa-solid fa-phone fa-2x phone-top"></i></a>
    <button class="openbtn" onclick="openNav()">☰</button>
</div>
<div class="container">
    <div class="row">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-2">
            <div class="col col-md-auto"><a href="{{ url('/') }}" title="Healing - приватна клініка, Житомир"><img
                        src="{{ asset('/img/LOGO1.jpg') }}" class="logo" alt="Healing - приватна клініка, Житомир"></a>
            </div>
            @include('app.includes.nav')

            <div class="col-md-8 col-lg-5 d-md-flex d-none d-sm-none">
                <a href="{{ route('child') }}" type="button"
                   class="btn btn-success py-md-2 px-md-2 px-sm-2 px-lg-4 my-md-0 my-sm-2 ">Клініка "Здорова Дитина"</a>
                <a href="#appointment" type="button" class="btn btn-info py-md-2 px-md-2 px-lg-4 px-sm-2 mx-md-3">Записатися
                    <i class="far fa-calendar-alt"></i></a>
            </div>
        </header>
    </div>
</div>
