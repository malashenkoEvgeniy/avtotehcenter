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
    <section class="section-banner">
        <img src="{{ asset('assets/front/img/spaectehnika.png') }}" alt="" class="section-banner-img">
        <h2 class="banner-title-page">{{$title_page}}</h2>
    </section>
    @include('front.includes.breadcrumbs')
    <section class="catalog">
        <div class="catalog-filter-wrapper">
            <h3 class="catalog-filter-title">Выбрано</h3>
            <button class="catalog-filter-filter">Фильтр <img src="{{asset('assets/front/svg/filter.svg')}}" alt="filter"></button>
            <form class="catalog-filter" id="form-filter"  action="{{route('special_equipment_filter')}}">
                <div class="catalog-filter-block">
                    <button type="button" class="catalog-filter-block-link ">
                        <span>{{$btn_filter_categories['title']}}</span>
                        <img src="{{asset('assets/front/svg/arrov-catalog.svg')}}" alt="">
                    </button>
                    <div class="catalog-filter-checkbox-block">
                        @foreach($categories as $category_item)
                        <input type="radio" id="model-{{$category_item->id}}" name="category" @if($curent_category == $category_item->id) checked  class="current_category" @endif value="{{$category_item->id}}">
                        <label for="model-{{$category_item->id}}">{{$category_item->translate()->title}}</label><br>
                        @endforeach

                    </div>

{{--                    <input type="hidden" name="category{{$btn_filter_categories['ddd']}}" value="{{$btn_filter_categories['link']}}">--}}

                    <select name="marka" id="marka" class="catalog-filter-block-select" id="filter-model">
{{--                        <option id="default-marka" value="0">Марка</option>--}}

{{--                        <option id="default-marka" value="{{$btn_filter_marks_id}}">{{$btn_filter_marks}}</option>--}}
                        @isset($brands)
                            <option value="0">Выберите марку</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}" @if($brand->current) selected @endif>{{$brand->translate()->title}}</option>
                            @endforeach
                        @endisset

                    </select>
                </div>
                <button type="submit" class="catalog-filter-btn">Применить</button>
                <button class="btn-consultation-close filter-class">
                    <img src="{{ asset('assets/front/svg/close.svg') }}" alt="">
                </button>
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
                            @if(isset($slug))
                            <li class="rezult-item">
                                <a href="{{ LaravelLocalization::localizeUrl(route('special_equipment', ['slug'=>$slug]))}}" class="rezult-link">
                                    Грузоподъемность
                                    <img src="{{asset('assets/front/svg/search-arrow-top.svg')}}" alt="">
                                </a>
                            </li>
                            <li class="rezult-item">
                                <a href="{{ LaravelLocalization::localizeUrl(route('special_equipment_desc', ['slug'=>$slug]))}}" class="rezult-link">
                                    Грузоподъемность
                                    <img src="{{asset('assets/front/svg/search-arrow-bottom.svg')}}" alt="">
                                </a>
                            </li>
                            @else
                                <li class="rezult-item">
                                    <a href="{{ LaravelLocalization::localizeUrl(route('special_equipment_m', ['slugC'=>$slugC, 'slugM'=>$slugM]))}}" class="rezult-link">
                                        Грузоподъемность
                                        <img src="{{asset('assets/front/svg/search-arrow-top.svg')}}" alt="">
                                    </a>
                                </li>
                                <li class="rezult-item">
                                    <a href="{{ LaravelLocalization::localizeUrl(route('special_equipment_m_desc', ['slugC'=>$slugC, 'slugM'=>$slugM]))}}" class="rezult-link">
                                        Грузоподъемность
                                        <img src="{{asset('assets/front/svg/search-arrow-bottom.svg')}}" alt="">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </h3>
            </div>


            <ul class="catalog-card-list">
                @foreach($products as $product)
                <li class="catalog-card-item">
                    <a href="{{route('product', [ 'slug'=>$product->slug])}}" class="catalog-card-link">
                        <img src="{{$product->images}}" alt="" class="catalog-card-img">
                    </a>
                    <div class="catalog-card-description">
                        <a href="#" class="catalog-card-description-title"><span class="additional-title-description">{{$product->category->translate()->title}}</span><br> {{$product->model->translate()->title}} {{$product->translate()->title}}</a>

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
            @if($products->hasPages())
            <div class="projects__bottom">
                @if( $products->nextPageUrl() !== null)
                    <button class="show-more" data-page="{{$products->nextPageUrl()}}">Показать еще</button>
                @endif

                <div class="pagination">
                    {{$products->links()}}
                </div>
            </div>
            @endif


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

        //Filter scripts
        $(document).ready(function (){
            let model = $('#marka');
            $('.catalog-filter-checkbox-block').append("<input type='radio' id='model-0' name='category'  value><label for='model-0'>Выбрать все</label><br>");
            $('#form-filter input').change(function (){
                //
                $('#marka *').remove();

                let radioVal = $(this).val();
                selectModel(radioVal, model);
                $('.catalog-filter-block-link span').text($(this).next().text());
                $('.catalog-filter-checkbox-block').toggleClass('catalog-filter-checkbox-visible');


            });

            // if($('body').has('.current_category').length){
            //     let radioVal = $('.current_category').val();
            //     let model = $('#marka');
            //     selectModel(radioVal, model);
            // }

            function selectModel(val, model) {
                $.ajax({
                    type: "POST",
                    url: "{{route('request-form-data')}}",
                    data: {'_token': $('meta[name = "csrf-token"]').attr('content'), 'c_id':val},
                }).done(function( data ) {
                    // let d = data;
                    // debugger;
                    model.append("<option value='0'>Выберите марку</option>");
                    for(let i = 0; i< data.length; i++) {

                        model.append("<option style='padding-bottom: 10px' value='"+ data[i]['id']+"'>" + data[i]['translation']['title'] + "</option>");

                    }});

                 }
            });

    </script>
    </script>
@endsection
