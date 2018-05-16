<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cod_ced');
            $table->string('name');
            $table->bigInteger('tel');
            $table->enum('rol', ['Estudiante', 'Docente','Otro']);
            $table->string('email');
            $table->enum('sede_ext', ['Facatativá', 'Fusagasugá','Girardot',
                                      'Ubate','Soacha','Zipaquirá','Chia','Chocontá','Otro']);
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
