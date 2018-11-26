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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('lastName')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('identity')->nullable();
            $table->string('civilStatus')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('cellPhone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
        Schema::disableForeignKeyConstraints();
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
