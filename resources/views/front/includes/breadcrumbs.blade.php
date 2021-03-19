
<div class="page-breadcrumbs">
   <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
         <a href='{{ LaravelLocalization::localizeUrl("/") }}' itemprop="item" title="home">
            <span class="breadcrumbs__home" itemprop="name">
                <img src="{{asset('assets/front/svg/home.svg')}}" alt="home">
            </span>
         </a>

      </li>
       @foreach($breadcrumbs as $breadcrumb)
        <li class="breadcrumbs__separator"> / </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="{{route('pages', ['slug'=>$breadcrumb['link']])}}" class="breadcrumbs-link @if($breadcrumb['last']==1) breadcrumbs-link-active @endif" itemprop="item" >
                <span itemprop="name">{{$breadcrumb['name']}}</span>
            </a>

        </li>
       @endforeach

   </ol>

    @if(count($breadcrumbs)>2 )
    <a class="come-back" href="{{url()->previous()}}">
        <img src="{{ asset('assets/front/svg/back.svg') }}" alt="" class="come-back-img">
        <img src="{{ asset('assets/front/svg/back-hover.svg') }}" alt="" class="come-back-hover">
        Вернуться к поиску
    </a>
    @endif
</div>
