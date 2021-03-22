

<form action="{{route('sendForm')}}" method="post" class="form-consultation form-consultation-none ">
    {!! csrf_field() !!}
    <legend class="consultation-title">@lang('main.form_consultation.submit_your_application')</legend>
    <div class="consultation-wrap">
        <div class="form-item">
            <input id="popup_name" type="text" name="name" placeholder="@lang('main.form_consultation.submit_your_application')">
        </div>
        <div class="form-item">
            <input type="text" placeholder="@lang('main.form_consultation.phone')" name="phone" id="popup_phone">
        </div>
        <div class="form-item">
            <input type="hidden" name="page" value="{{url()->full()}}">
            <textarea name="body" id="body" cols="30" rows="10" placeholder="@lang('main.form_consultation.enter_your_message')" class="consultation-text"></textarea>
        </div>
        <button class="btn-consultation">@lang('main.form_consultation.send')</button>
    </div>
    <button class="btn-consultation-close">
        <img src="{{ asset('assets/front/svg/close.svg') }}" alt="">
    </button>
</form>
