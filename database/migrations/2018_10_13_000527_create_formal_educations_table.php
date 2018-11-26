<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormalEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formal_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('modality')->nullable();
            $table->string('grade')->nullable();
            $table->string('graduate')->nullable();
            $table->date('degree')->nullable();
            $table->string('title')->nullable();
            $table->string('college')->nullable();
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
        Schema::dropIfExists('formal_educations');
    }
}
