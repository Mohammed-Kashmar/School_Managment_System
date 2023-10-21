<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasroom_courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::table('clasroom_courses',function(Blueprint $table){
        	$table->unsignedBigInteger('course_id');
        	$table->foreign('course_id')->references('id')
     			->on('courses')->onDelete('cascade');
        });Schema::table('clasroom_courses',function(Blueprint $table){
        	$table->unsignedBigInteger('classroom_id');
        	$table->foreign('classroom_id')->references('id')
     			->on('classrooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasroom_courses');
    }
};
