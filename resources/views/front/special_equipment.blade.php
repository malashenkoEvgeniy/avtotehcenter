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
    @include('front.includes.breadcrumbs')
    <section class="catalog">
        <div class="catalog-filter-wrapper">
            <h3 class="catalog-filter-title">Выбрано</h3>
            <button class="catalog-filter-filter">Фильтр <img src="{{asset('assets/front/svg/filter.svg')}}" alt="filter"></button>
            <form class="catalog-filter" id="form-filter" action="{{route('special_equipment_filter')}}">
                <div class="catalog-filter-block">
                    <button type="button" class="catalog-filter-block-link ">
                        <span>{{$btn_filter_categories}}</span>
                        <img src="{{asset('assets/front/svg/arrov-catalog.svg')}}" alt="">
                    </button>
                    <div class="catalog-filter-checkbox-block">
                        @foreach($categories as $category_item)
                        <input type="radio" id="model-{{$category_item->id}}" name="category" @if($curent_category == $category_item->id) class="{{$class_btn}}" @endif value="{{$category_item->id}}">
                        <label for="model-{{$category_item->id}}">{{$category_item->translate()->title}}</label><br>
                        @endforeach
                    </div>

                    <select name="marka" id="marka" class="catalog-filter-block-select" id="filter-model">
                        <option id="default-marka" value="0">{{$marka}}</option>
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
                                <a href="{{route('special_equipment', ['slug'=>$slug])}}" class="rezult-link">
                                    Грузоподъемность
                                    <img src="{{asset('assets/front/svg/search-arrow-top.svg')}}" alt="">
                                </a>
                            </li>
                            <li class="rezult-item">
                                <a href="{{route('special_equipment_desc', ['slug'=>$slug])}}" class="rezult-link">
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
                    <a href="{{route('product', ['id'=>$product->id])}}" class="catalog-card-link">
                        <img src="{{$product->images}}" alt="" class="catalog-card-img">
                    </a>
                    <div class="catalog-card-description">
                        <a href="#" class="catalog-card-description-title"><span class="additional-title-description">{{$product->category->translate()->title}}</span><br> {{$product->translate()->title}}</a>

                        <ul class="catalog-card-description-feature">
                            <li class="feature-item">
                                <img src="{{asset('assets/front/svg/marka.svg')}}" class="feature-img">

                                <h5 class="feature-key">Грузоподъемность</h5>
                                <p class="feature-value">{{$product->characteristic->lifting_force}}т</p>
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


        </div>
    </section>
    <div class="catalog-body-page">
        {{$body_page}}
    </div>
    @include('front.includes.consultation')
    @include('front.includes.form_success_alert')

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
                let items = page.find('.catalog-card-item');
                if (page.find('.show-more').length == 1) {
                    let nextPage = page.find('.show-more').attr('data-page');
                    $('.show-more').attr('data-page', nextPage);
                }else{
                    $('.show-more').remove();
                }

                $('.catalog-card-list').append(items);

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
                $('.catalog-filter-block-link span').text($(this).next().text());
                $('.catalog-filter-checkbox-block').toggleClass('catalog-filter-checkbox-visible');
            });

            if($('body').has('.class_btn').length){
                let radioVal = $('.class_btn').val();
                selectModel(radioVal, model);
            }

        });
        function selectModel(val, model) {

            $.ajax({
                type: "POST",
                url: "{{route('request-form-date')}}",
                data: {'_token': $('meta[name = "csrf-token"]').attr('content'), 'c_id':val},
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
