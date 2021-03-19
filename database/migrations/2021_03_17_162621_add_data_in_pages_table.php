<?php

use App\Models\Certificate;
use App\Models\MainPage;
use App\Models\Page;
use Illuminate\Database\Migrations\Migration;

class AddDataInPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        MainPage::creat('Ваш партнер по аренде спецтехники', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?

But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself',
            '/assets/admin/img/pages/tagline-bg.jpg');
        Page::creat('О компании', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', '/assets/admin/img/pages/buner-about-us.jpg');
        Page::creat('Спецтехника', '', '/assets/admin/img/pages/buner-catalog.jpg');
        Page::creat('Услуги', '', '/assets/admin/img/pages/buner-about-us.jpg');
        Page::creat('Доставка', '', '/assets/admin/img/pages/banner-delivery.jpg');
        Page::creat('Контакты', '', '/assets/admin/img/pages/banner-contucts.jpg');
        Page::creat('Услуга1', '', '/assets/admin/img/pages/buner-catalog.jpg', 3);
        Certificate::create(['url'=>'/assets/admin/img/certificates/certificate1.jpg']);
        Certificate::create(['url'=>'/assets/admin/img/certificates/certificate2.jpg']);
        Certificate::create(['url'=>'/assets/admin/img/certificates/certificate3.jpg']);
        Certificate::create(['url'=>'/assets/admin/img/certificates/certificate4.jpg']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        return false;
    }
}
