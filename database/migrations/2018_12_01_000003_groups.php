<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Groups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('group_id');
            $table->string('name');
        });

        Schema::table('groups', function($table) {

            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('class_id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
