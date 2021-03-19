<footer class="main-footer">
    <div class="footer-wrapper">
        <div class="footer-content">
            <div class="footer-logo">
                <a class="main-logo" href="#">
                    <img id="logo1" src="{{asset('assets/front/img/logo.png')}}" alt="logo">
                </a>
            </div>
            <ul class="footer-list">
                @foreach($page_on_menu as $service_page)
                    @if($service_page->parent_id == null)
                        <li class="footer-item">
                            <a href="{{route('pages', ['slug'=>$service_page->slug])}}" class="footer-link">{{$service_page->translate()->title}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <ul class="footer-contacts-list">
                <li class="footer-contacts-item ">
                    <a href="#" class="footer-contacts-link">{{$contact->phone_1}}</a>
                    <a href="#" class="footer-contacts-link">{{$contact->phone_2}}</a>
                </li>
                <li class="footer-contacts-item footer-contacts-item-list">
                    <a href="#" class="footer-contacts-link">{{$contact->email1}}</a>
                    <a href="#" class="footer-contacts-link">{{$contact->email2}}</a>
                </li>
                <li class="footer-contacts-item footer-contacts-item-home">
                    <a href="#" class="footer-contacts-link">{{$contact->fax}}</a>
                </li>
                <li class="footer-contacts-item footer-contacts-item-marker footer-adress">
                    <a href="#" class="footer-contacts-link">{{$contact->translate()->address}}</a>
                    <a href="#" class="footer-contacts-link"></a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            © Все права защищены, 2020. Разработка сайта
            <a href="#">
                <img src="{{asset('assets/front/img/spector.png')}}" alt="specter">
            </a>
        </div>
    </div>
</footer>
