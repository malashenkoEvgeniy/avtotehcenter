


{{--===========================--}}
<div class="page-breadcrumbs">
   <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href='{{ LaravelLocalization::localizeUrl("/") }}' itemprop="item" title="home">
            <span class="breadcrumbs__home" itemprop="name">@include('front.svg.home')</span>
         </a>

      </li>

    @if($breadcrumbs['parent'] !== null)
        @if($breadcrumbs['parent'] == 3)
        <li class="breadcrumbs__separator"> / </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href='{{ LaravelLocalization::localizeUrl("('pages', ['slug'=>'uslugi'])}}") }}' class="breadcrumbs-link " itemprop="item" >
            <span itemprop="name">Услуги</span>
        </a>

        </li>
        @elseif($breadcrumbs['parent'] == 2 )
           <li class="breadcrumbs__separator"> / </li>
           <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
               <a href='{{ LaravelLocalization::localizeUrl("('pages', ['slug'=>'spectehnika'])}}") }}' itemprop="item" >
                   <span itemprop="name">Спецтехника</span>
               </a>
           </li>
        @endif
    @endif
      <li class="breadcrumbs__separator"> / </li>
      <li class="breadcrumbs__current"> {{$breadcrumbs->current}} </li>
   </ol>
    <div class="come-back">
        <img src="{{ asset('assets/front/svg/back.svg') }}" alt="" class="come-back-img">
        <img src="{{ asset('assets/front/svg/back-hover.svg') }}" alt="" class="come-back-hover">
        Вернуться к поиску
    </div>
</div>
