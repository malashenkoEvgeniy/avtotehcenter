<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeModelTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_model_translations', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('title');
            $table->text('body')->nullable();
            $table->string('language')->default('ru');
            $table->integer('type_model_id')->unsigned();
            $table->foreign('type_model_id')->references('id')->on('type_models')->onDelete('cascade');
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
        Schema::dropIfExists('type_model_translations');
    }
}
