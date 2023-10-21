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
        Schema::create('classroom_teacher', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::table('classroom_teacher',function(Blueprint $table){
        	$table->unsignedBigInteger('teacher_id');
        	$table->foreign('teacher_id')->references('id')
     			->on('teachers')->onDelete('cascade');
        });
        Schema::table('classroom_teacher',function(Blueprint $table){
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
        Schema::dropIfExists('classroom__teachers');
    }
};
