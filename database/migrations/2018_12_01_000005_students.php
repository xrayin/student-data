<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Students extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->default('secret');
        });

        Schema::table('students', function($table) {
            $table->integer('schedule_id')->unsigned();
            $table->foreign('schedule_id')->references('schedule_id')->on('schedules');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('group_id')->on('groups');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
