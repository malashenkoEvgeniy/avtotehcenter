
   <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href='{{ LaravelLocalization::localizeUrl("/") }}' itemprop="item" title="home">
            <span class="breadcrumbs__home" itemprop="name">@include('front.svg.home')</span>
         </a>
         <meta itemprop="position" content="1" />
      </li>

    @if($breadcrumbs->parent !== null)
        @php
        $i = 2
        @endphp

        @foreach($breadcrumbs->parent as $key => $parent)
        <li class="breadcrumbs__separator"> / </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href='{{ LaravelLocalization::localizeUrl("$parent->url") }}' itemprop="item" >
            <span itemprop="name">{{ $parent->translate()->title }} </span>
        </a>
        <meta itemprop="position" content="{{$i}}" />
        </li>
        @php $i++ @endphp
        @endforeach
    @endif


      <li class="breadcrumbs__separator"> / </li>
      <li class="breadcrumbs__current"> {{$breadcrumbs->current}} </li>
   </ol>
