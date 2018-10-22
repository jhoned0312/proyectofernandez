<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('docentes_id');
            $table->unsignedInteger('materias_id');
            $table->unsignedInteger('carreras_id');
            $table->unsignedInteger('aula_id');
            $table->Integer('semestre');
            $table->time('horaro_init');
            $table->time('hora_end');
            $table->index(['id','docente_id','materia_id']);

            $table->foreing('docente_id')->references('id')->on('docentes');
            $table->foreing('aula_id')->references('id')->on('aulas');
            $table->foreing('materia_id')->references('id')->on('materias');
            $table->foreing('carrera_id')->references('id')->on('carreras');

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
        Schema::dropIfExists('horarios');
    }
}
