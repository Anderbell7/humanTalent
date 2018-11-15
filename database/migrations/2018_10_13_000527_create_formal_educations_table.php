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
            $table->string('modality');
            $table->string('grade');
            $table->string('graduate');
            $table->date('degree');
            $table->string('title');
            $table->string('college');
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
        Schema::dropIfExists('formal_educations');
    }
}
