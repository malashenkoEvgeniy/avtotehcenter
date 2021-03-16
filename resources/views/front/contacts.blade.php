@extends('frontend.layout')


@section('links')
    <link rel="stylesheet" href="/frontend/css/contacts.css">
	<link rel="stylesheet" href="/frontend/css/breadcrumbs.css">
    <link rel="stylesheet" href="/frontend/css/consultation.css">
@endsection

@section('content')
    @include('frontend.includes.breadcrumbs')
<div class="contacts">
    <div class="contacts__banner">
        <h1 class="contacts__title">{{$page->translate()->title}}</h1>
        <div class="contacts__links">
            <a href="{{$contacts->viber}}" class="contacts__link" title="Мы в Viber">
                @include('frontend.svg.viber')
            </a>
            <a href="{{$contacts->telegram}}" class="contacts__link" title="Мы в Telegram">
                @include('frontend.svg.telegram')
            </a>
            <a href="{{$contacts->facebook}}" class="contacts__link" title="Мы в Facebook">
                @include('frontend.svg.facebook')
            </a>
            <a href="{{$contacts->instagram}}" class="contacts__link" title="Мы в Instagram">
                @include('frontend.svg.instagram')
            </a>
        </div>
    </div>

    <div class="info">
        <div class="info__item info__item_address">
            <p class="info__title">@lang('main.address'):</p>
            <p class="info__value">{{$contacts->translate()->address}}</p>
        </div>

        <div class="info__item info__item_phone">
            <p class="info__title">@lang('main.form.phone'):</p>
            <p class="info__value"><a href="tel:{{$contacts->phone_1}}">{{$contacts->phone_1}}</a></p>
            <p class="info__value"><a href="tel:{{$contacts->phone_2}}">{{$contacts->phone_2}}</a></p>
            <p class="info__title">Email:</p>
            <p class="info__value"><a href="mailto:{{$contacts->email}}">{{$contacts->email}}</a></p>
        </div>
    </div>
</div>



    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.6716642935244!2d35.038421915660315!3d48.46282897925076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2e0c4a111dd%3A0xa3e993a12deffa66!2z0YPQu9C40YbQsCDQodGC0LDRgNC-0LrQvtC30LDRhtC60LDRjywgMjUsINCU0L3QuNC_0YDQviwg0JTQvdC10L_RgNC-0L_QtdGC0YDQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDQ5MDAw!5e0!3m2!1sru!2sua!4v1606981253321!5m2!1sru!2sua" frameborder="0" allowfullscreen="" aria-hidden="false" class="google-map"></iframe>




    @include('frontend.includes.consultation')
@endsection
@section('scripts')
    <script src="/frontend/js/scroll_up.js"></script>
@endsection
