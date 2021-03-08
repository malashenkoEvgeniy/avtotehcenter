<?php

use App\Models\Category;
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
