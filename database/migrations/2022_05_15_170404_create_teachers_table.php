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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('password');
            $table->string('phone')->unique();
            $table->enum('gender', ["male","female"]);
            $table->string('email', 250)->unique()->nullable();
            $table->string('image');
            $table->date('birthdate');
            $table->text('experience');
            $table->timestamps();

        });
        Schema::table('teachers',function(Blueprint $table){
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
        Schema::dropIfExists('teachers');
    }
};
