<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassEnrollments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_enrollments', function (Blueprint $table) {
            $table->increments('enrollment_id');
        });

        Schema::table('class_enrollments', function($table) {

            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('group_id')->on('groups');
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
        Schema::dropIfExists('class_enrollments');
    }
}
