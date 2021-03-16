<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* social button */

        .social-items-bg {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            display: none;
            background-color: transparent;
            transition: background .4s;
            z-index: 9;
        }

        .social-items-bg.active {
            transition: background .4s;
            background-color: rgba(41, 41, 41, 0.6);
        }

        .social-items-wrapper {
            position: fixed;
            right: 20px;
            bottom: 200px;
            z-index: 10;
        }

        .social-items-menu {
            display: none;
        }

        .social-item {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 15px 0px;
            position: relative;
        }



        .social-item__description {
            cursor: pointer;
            background-color: white;
            text-align: center;
            padding: 5px 10px;
            border-radius: 20px;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translate(0%, -50%);
            opacity: 0;
            transition: all .3s linear;
            /*font-family: "Helvetica", sans-serif;*/
        }

        .social-item:hover .social-item__description {
            transform: translate(-100%, -50%);
            opacity: 1;
        }

        .social-item .social-item__description a {
            color: #000;
        }


        .item-icon {
            background-position: center;
            background-size: 60%;
            background-repeat: no-repeat;
            height: 45px;
            width: 45px;
            border-radius: 50%;
        }

        .item-icon-telegram {
            background-color: #2fc6f6;
            background-image: url(svg/social/telegram.svg);
        }

        .item-icon-viber {
            background-image: url(svg/social/viber.svg);
            background-color: #995aca;
        }

        .item-icon-facebook {
            background-color: #4267B2;
            background-image: url(svg/social/facebook.svg);
        }

        .item-icon-instagram {
            background-image: url(svg/social/instagram.svg);
            background-color: #C13584;
        }

        .item-icon-phone {
            background-color: var(--main-color);
            background-image: url(svg/social/telephone.svg);
            background-size: 50%;
        }

        .item-icon-chat {
            background-color: #2fc6f6;
            background-image: url(svg/social/chat.svg);
        }

        .item-icon {
            transition: all .6s;
        }

        .item-icon:hover {
            transition: all .6s;
            -webkit-filter: brightness(1.2);
            filter: brightness(1.2);
        }

        .social-btn-bg {
            padding: 5px;
            background: rgb(0, 0, 0, 0.4);
            border-radius: 100%;
            transition: all .3s;
            cursor: pointer;
        }

        .social-btn-bg.active {
            transition: all .3s;
            transform: scale(0.8);
            background: rgba(214, 214, 214, 0.7);
        }

        .social-btn-bg.active:hover {
            cursor: pointer;
        }

        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #B12020;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background .3s linear, transform .3s;
            position: relative;
        }

        .social-btn .btn-1.close,
        .social-btn .btn-2.close {
            visibility: hidden;
        }

        .social-btn .s-btn-close svg {
            width: 24px;
            height: 25px;
        }

        .social-btn-bg.active .s-btn-close {
            display: unset;
        }

        .social-btn .s-btn-close {
            display: none;
        }

        .social-btn.active {
            transform: scale(0.9);
            transition: background .3s linear, transform .3s;
            background: #d6d6d6;
        }



        .s-btn {
            position: absolute;
            left: 50%;
            bottom: 50%;
            transform: translate(-50%, 50%);
        }

        .btn-1 {
            display: none;
        }

        .btn-2 {
            display: block;
        }


        .btn-2 svg,
        .btn-1 svg {
            height: 24px;
            width: 24px;
        }

        .btn-1.active,
        .btn-2.active {
            display: none;
        }


        .social-btn-pulse {
            position: fixed;
            width: 60px;
            height: 60px;
            right: 19px;
            bottom: 199px;
        }

        .social-btn-pulse.active {
            border: 1px solid var(--main-color);
            border-radius: 100%;
            z-index: 9;
            opacity: 1;
            animation: Pulse 1.5s ease infinite;
        }

        .footer__button-up {
            position: fixed;
            right: 27px;
            bottom: 70px;
        }

        .footer__button-up:before {
            content: "";
            position: absolute;
            width: 60px;
            height: 60px;
            top: -5px;
            left: -5px;
            background-color: #ccc;
            border-radius: 50%;
            z-index: -1;
        }


        .footer__button-up img {width: 50px;}

        @keyframes Pulse {
            0% {
                transform: scale(1.0);
                opacity: 1;
            }

            100% {
                transform: scale(1.8);
                opacity: 0;
            }
        }


        /* social button END */


        @media (min-width: 990px) {
            .social-items-menu .social-item:nth-child(3) {
                display: none;
            }
        }

        @media (max-width: 1700px) {
            .social-items-wrapper{
                bottom: 150px;
            }

            .social-btn-pulse{
                bottom: 149px;
            }
        }

        @media (max-width: 990px) {
            .social-item .social-item__description {
                transform: translate(-100%, -50%);
                opacity: 1;
            }
        }

    </style>
    <title>АВТОТЕХЦЕНТР</title>
</head>
<body>
<header class="main-header">
    <div class="header-block">
        <a class="main-logo" href="/">
            <img id="logo" src="img/logo.png" alt="logo">
        </a>
        <div class="main-header-wrapper">
            <div class="menu-wrapper">
                <nav class="nav-menu">
                    <ul class="nav-menu-list">
                        <li class="nav-menu-control">
                            <div class="nav-secendory-block-mobile">
                                <a class="nav-link-contact-phone" href="#">
                                    <img src="svg/phone.svg" alt="">
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
                                <img src="svg/close.svg" alt="catalog img" class="technics-item-control-close technics-item-control-img" >
                            </button>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="about-us.html">
                                О компании
                            </a>
                        </li>
                        <li class="nav-menu-item nav-technics">
                            <a class="nav-menu-link nav-sub-menu" href="catalog.html">
                                <span>Спецтехника</span>
                            </a>
                            <button class="nav-sub-menu-btn nav-sub-menu-btn-technics"><img src="svg/arrow.svg" alt="" class="nav-sub-menu-img"></button>
                            <ul class="technics-list">
                                <li class="technics-item technics-item-control">
                                    <button class="control-button-descktop technics-item-control-back">
                                        <img src="svg/arrow-back.svg" alt="catalog img" class="technics-item-control-img">
                                    </button>
                                    <div class="nav-secendory-block-onmobile">
                                        <a class="nav-link-contact-phone" href="#">
                                            <img src="svg/phone.svg" alt="">
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
                                    <button><img src="svg/close.svg" alt="catalog img" class="technics-item-control-close technics-item-control-img" ></button>
                                </li>
                                <li class="technics-item item-btn-back-onmobile">
                                    <button class="btn-back-onmobile">
                                        <img src="svg/arrow.svg" alt="catalog img" class="technics-item-control-img">
                                        <h3 class="technics-link-header">Спецтехника</h3>
                                    </button>
                                </li>
                                <li class="technics-item">
                                    <a href="catalog.html" class="technics-link">
                                        <img src="img/catalog54.png" alt="catalog img" class="technics-link-img" width="144" height="114">
                                        <h3 class="technics-link-header">Портовые тягачи</h3>
                                    </a>
                                </li>
                                <li class="technics-item">
                                    <a href="catalog.html" class="technics-link">
                                        <img src="img/catalog23.png" alt="catalog img" class="technics-link-img" width="144" height="114">
                                        <h3 class="technics-link-header">Вилочные погрузчики</h3>
                                    </a>
                                </li>
                                <li class="technics-item">
                                    <a href="catalog.html" class="technics-link">
                                        <img src="img/catalog10.png" alt="catalog img" class="technics-link-img" width="144" height="114">
                                        <h3 class="technics-link-header">Ковшевые погрузчики</h3>
                                    </a>
                                </li>
                                <li class="technics-item">
                                    <a href="catalog.html" class="technics-link">
                                        <img src="img/catalog6.png" alt="catalog img" class="technics-link-img" width="144" height="114">
                                        <h3 class="technics-link-header">Штабелеры</h3>
                                    </a>
                                </li>
                                <li class="technics-item">
                                    <a href="catalog.html" class="technics-link">
                                        <img src="img/catalog9.png" alt="catalog img" class="technics-link-img" width="144" height="114">
                                        <h3 class="technics-link-header">Ричстакеры</h3>
                                    </a>
                                </li>
                                <li class="technics-item ">
                                    <a href="catalog.html" class="technics-link ">
                                        <img src="img/catalog35.png" alt="catalog img" class="technics-link-img" width="144" height="114">
                                        <h3 class="technics-link-header">Самосвалы</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu-item nav-services">
                            <a class="nav-menu-link nav-sub-menu" href="service.html">
                                <span>Услуги</span>
                            </a>
                            <button class="nav-sub-menu-btn nav-sub-menu-btn-service"><img src="svg/arrow.svg" alt="" class="nav-sub-menu-img"></button>
                            <ul class="service-list">
                                <li class="technics-item technics-item-control">
                                    <button class="control-button-descktop"><img src="svg/arrow-back.svg" alt="catalog img" class="technics-item-control-back technics-item-control-img" ></button>
                                    <div class="nav-secendory-block-mobile">
                                        <a class="nav-link-contact-phone" href="#">
                                            <img src="svg/phone.svg" alt="">
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
                                    <button><img src="svg/close.svg" alt="catalog img" class="technics-item-control-close technics-item-control-img" ></button>
                                </li>
                                <li class="technics-item item-btn-back-onmobile">
                                    <button class="btn-back-onmobile">
                                        <img src="svg/arrow.svg" alt="catalog img" class="technics-item-control-img">
                                        <h3 class="technics-link-header">Услуги</h3>
                                    </button>
                                </li>
                                <li class="service-item">
                                    <a href="service.html" class="service-link">Услуга 1</a>
                                </li>
                                <li class="service-item">
                                    <a href="service.html" class="service-link">Услуга 2</a>
                                </li>
                                <li class="service-item">
                                    <a href="service.html" class="service-link">Услуга 3</a>
                                </li>
                                <li class="service-item">
                                    <a href="service.html" class="service-link">Услуга 4</a>
                                </li>
                                <li class="service-item">
                                    <a href="service.html" class="service-link">Услуга 5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="service.html">
                                Доставка
                            </a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-link" href="contacts.html">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <div class="nav-secendory-block">
                        <a class="nav-link-contact-phone" href="#">
                            <img src="svg/phone.svg" alt="">
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
                        <img src="img/burger.png" alt="">
                    </button>
                </nav>
            </div>
        </div>
    </div>
</header>
<main class="main-content">
    <section class="tagline">
        <h1><div>Ваш партнер по аренде</div> спецтехники</h1>
    </section>
    <section class="catalog-equipment">
        <h2 class="catalog-equipment-header">
            <span class="header-border">Каталог  Спецтехники</span>
        </h2>
        <ul class="catalog-equipment-list">
            <li class="catalog-equipment-item">
                <a href="#" class="catalog-equipment-link">
                    <span class="catalog-equipment-number">54</span>
                    <img src="img/catalog54.png" alt="catalog img" class="catalog-equipment-link-img">
                    <h3 class="catalog-equipment-link-header">Портовые тягачи</h3>
                </a>
            </li>
            <li class="catalog-equipment-item">
                <a href="#" class="catalog-equipment-link">
                    <span class="catalog-equipment-number">23</span>
                    <img src="img/catalog23.png" alt="catalog img" class="catalog-equipment-link-img">
                    <h3 class="catalog-equipment-link-header">Вилочные погрузчики</h3>
                </a>
            </li>
            <li class="catalog-equipment-item equipment-right">
                <a href="#" class="catalog-equipment-link">
                    <span class="catalog-equipment-number">10</span>
                    <img src="img/catalog10.png" alt="catalog img" class="catalog-equipment-link-img">
                    <h3 class="catalog-equipment-link-header">Ковшевые погрузчики</h3>
                </a>
            </li>
            <li class="catalog-equipment-item">
                <a href="#" class="catalog-equipment-link">
                    <span class="catalog-equipment-number">6</span>
                    <img src="img/catalog6.png" alt="catalog img" class="catalog-equipment-link-img" >
                    <h3 class="catalog-equipment-link-header">Штабелеры</h3>
                </a>
            </li>
            <li class="catalog-equipment-item">
                <a href="#" class="catalog-equipment-link">
                    <span class="catalog-equipment-number">9</span>
                    <img src="img/catalog9.png" alt="catalog img" class="catalog-equipment-link-img">
                    <h3 class="catalog-equipment-link-header">Ричстакеры</h3>
                </a>
            </li>
            <li class="catalog-equipment-item equipment-right">
                <a href="#" class="catalog-equipment-link">
                    <span class="catalog-equipment-number">35</span>
                    <img src="img/catalog35.png" alt="catalog img" class="catalog-equipment-link-img">
                    <h3 class="catalog-equipment-link-header">Самосвалы</h3>
                </a>
            </li>
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
        <form action="" class="scheme-work-form">

            <legend class="scheme-work-legend">Не нашли что искали – или нужна косультация?</legend>

            <div class="scheme-work-inputs mobile-versia">
                <input type="text" class="scheme-work-input" placeholder="Введите имя">
                <input type="text" class="scheme-work-input" placeholder="E-mail / Телефон">
            </div>

            <textarea  id="" cols="30" rows="10" class="col-sm-12 scheme-work-textarea" placeholder="Введите сообщение"></textarea>

            <div class="">
                <button class="col-sm-2 scheme-work-btn">Отправить</button>
            </div>
        </form>
    </section>
    <section class="our-clients">
        <h2 class="our-clients-header">
            <span class="header-border">Наши клиенты</span>
        </h2>
        <div class="regular slider">
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client1.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client2.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client3.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client4.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client5.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client6.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client3.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client4.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client5.png" alt="client" class="our-clients-img">
                </a>
            </div>
            <div>
                <a href="#" class="our-clients-link">
                    <img src="img/client6.png" alt="client" class="our-clients-img">
                </a>
            </div>
        </div>
    </section>
    <section class="seo">
        <h3 class="seo-header">SEO текст</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore         magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis     aute     irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore         magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis     aute     irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore         magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis     aute     irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

    </section>
</main>
<footer class="main-footer">
    <div class="footer-wrapper">
        <div class="footer-content">
            <div class="footer-logo">
                <a class="main-logo" href="#">
                    <img id="logo1" src="img/logo.png" alt="logo">
                </a>
            </div>
            <ul class="footer-list">
                <li class="footer-item">
                    <a class="footer-link">О компании</a>
                </li>
                <li class="footer-item">
                    <a href="#" class="footer-link">Спецтехника</a>
                </li>
                <li class="footer-item">
                    <a href="#" class="footer-link">Услуги</a>
                </li>
                <li class="footer-item">
                    <a href="#" class="footer-link">Доставка</a>
                </li>
                <li class="footer-item">
                    <a href="#" class="footer-link">контакты</a>
                </li>
            </ul>
            <ul class="footer-contacts-list">
                <li class="footer-contacts-item ">
                    <a href="#" class="footer-contacts-link">050 522 14 40</a>
                    <a href="#" class="footer-contacts-link">050 390 95 59</a>
                </li>
                <li class="footer-contacts-item footer-contacts-item-list">
                    <a href="#" class="footer-contacts-link">atc@te.net.ua</a>
                    <a href="#" class="footer-contacts-link">atc1@te.net.ua</a>
                </li>
                <li class="footer-contacts-item footer-contacts-item-home">
                    <a href="#" class="footer-contacts-link">+38(0482)34-87-98</a>
                </li>
                <li class="footer-contacts-item footer-contacts-item-marker footer-adress">
                    <a href="#" class="footer-contacts-link">
                        <div>68093, Одесская область, г. Ильичевск,</div>
                        с. Малодолинское, ул. Заводская, 3
                    </a>
                    <a href="#" class="footer-contacts-link"></a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            © Все права защищены, 2020. Разработка сайта
            <a href="#">
                <img src="img/spector.png" alt="specter">
            </a>
        </div>
    </div>
</footer>

<div>
    <div class="social-items-bg">
    </div>


    <div class="social-btn-pulse active">
    </div>

    <div class="social-items-wrapper">
        <div class="social-items-menu">

            <div class="social-item">
                <a href="#" class="target_telegram">
                    <div>
                        <div class="item-icon-telegram item-icon"></div>
                    </div>
                </a>
                <span class="social-item__description"><a href="#">Telegram</a></span>
            </div>

            <div class="social-item">
                <a href="viber://chat?number=%2B#" class="target_viber">
                    <div>
                        <div class="item-icon-viber item-icon"></div>
                    </div>
                </a>
                <span class="social-item__description"><a href="viber://chat?number=%2B#">Viber</a></span>
            </div>
            <div class="social-item ">
                <a href="tel:#">
                    <div>
                        <div class="item-icon-phone item-icon"></div>
                    </div>
                </a>
                <span class="social-item__description"><a href="tel:#"></a></span>
            </div>

            <div class="social-item">
                <a href="viber://chat?number=%2B#" class="target_facebook">
                    <div>
                        <div class="item-icon-facebook item-icon"></div>
                    </div>
                </a>
                <span class="social-item__description"><a href="viber://chat?number=%2B#">Facebook</a></span>
            </div>
            <div class="social-item">
                <a href="{{}}" class="target_instagram">
                    <div>
                        <div class="item-icon-instagram item-icon"></div>
                    </div>
                </a>
                <span class="social-item__description"><a href="#">Instagram</a></span>
            </div>


            <div class="social-item call-contact-form">
                <div>
                    <div>
                        <div class="item-icon-chat item-icon"></div>
                    </div>
                </div>
                <span class="social-item__description"></span>
            </div>

        </div>


        <div class="social-btn-bg">

            <div class="social-btn">
                <div class="btn-1 s-btn active">
                    <svg fill="#ffffff"  enable-background="new 0 0 512.021 512.021" width="28" height="28" viewBox="0 0 512.021 512.021" xmlns="http://www.w3.org/2000/svg"><g><path d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.837-3.837 9.36-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.867 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z"/><path d="m496.02 272c-8.836 0-16-7.164-16-16 0-123.514-100.486-224-224-224-8.836 0-16-7.164-16-16s7.164-16 16-16c68.381 0 132.668 26.628 181.02 74.98s74.98 112.639 74.98 181.02c0 8.836-7.163 16-16 16z"/><path d="m432.02 272c-8.836 0-16-7.164-16-16 0-88.224-71.776-160-160-160-8.836 0-16-7.164-16-16s7.164-16 16-16c105.869 0 192 86.131 192 192 0 8.836-7.163 16-16 16z"/><path d="m368.02 272c-8.836 0-16-7.164-16-16 0-52.935-43.065-96-96-96-8.836 0-16-7.164-16-16s7.164-16 16-16c70.58 0 128 57.42 128 128 0 8.836-7.163 16-16 16z"/></g></svg>
                </div>
                <div class="btn-2 s-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 29">
                        <path fill="#FFFFFF" fill-rule="evenodd" d="M878.289968,975.251189 L878.289968,964.83954 C878.289968,963.46238 876.904379,962 875.495172,962 L857.794796,962 C856.385491,962 855,963.46238 855,964.83954 L855,975.251189 C855,976.924031 856.385491,978.386204 857.794796,978.090729 L860.589592,978.090729 L860.589592,981.876783 L860.589592,983.76981 L861.521191,983.76981 C861.560963,983.76981 861.809636,982.719151 862.45279,982.823297 L866.179185,978.090729 L875.495172,978.090729 C876.904379,978.386204 878.289968,976.924031 878.289968,975.251189 Z M881.084764,971.465135 L881.084764,976.197702 C881.43316,978.604561 879.329051,980.755508 876.426771,980.93027 L868.042382,980.93027 L866.179185,982.823297 C866.400357,983.946455 867.522357,984.94992 868.973981,984.716324 L876.426771,984.716324 L879.221567,988.502377 C879.844559,988.400361 880.153166,989.448891 880.153166,989.448891 L881.084764,989.448891 L881.084764,987.555864 L881.084764,984.716324 L882.947962,984.716324 C884.517696,984.949819 885.742758,983.697082 885.742758,981.876783 L885.742758,974.304675 C885.742659,972.717669 884.517597,971.465135 882.947962,971.465135 L881.084764,971.465135 Z" transform="translate(-855 -962)"></path>
                    </svg>

                </div>

                <div class="btn-3 s-btn-close">
                    <svg class="b24-widget-button-icon b24-widget-button-close-item" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"><path fill="#FFF" fill-rule="evenodd" d="M18.866 14.45l9.58-9.582L24.03.448l-9.587 9.58L4.873.447.455 4.866l9.575 9.587-9.583 9.57 4.418 4.42 9.58-9.577 9.58 9.58 4.42-4.42"></path></svg>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#logo" class="footer__button-up">
    <img src="svg/social/rounded_arrow.svg" alt="">
</a>



<script  src="https://code.jquery.com/jquery-3.5.1.min.js"  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/script.js"></script>
<script src="js/main-page.js"></script>
<script>
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.footer__button-up').fadeIn();
            } else {
                $('.footer__button-up').fadeOut();
            }
        });

        $('.footer__button-up').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

    });


    function toggleMobileMenu(){
        $('.mobile-menu').toggleClass('active');
        $('body').toggleClass('no-scroll');
        // $(document).click(function (e) {
        //     if ( !$('.mobile-menu').is(e.target) && ! $('.mobile-menu').is(e.target) &&  $('.mobile-menu').has(e.target).length === 0) {
        //         $('.mobile-menu').slideUp();
        //         $('.mobile-menu').removeClass('active');
        //     };
        // });



    }
    $('.open-mobile-menu').click(toggleMobileMenu);
    $('.mobile-menu__close').click(toggleMobileMenu);

    $('.open-sub-menu').click(function(){
        $(this).next().toggleClass('active');
        $(this).parent().toggleClass('active');
        $(this).toggleClass('active');

    });




    function headerBg(){
        if($(window).scrollTop() > 50){
            $('.header').addClass('active-bg');
        }else{
            $('.header').removeClass('active-bg');
        }

    }


    $(document).ready(headerBg);
    $(window).scroll(headerBg);

    // let popup = document.querySelector('.mobile-menu');
    // document.onclick = function(evt){
    //     let ev = evt;
    //     debugger;
    //     if ( evt.target.className != 'mobile-menu' ||  evt.target.className != 'open-mobile-menu') {
    //         popup.classList.remove('active');
    //     };
    // };

    $(document).mouseup(function (e){ // событие клика по веб-документу
        let menu = $(".mobile-menu"); // тут указываем ID элемента
        let open = $('.open-mobile-menu');
        if (!menu.is(e.target) // если клик был не по нашему блоку
            && menu.has(e.target).length === 0 &&
            !open.is(e.target) && open.has(e.target).length === 0
        ) { // и не по его дочерним элементам
            // menu.removeClass('active'); // скрываем его
            $('.mobile-menu').removeClass('active');
            $('body').removeClass('no-scroll');
        }
    });


    function toggle_social_button() {
        $('.social-items-menu').fadeToggle();
        $('.social-btn').toggleClass('active');
        $('.social-btn .s-btn-close').toggleClass('active');
        $('.social-btn-pulse').toggleClass('active');
        $('.social-btn-bg').toggleClass('active');
        $('.social-btn .btn-1').toggleClass('close');
        $('.social-btn .btn-2').toggleClass('close');
        $('.social-items-bg').fadeToggle();
        $('.social-items-bg').toggleClass('active');
    }

    swap_social_button_icons();

    function swap_social_button_icons() {
        $('.btn-1').fadeToggle(1500);
        $('.btn-2').fadeToggle(1500);
        setTimeout(swap_social_button_icons, 2000);
    }

    $('.social-items-wrapper, .social-items-bg ').click(function () {
        toggle_social_button();
    });


    function toggleFormSuccessAlert(){
        $('.popup-form-bg').fadeOut();
        $('.success').fadeIn();
        setTimeout(function(){
            $('.success').fadeOut();
            $('form input[type=text], form input[type=tel], form input[type=email], form textarea').val('');
        },3000);
    }

    $('form').submit(function(e){
        e.preventDefault();

        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var data = $(this).serialize();

        $.ajax({
            method: method,
            url: url,
            data : data
        }).done(function(){
            toggleFormSuccessAlert();
        });
    });



    $('.call-contact-form, #contact-from-bg .close-form').click(function(){
        $('#contact-from-bg').fadeToggle();
    });

    $('#contact-from-bg').click(function(e){
        var form_bg = $('#contact-from-bg');
        if ( form_bg.is(e.target ) && form_bg.has(e.target).length === 0) {
            $('#contact-from-bg').fadeToggle();
        }
    });



</script>
</body>
</html>
