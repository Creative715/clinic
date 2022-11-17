<section id="appointment" class="appointment">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-5">
                <div class="form_appoint">
                    <div class="mb-3">
                        @include('app.includes.request')
                    </div>


                </div>
            </div>
            <div class="col-md-7">
                <h2>Запис на прийом</h2>
                <div class="hr_blue"></div>
                <p>Ми передзвонимо вам найближчим часом і уточнимо деталі візиту.</p>
                <img class="card-img rounded" data-src="{{ asset('/img/appointment.webp') }}"
                     src="{{ asset('/img/200.gif') }}" alt="Запис на прийом">
            </div>
        </div>
    </div>
</section>
<section id="call_us" class="call_us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h2>Зв'яжіться з нами</h2>
                <div class="hr_blue"></div>
                <h3><a href="tel:+38 097 081 77 77">+38 097 081 77 77</a></h3>
                <p class="lead">
                    м. Житомир, Чуднівське шосе 1 <br>
                    Графік роботи: цілодобово, без вихідних <br>
                    <a target="_blank" href="https://www.facebook.com/healing.zt.ua/"><i
                            style="color:#5cbf48;margin-top:30px;" class="fa-brands fa-facebook fa-2x"></i></a>
                </p>
            </div>
            <div class="col-12 col-md-7">
                <div class="card">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d81626.6273035469!2d28.634165!3d50.25772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8e4df42d76a3760!2z0J_QsNGA0Log0LjQvC4g0K7RgNC40Y8g0JPQsNCz0LDRgNC40L3QsA!5e0!3m2!1suk!2sus!4v1661866991798!5m2!1suk!2sus"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div id="app"></div>
</section>
