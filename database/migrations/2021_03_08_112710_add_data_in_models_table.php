<?php

use App\Models\Model;
use App\Models\TypeModel;
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

        TypeModel::creat('rt223', '/assets/admin/img/marka/rt223.png', 1, 1,
            2017, '8 417 ч', 62, '3,1 м', 'Дизель', 1.1,'Вольво, TAD750VE (Euromot IIIA)', 'ttt');
        TypeModel::creat('YT182', '/assets/admin/img/marka/yt182.png', 1, 1,
            2020, '8 417 ч', 86, '3,1 м', 'Дизель', 2.2, 'Вольво, TAD750VE (Euromot IIIA)', 'ttt');
        TypeModel::creat('YT222', '/assets/admin/img/marka/yt222.png', 1, 1,
            2011, '8 417 ч', 43, '3,1 м', 'Дизель', 2.9,'Вольво, TAD750VE (Euromot IIIA)', 'ttt');
        TypeModel::creat('72-8FDJ35', '/assets/admin/img/marka/728fdj35.png', 2, 3,
            2018, '8 417 ч', 5, '3,1 м', 'Дизель', 3.2,'Вольво, TAD750VE (Euromot IIIA)', 'ttt');
    }

    public function down()
    {
        return false;
    }
}
