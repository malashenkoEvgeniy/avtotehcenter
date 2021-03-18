@extends('front.layout')
@section('links')
    <link rel="stylesheet" href="{{ asset('assets/front/css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/consultation.css') }}">
@endsection
@section('content')
    <section class="product-banner">
        <img src="{{$page->banner}}" alt="" class="product-banner-img">
        <h2 class="banner-title-page">{{$title_page}}</h2>
    </section>
    @include('front.includes.breadcrumbs')



    <section class="product">

        <h2 class="product-title">Тягач Terberg RT223</h2>
        <div class="product-content">
            <div class="product-images">
                <div class="vertical-center-4 slider product-main-img">
                    <a data-fancybox="gallery" href="{{$product->images}}">
                        <img src="{{$product->images}}" alt="">
                    </a>
                    @if(count($product_images))
                        @foreach($product_images as $product_image)
                            @if($product_image->is_video == 1)
                                <div class="vide-admin"  href="https://www.youtube.com/embed/{{$product_image->url}}">
{{--                                    <div class="vide-admin">--}}
                                        <iframe data-fancybox="gallery"  src="https://www.youtube.com/embed/{{$product_image->url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
{{--                                    </div>--}}
                                </div>
                            @else
                                <a data-fancybox="gallery" href="{{ $product_image->url }}">
                                    <img class="certificate-img-admin" src="{{ $product_image->url }}" alt="">
                                </a>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="vertical-center-4 slider product-secondary-img">
                    <div>
                        <img src="{{$product->images}}" alt="">
                    </div>
                    @if(count($product_images))
                        @foreach($product_images as $product_image)
                            @if($product_image->is_video == 1)
                                <div class="vide-admin">
                                    <img class="certificate-img-admin" src="https://i.ytimg.com/vi/{{$product_image->url}}/default.jpg" alt="">
                                </div>
                            @else
                                <div>
                                    <img class="certificate-img-admin" src="{{ $product_image->url }}" alt="">
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="product-content-description">
                <h3 class="description-title">Базовая информация</h3>
                <table class="description-body">
                    <tr>
                        <td class="table-first-column">Марка</td>
                        <td class="table-second-column">TERBERG</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">Год выпуска</td>
                        <td class="table-second-column">2011</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">Подъёмная сила</td>
                        <td class="table-second-column">35 т</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">Высота со сложенной мачтой</td>
                        <td class="table-second-column">3,1 м</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">Тип топлива</td>
                        <td class="table-second-column">Дизель</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">Двигатель</td>
                        <td class="table-second-column">Вольво, TAD750VE (Euromot IIIA)</td>
                    </tr>
                </table>
                <button class="product-description-link">Узнать стоимость</button>
            </div>
        </div>
        <div class="characteristics">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Описание</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Характеристики</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).
                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).



                    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий.               </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="description-body">
                        <tr>
                            <td class="table-first-column">Марка</td>
                            <td class="table-second-column">TERBERG</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">Год выпуска</td>
                            <td class="table-second-column">2011</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">Подъёмная сила</td>
                            <td class="table-second-column">35 т</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">Высота со сложенной мачтой</td>
                            <td class="table-second-column">3,1 м</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">Тип топлива</td>
                            <td class="table-second-column">Дизель</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">Двигатель</td>
                            <td class="table-second-column">Вольво, TAD750VE (Euromot IIIA)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <form action="" class="form-consultation-catalog">
            <legend class="consultation-catalog-title">Не нашли что искали – или нужна косультация?</legend>
            <div class="consultation-catalog-block-input">
                <input type="text" placeholder="Введите имя"><input type="text" placeholder="E-mail / Телефон">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Введите сообщение" class="consultation-catalog-text"></textarea>
            <button class="btn-consultation-catalog">Отправить</button>
        </form>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/product.js') }}"></script>
    <script src="{{ asset('assets/front/js/consultation.js') }}"></script>

@endsection

