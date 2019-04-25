<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',30);
            $table->string('descripcion',30);
            $table->string('fechaComienzo',30);
            $table->string('fechaFinal',30);
            $table->string('estado',30);
            $table -> unsignedInteger ('idPrioridad');
            $table -> foreign ('idPrioridad') -> references ('id') -> on ('priorities');
            $table -> unsignedInteger ('idProyecto');
            $table -> foreign ('idProyecto') -> references ('id') -> on ('projects');
            $table -> unsignedInteger ('idPerfil');
            $table -> foreign ('idPerfil') -> references ('id') -> on ('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
