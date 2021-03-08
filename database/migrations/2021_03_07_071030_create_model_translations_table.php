<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_translations', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('title');
            $table->string('language')->default('ru');
            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
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
        Schema::dropIfExists('model_translations');
    }
}
