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
        Schema::create('course_homeworks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::table('course_homeworks',function(Blueprint $table){
        	$table->unsignedBigInteger('homework_id');
        	$table->foreign('homework_id')->references('id')
     			->on('homework')->onDelete('cascade');
        });
        Schema::table('course_homeworks',function(Blueprint $table){
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
        Schema::dropIfExists('course_homeworks');
    }
};
