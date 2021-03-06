<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('language')->nullable();
            $table->string('level')->nullable();
            $table->string('institute')->nullable();
            $table->timestamps();
            
            #$table->foreign('user_id')->references('id')->on('users');
            #$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('languages');
        Schema::enableForeignKeyConstraints();
    }
}
