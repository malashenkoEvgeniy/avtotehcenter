<header class="main-header">
    <div class="header-block">
        <a class="main-logo" href="/">
            <img id="logo" src="{{asset('assets/front/img/logo.png')}}" alt="logo">
        </a>
        <div class="main-header-wrapper">
            <div class="menu-wrapper">
                <nav class="nav-menu">
                    <ul class="nav-menu-list">
                        <li class="nav-menu-control">
                            <div class="nav-secendory-block-mobile">
                                <a class="nav-link-contact-phone" href="tel:{{$contact->phone_1}}">
                                    <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                                    <span>{{$contact->phone_1}}</span>
                                </a>
                                @include('front.includes.dropdown_loc')
                            </div>
                            <button class="main-control-btn">
                                <img src="{{asset('assets/front/svg/close.svg')}}" alt="catalog img" class="technics-item-control-close technics-item-control-img" >
                            </button>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="{{ LaravelLocalization::localizeUrl(route('pages', ['slug'=>'o-kompanii'])) }}">@lang('main.nav_menu.about_us')</a>
                        </li>
                        <li class="nav-menu-item nav-technics">
                            <a class="nav-menu-link nav-sub-menu" href="{{ LaravelLocalization::localizeUrl(route('special_equipment'))}}">
                                <span>@lang('main.nav_menu.special_equipment')</span>
                            </a>
                            <button class="nav-sub-menu-btn nav-sub-menu-btn-technics"><img src="{{asset('assets/front/svg/arrow.svg')}}" alt="" class="nav-sub-menu-img"></button>
                            <ul class="technics-list">
                                <li class="technics-item technics-item-control">
                                    <button class="control-button-descktop technics-item-control-back">
                                        <img src="{{asset('assets/front/svg/arrow-back.svg')}}" alt="catalog img" class="technics-item-control-img">
                                    </button>
                                    <div class="nav-secendory-block-mobile">
                                        <a class="nav-link-contact-phone" href="tel:{{$contact->phone_1}}">
                                            <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                                            <span>{{$contact->phone_1}}</span>
                                        </a>
                                        @include('front.includes.dropdown_loc')
                                    </div>
                                    <button><img src="{{asset('assets/front/svg/close.svg')}}" alt="catalog img" class="technics-item-control-close technics-item-control-img" ></button>
                                </li>
                                <li class="technics-item item-btn-back-onmobile">
                                    <button class="btn-back-onmobile">
                                        <img src="{{asset('assets/front/svg/arrow.svg')}}" alt="catalog img" class="technics-item-control-img">
                                        <h3 class="technics-link-header">@lang('main.nav_menu.special_equipment')</h3>
                                    </button>
                                </li>
                                @foreach($menu_categories as $category)
                                    <li class="technics-item">
                                        <a href="{{ LaravelLocalization::localizeUrl(route('special_equipment', ['slug'=>$category->slug]))}}" class="technics-link">
                                            <img src="{{asset($category->images)}}" alt="catalog img" class="technics-link-img" width="144" height="114">
                                            <h3 class="technics-link-header">{{$category->translate()->title}}</h3>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-menu-item nav-services">
                            <a class="nav-menu-link nav-sub-menu" href="{{ LaravelLocalization::localizeUrl(route('pages', ['slug'=>'uslugi']))}}">
                                <span>@lang('main.nav_menu.services')</span>
                            </a>
                            <button class="nav-sub-menu-btn nav-sub-menu-btn-service"><img src="{{asset('assets/front/svg/arrow.svg')}}" alt="" class="nav-sub-menu-img"></button>
                            <ul class="service-list">
                                <li class="technics-item technics-item-control">
                                    <button class="control-button-descktop"><img src="{{asset('assets/front/svg/arrow-back.svg')}}" alt="catalog img" class="technics-item-control-back technics-item-control-img" ></button>
                                    <div class="nav-secendory-block-mobile">
                                        <a class="nav-link-contact-phone" href="tel:{{$contact->phone_1}}">
                                            <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                                            <span>{{$contact->phone_1}}</span>
                                        </a>
                                        @include('front.includes.dropdown_loc')
                                    </div>
                                    <button><img src="{{asset('assets/front/svg/close.svg')}}" alt="catalog img" class="technics-item-control-close technics-item-control-img" ></button>
                                </li>
                                <li class="technics-item item-btn-back-onmobile">
                                    <button class="btn-back-onmobile">
                                        <img src="{{asset('assets/front/svg/arrow.svg')}}" alt="catalog img" class="technics-item-control-img">
                                        <h3 class="technics-link-header">@lang('main.nav_menu.services')</h3>
                                    </button>
                                </li>
                                @foreach($page_on_menu as $service_page)
                                    @if($service_page->parent_id ==3)
                                        <li class="service-item">
                                            <a href="{{ LaravelLocalization::localizeUrl(route('pages', ['slug'=>$service_page->slug]))}}" class="service-link">{{$service_page->translate()->title}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="{{ LaravelLocalization::localizeUrl(route('pages', ['slug'=>'dostavka']))}}">@lang('main.nav_menu.delivery')</a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="{{ LaravelLocalization::localizeUrl(route('pages', ['slug'=>'kontakty']))}}">@lang('main.nav_menu.contacts')</a>
                        </li>
                    </ul>
                    <div class="nav-secendory-block">
                        <a class="nav-link-contact-phone" href="tel:{{$contact->phone_1}}">
                            <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                            <span>{{$contact->phone_1}}</span>
                        </a>
                        @include('front.includes.dropdown_loc')
                    </div>
                    <button class="sm-menu-btn">
                        <img src="{{asset('assets/front/svg/burger.svg')}}" alt="">
                    </button>
                </nav>
            </div>
        </div>
    </div>
</header>
