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
                                <a class="nav-link-contact-phone" href="#">
                                    <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                                    <span>+38 (050) 522 14 40</span>
                                </a>
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown-menu" style="max-width: 80px">
                                        <a class="dropdown-item" href="#">EN</a>
                                        <a class="dropdown-item" href="#">UK</a>
                                        <a class="dropdown-item" href="#">RU</a>
                                    </div>
                                </div>
                            </div>
                            <button class="main-control-btn">
                                <img src="{{asset('assets/front/svg/close.svg')}}" alt="catalog img" class="technics-item-control-close technics-item-control-img" >
                            </button>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="{{route('pages', ['slug'=>'o-kompanii'])}}">
                                О компании
                            </a>
                        </li>
                        <li class="nav-menu-item nav-technics">
                            <a class="nav-menu-link nav-sub-menu" href="{{route('special_equipment', ['slug'=>'spectehnika'])}}">
                                <span>Спецтехника</span>
                            </a>
                            <button class="nav-sub-menu-btn nav-sub-menu-btn-technics"><img src="{{asset('assets/front/svg/arrow.svg')}}" alt="" class="nav-sub-menu-img"></button>
                            <ul class="technics-list">
                                <li class="technics-item technics-item-control">
                                    <button class="control-button-descktop technics-item-control-back">
                                        <img src="{{asset('assets/front/svg/arrow-back.svg')}}" alt="catalog img" class="technics-item-control-img">
                                    </button>
                                    <div class="nav-secendory-block-mobile">
                                        <a class="nav-link-contact-phone" href="#">
                                            <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                                            <span>+38 (050) 522 14 40</span>
                                        </a>
                                        <div class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown-menu" style="max-width: 80px">
                                                <a class="dropdown-item" href="#">EN</a>
                                                <a class="dropdown-item" href="#">UK</a>
                                                <a class="dropdown-item" href="#">RU</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button><img src="{{asset('assets/front/svg/close.svg')}}" alt="catalog img" class="technics-item-control-close technics-item-control-img" ></button>
                                </li>
                                <li class="technics-item item-btn-back-onmobile">
                                    <button class="btn-back-onmobile">
                                        <img src="{{asset('assets/front/svg/arrow.svg')}}" alt="catalog img" class="technics-item-control-img">
                                        <h3 class="technics-link-header">Спецтехника</h3>
                                    </button>
                                </li>
                                @foreach($menu_categories as $category)
                                    <li class="technics-item">
                                        <a href="{{route('special_equipment', ['slug'=>$category->slug])}}" class="technics-link">
                                            <img src="{{asset($category->images)}}" alt="catalog img" class="technics-link-img" width="144" height="114">
                                            <h3 class="technics-link-header">{{$category->translate()->title}}</h3>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-menu-item nav-services">
                            <a class="nav-menu-link nav-sub-menu" href="{{route('pages', ['slug'=>'uslugi'])}}">
                                <span>Услуги</span>
                            </a>
                            <button class="nav-sub-menu-btn nav-sub-menu-btn-service"><img src="{{asset('assets/front/svg/arrow.svg')}}" alt="" class="nav-sub-menu-img"></button>
                            <ul class="service-list">
                                <li class="technics-item technics-item-control">
                                    <button class="control-button-descktop"><img src="{{asset('assets/front/svg/arrow-back.svg')}}" alt="catalog img" class="technics-item-control-back technics-item-control-img" ></button>
                                    <div class="nav-secendory-block-mobile">
                                        <a class="nav-link-contact-phone" href="#">
                                            <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                                            <span>+38 (050) 522 14 40</span>
                                        </a>
                                        <div class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown-menu" style="max-width: 80px">
                                                <a class="dropdown-item" href="#">EN</a>
                                                <a class="dropdown-item" href="#">UK</a>
                                                <a class="dropdown-item" href="#">RU</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button><img src="{{asset('assets/front/svg/close.svg')}}" alt="catalog img" class="technics-item-control-close technics-item-control-img" ></button>
                                </li>
                                <li class="technics-item item-btn-back-onmobile">
                                    <button class="btn-back-onmobile">
                                        <img src="{{asset('assets/front/svg/arrow.svg')}}" alt="catalog img" class="technics-item-control-img">
                                        <h3 class="technics-link-header">Услуги</h3>
                                    </button>
                                </li>
                                @foreach($page_on_menu as $service_page)
                                    @if($service_page->parent_id ==3)
                                        <li class="service-item">
                                            <a href="{{route('pages', ['slug'=>$service_page->slug])}}" class="service-link">{{$service_page->translate()->title}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="{{route('pages', ['slug'=>'dostavka'])}}">
                                Доставка
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="{{route('pages', ['slug'=>'kontakty'])}}">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <div class="nav-secendory-block">
                        <a class="nav-link-contact-phone" href="#">
                            <img src="{{asset('assets/front/svg/phone.svg')}}" alt="">
                            <span>+38 (050) 522 14 40</span>
                        </a>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown-menu" style="max-width: 80px">
                                <a class="dropdown-item" href="#">EN</a>
                                <a class="dropdown-item" href="#">UK</a>
                                <a class="dropdown-item" href="#">RU</a>
                            </div>
                        </div>
                    </div>
                    <button class="sm-menu-btn">
                        <img src="{{asset('assets/front/img/burger.png')}}" alt="">
                    </button>
                </nav>
            </div>
        </div>
    </div>
</header>
