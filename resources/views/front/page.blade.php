@extends('front.layout')


@section('links')
    <link rel="stylesheet" href="{{ asset('assets/front/css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/contact.css') }}">
@endsection
@section('content')
    <section class="page-banner">
        <img src="{{$page->banner}}" alt="" class="page-banner-img">
        <h2 class="banner-title-page">{{$page->translate()->title}}</h2>
    </section>
    @include('front.includes.breadcrumbs')
    @if($page->slug !== 'kontakty')
        <section class="page">{{$page->translate()->body}} </section>
        @if($page->slug == 'o-kompanii')
        <section class="certificates">
            <h3 class="certificates-title">Сертификаты</h3>
            <div class="regular slider certificates-wrapper">
                @foreach( $certificates as $certificate)
                <div class="certificate" style="margin-right: 10px;">
                    <a data-fancybox="gallery" href="{{$certificate->url}}">
                        <img src="{{$certificate->url}}" alt="certificate">
                    </a>
                </div>
                @endforeach
            </div>
        </section>
        @endif
    @else
        <div class="main-contacts-wrapper">
            <div class="main-contacts">
                <ul class="main-contacts-list">
                    <li class="main-contacts-item">
                        <div class="main-contacts-img">
                            <img src="{{ asset('assets/front/svg/contacts-phone.svg')}}" alt="">
                        </div>

                        <div class="main-contacts-values">
                            <h3 class="main-contacts-title">Телефон</h3>
                            <a href="tel:{{$contact->phone_1}}">{{$contact->phone_1}}</a>
                            <a href="tel:{{$contact->phone_2}}">{{$contact->phone_2}}</a>
                        </div>
                    </li>
                    <li class="main-contacts-item">
                        <div class="main-contacts-img">
                            <img src="{{ asset('assets/front/svg/contacts-email.svg')}}" alt="">
                        </div>

                        <div class="main-contacts-values">
                            <h3 class="main-contacts-title">E-mail</h3>

                            <a href="mailto:{{$contact->email1}}">{{$contact->email1}}</a>
                            <a href="mailto:{{$contact->email2}}">{{$contact->email2}}</a>
                        </div>
                    </li>
                    <li class="main-contacts-item">
                        <div class="main-contacts-img">
                            <img src="{{ asset('assets/front/svg/contacts-fax.svg')}}" alt="">
                        </div>

                        <div class="main-contacts-values">
                            <h3 class="main-contacts-title">Факс</h3>
                            <span>{{$contact->fax}}</span>
                        </div>
                    </li>
                    <li class="main-contacts-item">
                        <div class="main-contacts-img">
                            <img src="{{ asset('assets/front/svg/contacts-addres.svg')}}" alt="">
                        </div>

                        <div class="main-contacts-values">
                            <h3 class="main-contacts-title">Адрес</h3>
                            <div class="main-contacts-values-address">{{$contact->translate()->address}}</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2755.4481027158104!2d30.6204330157882!3d46.32079718389725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c7ceae5b60c8bf%3A0x1ce651e63a90e602!2z0YPQuy4g0JfQsNCy0L7QtNGB0LrQsNGPLCDQp9C10YDQvdC-0LzQvtGA0YHQuiwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjc4NDA!5e0!3m2!1sru!2sua!4v1615294303139!5m2!1sru!2sua"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    @endif
@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/about-us.js') }}"></script>
    <script src="{{ asset('assets/front/js/home.js') }}"></script>
@endsection

