<?php

use App\User;
use Illuminate\Database\Migrations\Migration;

class AddAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create_admin('admin', 'admin@admin.com', '1234zxcv');
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
