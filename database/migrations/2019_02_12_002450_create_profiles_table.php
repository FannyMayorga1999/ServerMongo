<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('fechaNacimiento',30);
            $table->string('email',30);
            $table->string('celular',30);
            $table -> unsignedInteger ('idRole');
            $table -> foreign ('idRole') -> references ('id') -> on ('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
