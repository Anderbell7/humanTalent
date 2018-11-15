<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcquiredSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquired_skills', function (Blueprint $table) {
            $table->increments('id');
           # $table->integer('idUser');
            $table->string('skills');
            $table->timestamps();
        });
    }
    //->default(1)
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acquired_skills');
    }
}
