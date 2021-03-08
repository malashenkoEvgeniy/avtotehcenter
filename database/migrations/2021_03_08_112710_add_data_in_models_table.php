<?php

use App\Models\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataInModelsTable extends Migration
{
    public function up()
    {
        Model::creat('Terberg', '/assets/admin/img/models/logo_terberg_tiagach.jpg', 1);
        Model::creat('Kalmar', '/assets/admin/img/models/kalmar-logo_tiagach.png', 1);
        Model::creat('Toyota', '/assets/admin/img/models/toyeta_logo-vil-pogr.svg', 2);
        Model::creat('PetroNick', '/assets/admin/img/models/petronick.png', 3);
        Model::creat('Jungheinrich', '/assets/admin/img/models/Jungheinrich.jpg', 4);
        Model::creat('Komatsu', '/assets/admin/img/models/komatsu.png', 5);
        Model::creat('Ford Trucks', '/assets/admin/img/models/ford-truk.png', 6);

    }

    public function down()
    {
        return false;
    }
}
