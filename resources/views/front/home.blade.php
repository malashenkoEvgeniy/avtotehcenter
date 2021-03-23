@extends('front.layout')

<link rel="stylesheet" href="{{ asset('assets/front/css/slider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/css/consultation.css') }}">
@section('links')

@endsection
@section('content')
    <section>
        <div class="tagline">
            <div class="variable1 slider" id="main-bg-slider">
                @if(count($slider)>0)
                    @foreach($slider as $elem)
                        @if($elem->is_video == 1)
                            <div class="tagline-content">
                                <video loop="loop" autoplay="autoplay" muted="muted" playsinline preload="auto">
                                    <source src="{{$elem->url}}" type="video/mp4">
                                </video>
                            </div>
                        @else
                            <div class="tagline-content">
                                <img src="{{$elem->url}}">
                            </div>
                        @endif
                    @endforeach
                @else
                <div class="tagline-content">
                    <img src="{{$page->banner}}">
                </div>
                @endif
            </div>
            <h1>{{$page->translate()->title}}</h1>

            </div>

        <div class="slider-nav">
            @foreach($slider as $elem)

                <div class="slider-nav__item"></div>

            @endforeach
        </div>
    </section>
    <section class="catalog-equipment">
        <h2 class="catalog-equipment-header">
            <span class="header-border">Каталог  Спецтехники</span>
        </h2>
        <ul class="catalog-equipment-list">
            @foreach($categories as $category)
            <li class="catalog-equipment-item">
                <a href="{{ LaravelLocalization::localizeUrl(route('special_equipment', ['slug'=>$category->slug]))}}" class="catalog-equipment-link">
                    <span class="catalog-equipment-number">{{count($category->type_model)}}</span>
                    <img src="{{$category->images}}" alt="catalog img" class="catalog-equipment-link-img">
                    <h3 class="catalog-equipment-link-header">{{$category->translate()->title}}</h3>
                </a>
            </li>
            @endforeach
        </ul>
    </section>
    <section class="scheme-work">
        <h2 class="scheme-work-header">
            <span class="header-border">Схема работы</span>
        </h2>
        <ul class="scheme-work-list">
            <li class="scheme-work-item">
                <div class="scheme-work-description">Консультация</div>
                <div class="scheme-work-number">1</div>
            </li>
            <li class="scheme-work-item">
                <div class="scheme-work-number">2</div>
                <div class="scheme-work-description">Просчет стоимости</div>
            </li>
            <li class="scheme-work-item">
                <div class="scheme-work-description">Доставка спецтехники</div>
                <div class="scheme-work-number">3</div>
            </li>
            <li class="scheme-work-item">
                <div class="scheme-work-number scheme-work-number-last">4</div>
                <div class="scheme-work-description">Акт выполненных работ</div>
            </li>
        </ul>
        <form action="{{route('sendForm')}}" method="post" class="scheme-work-form">
            {!! csrf_field() !!}
            <legend class="scheme-work-legend">Не нашли что искали – или нужна косультация?</legend>

            <div class="scheme-work-inputs mobile-versia">
                <input type="text" class="scheme-work-input" name="name" placeholder="Введите имя">
                <input type="text" class="scheme-work-input" name="phone" placeholder="E-mail / Телефон">
            </div>

            <textarea  id="" name="body" cols="30" rows="10" class="col-sm-12 scheme-work-textarea" placeholder="Введите сообщение"></textarea>
            <input type="hidden" name="page" value="{{url()->full()}}">
            <div class="">
                <button class="col-sm-2 scheme-work-btn">Отправить</button>
            </div>
        </form>
        @include('front.includes.form_success_alert')
    </section>
    <section class="our-clients">
        <h2 class="our-clients-header">
            <span class="header-border">Наши клиенты</span>
        </h2>
        <div class="regular slider">
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client1.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client2.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client3.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client4.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client5.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client6.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client3.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client4.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client5.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="{{asset('assets/front/img/client/client6.png')}}" alt="client" class="our-clients-img">
                </a>
            </div>
        </div>
    </section>
    <section class="seo">
          {{$page->translate()->body}}
    </section>
    @include('front.includes.consultation')
    @include('front.includes.form_success_alert')
@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/main-page.js') }}"></script>
    <script>
        $(document).ready(function() {

            $(".variable1").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                dots: false,
                arrows: false,
                centerMode: true
                // focusOnSelect: true
            });

            $('.slider-nav').slick({
                focusOnSelect: true,
                arrows: false,
                dots: true,
                asNavFor: '.slider',
            });

        });
        function toggleFormSuccessAlert(){
            $('.success').fadeIn();
            setTimeout(function(){
                $('.success').fadeOut();
                $('.form-consultation input[type=text], .form-consultation textarea').val('');
            },3000);
        }

        $('.scheme-work-form').submit(function(e){
            e.preventDefault();

            let url = $(this).attr('action');
            let method = $(this).attr('method');
            let data = $(this).serialize();

            $.ajax({
                method: method,
                url: url,
                data : data
            }).done(function(){
                toggleFormSuccessAlert();
            });
        });


    </script>
@endsection

