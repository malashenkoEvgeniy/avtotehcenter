@extends('front.layout')

<link rel="stylesheet" href="{{ asset('assets/front/css/breadcrumbs.css') }}">

<link rel="stylesheet" href="{{ asset('assets/front/css/catalog.css') }}">
|<link rel="stylesheet" href="{{ asset('assets/front/css/pagination.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/css/show-more.css') }}">
<link rel="stylesheet" href="{{ asset('assets/front/css/consultation.css') }}">
<meta id="_csrf_token" content="{{ csrf_token() }}" name="csrf-token">
@section('links')

@endsection
@section('content')
    <section class="section-bunner">
        <img src="{{ asset('assets/front/img/spaectehnika.png') }}" alt="" class="section-bunner-img">
        <h2 class="buner-title-page">{{$title_page}}</h2>
    </section>
    <div class="page-breadcrumbs">
        <ol class="breadcrumbs">
            <li >
                <a href="#" itemprop="item">
                <span class="breadcrumbs__home">
                    <img src="{{ asset('assets/front/svg/home.svg') }}" alt="home">
                </span>
                </a>
            </li>
            <li class="breadcrumbs__separator"> / </li>
            <li>
                <a class="breadcrumbs-link breadcrumbs-link-acive" >
                    <span itemprop="name">Каталог</span>
                </a>
            </li>
        </ol>
    </div>
    <section class="catalog">
        <div class="catalog-filter-wrapper">
            <h3 class="catalog-filter-title">Выбрано</h3>
            <button class="catalog-filter-filter">Фильтр <img src="{{asset('assets/front/svg/filter.svg')}}" alt="filter"></button>
            <form class="catalog-filter" id="form-filter" action="{{route('special_equipment_filter')}}">
                <div class="catalog-filter-block">
                    <button type="button" class="catalog-filter-block-link">
                        <span>Тип спецтехники</span>
                        <img src="{{asset('assets/front/svg/arrov-catalog.svg')}}" alt="">
                    </button>
                    <div class="catalog-filter-checkbox-block">
                        @foreach($model as $model_item)
                        <input type="radio" id="model-{{$model_item->id}}" name="models" value="{{$model_item->id}}">
                        <label for="model-{{$model_item->id}}">{{$model_item->translate()->title}}</label><br>
                        @endforeach
                    </div>

                    <select name="marka" id="marka" class="catalog-filter-block-select" id="filter-model">
                        <option id="default-marka" value="0">Марка</option>
                    </select>
                </div>
                <button type="submit" class="catalog-filter-btn">Применить</button>
            </form>
        </div>
        <div class="catalog-rezult-wrapper">
            <div class="catalog-rezult-title-wrapper">
                <button class="catalog-filter-filter">Фильтр <img src="{{asset('assets/front/svg/filter.svg')}}" alt="filter"></button>
                <h3 class="catalog-rezult-title">
                    <button class="serch-rezult-btn">
                        <span class="catalog-rezult-title-header">Сортировать по    </span>
                        <img src="{{asset('assets/front/svg/arrow.svg')}}" alt="arrow" class="arrow"></button>
                    <div class="serch-block-none">
                        <ul class="rezult-list">
                            <li class="rezult-item">
                                <a href="{{route('special_equipment_desc', ['slug'=>$slug])}}" class="rezult-link">
                                    Грузоподъемность
                                    <img src="{{asset('assets/front/svg/search-arrow-top.svg')}}" alt="">
                                </a>
                            </li>
                            <li class="rezult-item">
                                <a href="{{route('special_equipment', ['slug'=>$slug])}}" class="rezult-link">
                                    Грузоподъемность
                                    <img src="{{asset('assets/front/svg/search-arrow-bottom.svg')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </h3>
            </div>


            <ul class="catalog-card-list">
                @foreach($products as $product)
                <li class="catalog-card-item">
                    <a href="#" class="catalog-card-link">
                        <img src="{{$product->images}}" alt="" class="catalog-card-img">
                    </a>
                    <div class="catalog-card-description">
                        <a href="#" class="catalog-card-description-title">{{$product->model->translate()->title}} {{$product->translate()->title}}</a>
                        <ul class="catalog-card-description-feature">
                            <li class="feature-item">
                                <img src="{{asset('assets/front/svg/marka.svg')}}" class="feature-img">

                                <h5 class="feature-key">Марка</h5>
                                <p class="feature-value">{{$product->model->translate()->title}}</p>
                            </li>
                            <li class="feature-item">
                                <img src="{{asset('assets/front/svg/motor.svg')}}" class="feature-img">
                                <h5 class="feature-key">Обьем двигателя</h5>
                                <p class="feature-value">{{$product->characteristic->translate()->v_motor}}</p>
                            </li>
                            <li class="feature-item">
                                <img src="{{asset('assets/front/svg/calendar.svg')}}" class="feature-img">
                                <h5 class="feature-key">Год выпуска</h5>
                                <p class="feature-value">{{$product->characteristic->translate()->Year}}</p>
                            </li>
                        </ul>
                        <button class="catalog-card-description-link">Узнать стоимость</button>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="projects__bottom">
                @if( $products->nextPageUrl() !== null)
                    <button class="show-more" data-page="{{$products->nextPageUrl()}}">Показать еще</button>
                @endif

                <div class="pagination">
                    {{$products->links()}}
                </div>
            </div>

{{--            <button class="show-more">Показать еще</button>--}}
{{--            <ul class="pagination">--}}
{{--                <li class="pagination-item"><a href="#" class="pagination-link pagination-arrow-prew"><img src="{{asset('assets/front/svg/arrow.svg')}}" alt="arrow" class="arrow"></a></li>--}}
{{--                <li class="pagination-item"><a href="#" class="pagination-link active-pagination">1</a></li>--}}
{{--                <li class="pagination-item"><a href="#" class="pagination-link">2</a></li>--}}
{{--                <li class="pagination-item"><a href="#" class="pagination-link">3</a></li>--}}
{{--                <li class="pagination-item"><a href="#" class="pagination-link">4</a></li>--}}
{{--                <li class="pagination-item"><a href="#" class="pagination-link pagination-arrow-next"><img src="{{asset('assets/front/svg/arrow.svg')}}" alt="arrow" class="arrow"></a></li>--}}
{{--            </ul>--}}
        </div>
    </section>
    <div class="">
        {{$body_page}}
    </div>
    <form action="" class="form-consultation form-consultation-none">
        <legend class="consultatuion-title">Не нашли что искали – или нужна косультация?</legend>
        <div class="consultation-block-iput">
            <input type="text" placeholder="Введите имя"><input type="text" placeholder="E-mail / Телефон">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Введите сообщение" class="consultation-text"></textarea>
        <button class="btn-consultation">Отправить</button>
        <button class="btn-consultation-close">
            <img src="{{ asset('assets/front/svg/close.svg') }}" alt="">
        </button>
    </form>

@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/catalog.js') }}"></script>
    <script src="{{ asset('assets/front/js/consultation.js') }}"></script>
    <script>
        $('.show-more').click(function(){

            let page = $(this).attr('data-page');

            $.ajax({
                method: 'GET',
                url: page,
                data: {
                    _token: '{{csrf_token()}}',
                }
            }).done(function(data){
                let page = $(data);
                let items = page.find('.catalog-card-description');
                if (page.find('.show-more').length == 1) {
                    let nextPage = page.find('.projects__show-more').attr('data-page');
                    $('.show-more').attr('data-page', nextPage);
                }else{
                    $('.show-more').remove();
                }

                $('.catalog-card-description').append(items);

                let next = $('.page-item.active').next();
                $('.page-item.active').removeClass('active');
                next.addClass("active");
            });
        });

        //Filter scripts
        $(document).ready(function (){
            let model = $('#marka');
            $('#form-filter input').change(function (){
                $('#marka *').remove();
                let radioVal = $(this).val();
                selectModel(radioVal, model);
            });

        });
        function selectModel(val, model) {

            $.ajax({
                type: "POST",
                url: "{{route('request-form-date')}}",
                data: {'_token': $('meta[name = "csrf-token"]').attr('content'), 'm_id':val},
            }).done(function( data ) {
                model.append("<option value='0'>Выберите марку</option>");
                for(let i = 0; i< data.length; i++) {
                    model.append("<option style='padding-bottom: 10px' value='"+ data[i]['id']+"'>" + data[i]['translate_table']['title'] + "</option>");
                }
            });
        }

    </script>
    </script>
@endsection
