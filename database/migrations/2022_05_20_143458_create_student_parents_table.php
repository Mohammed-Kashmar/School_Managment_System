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
        Schema::create('parents_student', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::table('parents_student',function(Blueprint $table){
        	$table->unsignedBigInteger('student_id');
        	$table->foreign('student_id')->references('id')
     			->on('students')->onDelete('cascade');
        });
        Schema::table('parents_student',function(Blueprint $table){
        	$table->unsignedBigInteger('parents_id');
        	$table->foreign('parents_id')->references('id')
     			->on('parents')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_parents');
    }
};
