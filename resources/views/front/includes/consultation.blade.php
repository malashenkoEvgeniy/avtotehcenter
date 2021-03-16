<div class="consultation__block">
    <form action="{{route('sendForm')}}" method="post" class="consultation__form">
        <h3 class="form__title">@lang('main.form.consultation2')</h3>
        <div class="input-group_2">
            <input type="text" class="input" name="name" placeholder="@lang('main.form.input_name')" required>
            <input type="text" class="input" name="phone" placeholder="@lang('main.form.input_phone')" required>
        </div>
        {!! csrf_field() !!}
        <input type="hidden" name="page" value="{{url()->full()}}">
        <button type="submit" class="button btn_consultation">@lang('main.form.send')</button>
    </form>
</div>
