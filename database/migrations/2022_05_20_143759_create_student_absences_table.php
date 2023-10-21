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
        Schema::create('student_absences', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->string('cause');
            $table->boolean('justified');
            $table->timestamps();
        });
        Schema::table('student_absences',function(Blueprint $table){
        	$table->unsignedBigInteger('student_id');
        	$table->foreign('student_id')->references('id')
     			->on('students')->onDelete('cascade');
        });
        Schema::table('student_absences',function(Blueprint $table){
        	$table->unsignedBigInteger('course_id');
        	$table->foreign('course_id')->references('id')
     			->on('courses')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_absences');
    }
};
