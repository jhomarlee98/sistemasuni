<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cursos', function (Blueprint $table) {
            $table->id('CurCod');
            $table->string('CurNom',50);
            $table->string('CurImg',150);
            $table->string('CurDur',10);
            $table->text('CurDsc');
            $table->string('CurPdf',150);
            $table->integer('CurEst');
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
        Schema::dropIfExists('cursos');
    }
}
