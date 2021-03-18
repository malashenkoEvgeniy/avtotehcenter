

<form action="" class="form-consultation
form-consultation-none
">
    {!! csrf_field() !!}
    <legend class="consultatuion-title">Оставить заявку?</legend>
    <div class="consultation-block-input">
        <div class="form-item">
            <label for="popup_name">Введите имя</label>
            <input id="popup_name" type="text" placeholder="Введите имя">
        </div>
        <div class="form-item">
            <label for="popup_phone">Введите телефон</label>
            <input type="text" placeholder="Телефон" id="popup_phone">
        </div>

    </div>
    <div class="form-item">
        <label for="popup_msg">Введите сообщение</label>
        <textarea name="" id="popup_msg" cols="30" rows="10" placeholder="Введите сообщение" class="consultation-text"></textarea>
    </div>

    <button class="btn-consultation">Отправить</button>
    <button class="btn-consultation-close">
        <img src="{{ asset('assets/front/svg/close.svg') }}" alt="">
    </button>
</form>
