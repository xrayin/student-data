<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Schedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('schedule_id');
        });

        Schema::table('schedules', function($table) {

            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('student_id')->on('students');
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
        Schema::dropIfExists('schedules');
    }
}
