<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('id');
           # $table->integer('idUser');
            $table->string('name');
            $table->string('lastName');
            $table->date('birthdate');
            $table->string('identity');
            $table->string('civilStatus');
            $table->string('address');
            $table->integer('phone');
            $table->integer('cellPhone');
            $table->string('email');
            #$table->rememberToken();
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
        Schema::dropIfExists('personal_infos');
    }
}
