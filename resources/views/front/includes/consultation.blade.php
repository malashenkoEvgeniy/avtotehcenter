

<form action="{{route('sendForm')}}" method="post" class="form-consultation form-consultation-none ">
    {!! csrf_field() !!}
    <legend class="consultation-title">Оставить заявку</legend>
    <div class="consultation-wrap">
        <div class="form-item">
            <input id="popup_name" type="text" name="name" placeholder="Введите имя">
        </div>
        <div class="form-item">
            <input type="text" placeholder="Телефон" name="phone" id="popup_phone">
        </div>
        <div class="form-item">
            <input type="hidden" name="page" value="{{url()->full()}}">
            <textarea name="body" id="body" cols="30" rows="10" placeholder="Введите сообщение" class="consultation-text"></textarea>
        </div>
        <button class="btn-consultation">Отправить</button>
    </div>
    <button class="btn-consultation-close">
        <img src="{{ asset('assets/front/svg/close.svg') }}" alt="">
    </button>
</form>
