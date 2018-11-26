<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('company')->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('duration')->nullable();
            $table->string('boss')->nullable();
            $table->string('phone')->nullable();
            $table->string('functions')->nullable();
            #$table->rememberToken();
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
        Schema::dropIfExists('work_experiences');
    }
}
