<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacteristicTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_translations', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('Year')->nullable();
            $table->string('Hours')->nullable();
            $table->string('lifting_force')->nullable();
            $table->string('height_with_mast_folded')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('motor')->nullable();
            $table->text('description')->nullable();
            $table->string('language')->default('ru');
            $table->integer('characteristic_id')->unsigned();
            $table->foreign('characteristic_id')->references('id')->on('characteristics')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characteristic_translations');
    }
}
