<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombreProyecto',30);
            $table->string('justificacion',30);
            $table->string('descripcion',30);
            $table->string('objetivoGeneral',30);
            $table->string('estrategiaProyecto',30);
            $table->string('beneficiarios',30);
            $table->string('codigoProyecto',30);
            $table->string('fechaComienzo',30);
            $table->string('fechaFinal',30);
            $table -> unsignedInteger ('idSizeProject');
            $table -> foreign ('idSizeProject') -> references ('id') -> on ('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
