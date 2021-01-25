<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usu');
            $table->unsignedBigInteger('id_rol');

            $table->foreign('id_rol')->references('id_rol')->on('roles')->onDelete('cascade');
            $table->string('login',50);
            $table->string('Password',50);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('cedula',10);
            $table->string('domicilio',50);
            $table->string('celular',9);
            $table->string('email',30);
            $table->char('genero',1);
            $table->string('foto',45);
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
        Schema::dropIfExists('usuarios');
    }
}
