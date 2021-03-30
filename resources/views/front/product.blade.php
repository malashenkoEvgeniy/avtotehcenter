@extends('front.layout')
@section('links')
    <link rel="stylesheet" href="{{ asset('assets/front/css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/consultation.css') }}">
    <style>

        .project__nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-weight: 600;
            margin-bottom: 60px;
        }



        .project__arrow {
            background-color: transparent;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            border-radius: 100%;
            /*border: 3px solid #000000;*/
            transition: all .4s;
        }

        .project__arrow svg {
            fill: #ffffff;
            width: auto;
            height: 100%;
            position: relative;
            top: 0;
            left: 0;
            transition: fill .4s;
        }


        .prev svg {
            top: 0px;
            left: 1px;
            transform: rotate(180deg);
        }

        .prev .project__arrow {
            margin: 0 10px 0 0;
        }

        .next {
            margin: 0 100px 0 auto;
        }

        .prev {
            margin: 0 auto 0 100px;
        }

        .next,
        .prev {
            display: flex;
            align-items: center;
        }

        .project__nav a:hover .project__arrow {
            background-color: #ffffff;
            transition: all .4s;
        }

        .project__nav a:hover svg {
            opacity: 0.25;
            transition: fill .4s;
        }

        .text {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            line-height: 16px;
            color: #000000;
        }

        .project__nav a:hover {
            text-decoration: none;
        }

        .project__nav a:hover .text {
            color: #B12020;
        }

        @media all and (max-width: 968px) {

            .next {
                margin: 0 0 0 auto;
            }

            .prev {
                margin: 0 auto 0 0;
            }

            .text {
                font-size: 10px;
                line-height: 12px;
            }
        }

    </style>
@endsection
@section('content')
    <section class="product-banner">
        <img src="{{$page->banner}}" alt="" class="product-banner-img">
        <h2 class="banner-title-page">{{$product->model->translate()->title}} {{$title_page}}</h2>
    </section>
    @include('front.includes.breadcrumbs')



    <section class="product">

        <h2 class="product-title desc">{{$product->category->translate()->title}} {{$product->model->translate()->title}} {{$product->translate()->title}}</h2>
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
                                        <iframe data-fancybox="gallery" data-type="iframe" data-src="https://www.youtube.com/embed/{{$product_image->url}}" src="https://www.youtube.com/embed/{{$product_image->url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
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
            <h2 class="product-title mobile">{{$product->category->translate()->title}} {{$product->model->translate()->title}} {{$product->translate()->title}}</h2>
            <div class="product-content-description">
                <h3 class="description-title">@lang('main.basic-info')</h3>
                <table class="description-body">
                    <tr>
                        <td class="table-first-column">@lang('main.brand')</td>
                        <td class="table-second-column">{{$product->model->translate()->title}}</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">@lang('main.year-issue')</td>
                        <td class="table-second-column">{{$product->characteristic->translate()->Year}}</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">@lang('main.carrying-capacity')</td>
                        <td class="table-second-column">{{$product->characteristic->lifting_force}} т</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">@lang('main.height-with-mast-folded')</td>
                        <td class="table-second-column">{{$product->characteristic->translate()->height_with_mast_folded}} м</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">@lang('main.fuel-type')</td>
                        <td class="table-second-column">{{$product->characteristic->translate()->fuel_type}}</td>
                    </tr>
                    <tr>
                        <td class="table-first-column">@lang('main.motor')</td>
                        <td class="table-second-column">{{$product->characteristic->translate()->motor}}</td>
                    </tr>
                </table>
                <button class="product-description-link">@lang('main.find-out-cost')</button>
            </div>
        </div>

        <div class="characteristics">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">@lang('main.description')</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">@lang('main.characteristics')</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">{{$product->characteristic->translate()->description}}</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="description-body">
                        <tr>
                            <td class="table-first-column">@lang('main.brand')</td>
                            <td class="table-second-column">{{$product->model->translate()->title}}</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">@lang('main.year-issue')</td>
                            <td class="table-second-column">{{$product->characteristic->translate()->Year}}</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">@lang('main.carrying-capacity')</td>
                            <td class="table-second-column">{{$product->characteristic->lifting_force}} т</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">@lang('main.height-with-mast-folded')</td>
                            <td class="table-second-column">{{$product->characteristic->translate()->height_with_mast_folded}} м</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">@lang('main.fuel-type')</td>
                            <td class="table-second-column">{{$product->characteristic->translate()->fuel_type}}</td>
                        </tr>
                        <tr>
                            <td class="table-first-column">@lang('main.motor')</td>
                            <td class="table-second-column">{{$product->characteristic->translate()->motor}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="project__nav">
            @if($previous !== null)
                <a href='{{ LaravelLocalization::localizeUrl(route('product', [ 'slug'=>$previous->slug]))}}' class="prev">
                    <span class="project__arrow">@include('front.svg.rounded_arrow')</span>
                    <span class="text">{{$previous->category->translate()->title}} {{$previous->model->translate()->title}} {{$previous->translate()->title}}</span>
                </a>
            @endif

            @if($next !== null)
                <a href='{{ LaravelLocalization::localizeUrl(route('product', [ 'slug'=>$next->slug]))}}' class="next">
                    <span class="text">{{$next->category->translate()->title}} {{$next->model->translate()->title}} {{$next->translate()->title}}</span>
                    <span class="project__arrow">@include('front.svg.rounded_arrow')</span>
                </a>
            @endif
        </div>
        <form action="{{route('sendForm')}}" method="post" class="form-consultation-catalog">
            {!! csrf_field() !!}
            <legend class="consultation-catalog-title">@lang('main.form_consultation1.title')</legend>
            <div class="consultation-catalog-block-input">
                <input type="text" placeholder="@lang('main.form_consultation1.enter_your_name')" name="name"><input type="text" placeholder="E-mail / @lang('main.form_consultation1.phone')" name="phone">
            </div>
            <input type="hidden" name="page" value="{{url()->full()}}">
            <textarea name="body" id="" cols="30" rows="10" placeholder="Введите сообщение" class="consultation-catalog-text"></textarea>
            <button class="btn-consultation-catalog">@lang('main.form_consultation1.send')</button>
        </form>
        {!! $product->translate()->body !!}
    </section>


    @include('front.includes.consultation')
    @include('front.includes.form_success_alert')
@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/product.js') }}"></script>

@endsection

