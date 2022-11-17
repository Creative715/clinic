<section id="appointment" class="appointment">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-5">
                <div class="form_appoint">
                    <div class="mb-3">
                        <form method="POST" action="{{ route('send') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Как вас зовут?</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Иван Кравченко">
                                <label for="datepicker" class="form-label">Удобная дата</label>
                                <div class="input-group date" id="datepicker">
                                    <input placeholder="01.01.2022" type="text" name="date" class="form-control">
                                    <span class="input-group-append">
                            <span class="input-group-text bg-white d-block">
                                <i style="font-size: 43px;" class="fa fa-calendar"></i>
                            </span>
                        </span>
                                </div>
                                <label for="phone" class="form-label">Ваш номер телефона</label>
                                <input type="tel" name="phone" id="phone" class="form-control"
                                       placeholder="+38(_ _) _ _ _ - _ _ - _ _">
                                <label for="massage" class="form-label">что вас беспокоит?</label>
                                <textarea class="form-control" name="massage" id="massage" cols="30" rows="5"
                                          placeholder="Опишите симптомы или напишите к какому врачу хотите обратится ..."></textarea>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                       aria-label="Checkbox for following text input" required>
                                <label for="exampleFormControlInput1" class="form-label">Я согласен на <a href="#">оброботку
                                        персональних данных</a></label>
                                <button style="width: 100%;" class="btn btn-lg btn-success btn-main" href="#">
                                    Записаться
                                </button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <div class="col-md-7">
                <h2>Запись на прием</h2>
                <div class="hr_blue"></div>
                <p>Мы перезвоним вам в ближайшее время и уточним детали визита.</p>
                <img class="card-img rounded" src="{{ asset('/img/appointment.webp') }}" alt="Запись на прием">
            </div>
        </div>
    </div>
</section>
<section id="call_us" class="call_us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h2>Свяжитесь с нами</h2>
                <div class="hr_blue"></div>
                <h3><a href="tel:+38 097 081 77 77">+38 097 081 77 77</a></h3>
                <p class="lead">
                    г. Житомир, Чудновское шоссе 1 <br>График работы: круглосуточно, без выходных <br>
                    <a target="_blank" href="https://www.facebook.com/healing.zt.ua/"><i
                            style="color:#5cbf48;margin-top:30px;"
                            class="fa-brands fa-facebook fa-2x"></i></a>
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
</section>
