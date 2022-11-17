<form method="POST" action="{{ route('send') }}">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Як вас звати?</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Іван Кравченко">
        <label for="datepicker" class="form-label">Зручна дата</label>
        <div class="input-group date" id="datepicker">
            <input placeholder="01.01.2022" type="text" name="date" class="form-control">
            <span class="input-group-append">
                            <span class="input-group-text bg-white d-block">
                                <i style="font-size: 43px;" class="fa fa-calendar"></i>
                            </span>
                        </span>
        </div>
        <label for="phone" class="form-label">Ваш номер телефону</label>
        <input type="tel" name="phone" id="phone" class="form-control" placeholder="+38(_ _) _ _ _ - _ _ - _ _">
        <label for="massage" class="form-label">Що вас турбує?</label>
        <textarea class="form-control" name="massage" id="massage" cols="30" rows="5"
                  placeholder="Опишіть симптоми або напишіть до якого лікаря ви хочете потрапити ..."></textarea>
        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input"
               required>
        <label for="exampleFormControlInput1" class="form-label">Я згоден на <a href="#">обробку персональних даних</a></label>
        <button style="width: 100%;" class="btn btn-lg btn-success btn-main" href="#">Записатися</button>
    </div>
</form>
