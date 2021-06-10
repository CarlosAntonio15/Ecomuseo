<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('CodActividad')->unique();
            $table->string('NombreActivida',50);
            $table->time('HoraInicioActividad');
            $table->time('HoraFinalActividad');
            $table->date('FechaActividad');
            $table->string('DescripcionActividad',200);
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
        Schema::dropIfExists('actividads');
    }
}