<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotogaleriya_models', function (Blueprint $table) {
            $table->id();
            $table->string('header_uz');
            $table->string('header_en');
            $table->string('header_ru');
            $table->text('text_uz');
            $table->text('text_en');
            $table->text('text_ru');
            $table->string('photo1');

            $table->string('outor1_uz');
            $table->string('outor1_en');
            $table->string('outor1_ru');
            $table->string('photo2');

            $table->string('outor2_uz');
            $table->string('outor2_en');
            $table->string('outor2_ru');

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
        Schema::dropIfExists('fotogaleriya_models');
    }
};
