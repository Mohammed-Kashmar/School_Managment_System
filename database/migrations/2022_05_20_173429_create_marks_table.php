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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::table('marks',function(Blueprint $table){
        	$table->unsignedBigInteger('exam_id');
        	$table->foreign('exam_id')->references('id')
     			->on('exams')->onDelete('cascade');
        });
        Schema::table('marks',function(Blueprint $table){
        	$table->unsignedBigInteger('course_id');
        	$table->foreign('course_id')->references('id')
     			->on('courses')->onDelete('cascade');
        });
        Schema::table('marks',function(Blueprint $table){
        	$table->unsignedBigInteger('student_id');
        	$table->foreign('student_id')->references('id')
     			->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
};
