@extends('front.layout')


@section('links')
    <link rel="stylesheet" href="src="{{ asset('assets/front/css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="src="{{ asset('assets/front/css/page.css') }}">
@endsection
@section('content')
    <section class="section-bunner">
        <img src="{{$page->b}}" alt="" class="section-bunner-img">
        <h2 class="buner-title-page">Спецтехника</h2>
    </section>
    <div class="page-breadcrumbs">
        <ol class="breadcrumbs">
            <li >
                <a href="#" itemprop="item">
                    <span class="breadcrumbs__home">
                        <img src="src="{{ asset('assets/front/svg/home.svg')}}" alt="home">
                    </span>
                </a>
            </li>
            <li class="breadcrumbs__separator"> / </li>
            <li>
                <a class="breadcrumbs-link breadcrumbs-link-acive" >
                    <span itemprop="name">О компании</span>
                </a>
            </li>
        </ol>
        <div class="come-back page-back-none">
            <img src="svg/back.svg" alt="" class="come-back-img">
            <img src="svg/back-hover.svg" alt="" class="come-back-hover">
            Вернуться к поиску</div>
    </div>
    <section class="page">

        <div class="page-text"><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem repellendus delectus neque voluptate fugiat, libero, aliquid veniam natus mollitia ipsam quos cum! Alias cum earum id consequatur ratione totam neque?</div>
            <div>Ab tenetur sequi doloribus similique animi reiciendis accusamus odit aliquam dolor ullam maiores dolorum corporis dignissimos, consequuntur magni quod quia aut dolorem perferendis quaerat. Mollitia hic totam enim beatae obcaecati. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae a repellat modi eum aspernatur eius possimus saepe cupiditate maiores commodi. Cumque eaque dolorem dolores cupiditate autem vero voluptates, quia officiis. </div></div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos vitae repellat ullam laudantium aut distinctio, numquam quia libero mollitia delectus, ipsum tempore? Atque provident autem maiores doloremque nesciunt, totam facere?</div>
        <div>Minima odio impedit fuga, id similique vitae eveniet sequi autem, dolorem itaque fugit reprehenderit, accusantium neque beatae nobis distinctio maxime hic repellat possimus amet consectetur dicta laboriosam accusamus iusto quidem.</div>
        <div>Labore repudiandae saepe commodi nesciunt necessitatibus vel quam ipsam ipsum fuga, suscipit quisquam illo iure, facere adipisci totam dolores molestias harum at impedit consectetur minus libero placeat. Id vero, quisquam!</div>
        <div>Quae, voluptates nisi laborum culpa ex quam totam esse dolor! Ullam, possimus illo dolorum eligendi porro veniam recusandae optio expedita consectetur. Suscipit aperiam, qui ad modi ea quia voluptatem perspiciatis.</div>
        <div>Eos officiis placeat fuga numquam optio, dicta ut voluptatem quae assumenda, voluptates temporibus nulla enim nemo expedita ducimus vitae. Cupiditate consectetur beatae dolorem laborum architecto odio quae at non quisquam.</div>
        <div class="page-serificates">

        </div>
    </section>
    <section class="certificates">
        <h3 class="certificates-title">Сертификаты</h3>
        <div class="regular slider certificates-wrapper">
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate1.jpg">
                    <img src="img/certificate1.jpg" alt="certificate">
                </a>
            </div>
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate2.jpg">
                    <img src="img/certificate2.jpg" alt="certificate">
                </a>
            </div>
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate3.jpg">
                    <img src="img/certificate3.jpg" alt="certificate">
                </a>
            </div>
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate4.jpg">
                    <img src="img/certificate4.jpg" alt="certificate">
                </a>
            </div>
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate1.jpg">
                    <img src="img/certificate1.jpg" alt="certificate">
                </a>
            </div>
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate2.jpg">
                    <img src="img/certificate2.jpg" alt="certificate">
                </a>
            </div>
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate3.jpg">
                    <img src="img/certificate3.jpg" alt="certificate">
                </a>
            </div>
            <div class="certificate" style="margin-right: 10px;">
                <a data-fancybox="gallery" href="img/certificate4.jpg">
                    <img src="img/certificate4.jpg" alt="certificate">
                </a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/main-page.js') }}"></script>
    <script src="{{ asset('assets/front/js/home.js') }}"></script>
@endsection

