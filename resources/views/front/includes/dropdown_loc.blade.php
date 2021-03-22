<div class="dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase">{{ LaravelLocalization :: getCurrentLocale ()}}</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown-menu" style="max-width: 80px">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="dropdown-item @if(LaravelLocalization::getCurrentLocale() == $localeCode ) active @endif" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{$localeCode}}</a>

        @endforeach
{{--        <a class="dropdown-item" href="#">EN</a>--}}
{{--        <a class="dropdown-item" href="#">UK</a>--}}
{{--        <a class="dropdown-item" href="#">RU</a>--}}
    </div>
</div>
