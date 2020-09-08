<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_modulos', function (Blueprint $table) {
            $table->id('ArMCod');
            $table->unsignedBigInteger('AreCod');
            $table->unsignedBigInteger('ModCod');
            $table->foreign('AreCod')->references('id')->on('areas');
            $table->foreign('ModCod')->references('id')->on('modulos');
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
        Schema::dropIfExists('areas_modulos');
    }
}
