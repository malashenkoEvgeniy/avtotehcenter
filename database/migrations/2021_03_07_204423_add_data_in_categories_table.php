<?php

use App\Models\Category;
use App\Models\Contact;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataInCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Contact::create('Автотехцентер','68093, Одесская область, г.Ильичевск, с.Малодолинское, ул.Заводская,3', '+38 (050) 522 14 40',
            '+38 (050) 522 14 40', '+38 (0482) 34-87-98','+38 (050) 522 14 40', '+38 (050) 522 14 40',
        'atc@te.net.ua', 'atc1@te.net.ua', 'https://www.facebook.com/', 'https://www.instagram.com/');
        Category::creat('Портовые тягачи', '/assets/admin/img/categories/catalog1.png');
        Category::creat('Вилочные погрузчики', '/assets/admin/img/categories/catalog2.png');
        Category::creat('Ковшевые погрузчики', '/assets/admin/img/categories/catalog3.png');
        Category::creat('Штабелеры', '/assets/admin/img/categories/catalog4.png');
        Category::creat('Ричстакеры', '/assets/admin/img/categories/catalog5.png');
        Category::creat('Самосвалы', '/assets/admin/img/categories/catalog6.png');
    }

    public function down()
    {
        return false;
    }
}
