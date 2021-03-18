<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@if(isset($seo_data['title'])){{$seo_data['title']}}@endif </title>
    <meta name="description" content="@if(isset($seo_data['description'])){{$seo_data['description']}}@endif">
    <meta name="keywords" content="@if(isset($seo_data['keywords'])){{$seo_data['keywords']}}@endif">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/front/img/icons/favicon.ico.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/front/img/icons/favicon.ico.png') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/libs/slick/slick.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/libs/slick/slick-theme.css') }}"/>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/front/libs/font-awesome-4.7.0/css/font-awesome.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

      <link rel="alternate" hreflang="ru" href="{{ LaravelLocalization::getLocalizedURL('ru') }}">
    <link rel="alternate" hreflang="uk" href="{{ LaravelLocalization::getLocalizedURL('uk') }}">
    <link rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en') }}">

    <meta name="robots" content="noindex, nofollow" />

      <link rel="stylesheet" href="{{ asset('assets/front/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
{{--    <link rel="stylesheet" href="/frontend/css/social_buttons.css">--}}


    @yield('links')

  </head>

  <body>


        @include('front.includes.header')

        <main class="main-content">
            @yield('content')
        </main>

        @include('front.includes.footer')
{{--        @include('front.includes.social_buttons')--}}

{{--        @include('front.includes.popup_form')--}}
{{--        @include('front.includes.form_success_alert')--}}


    <script  src="https://code.jquery.com/jquery-3.5.1.min.js"  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>--}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
{{--    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>--}}
        <script src="{{ asset('assets/front/js/script.js') }}"></script>
        @yield('scripts')
  </body>
</html>
