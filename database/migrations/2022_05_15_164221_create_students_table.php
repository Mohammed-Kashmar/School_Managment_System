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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('address');
            $table->string('phone')->unique();
            $table->string('home_phone')->unique();           
            $table->enum('gender', ["male","female"]);
            $table->string('email', 250)->unique()->nullable();
            $table->string('image');
            $table->date('birthdate');
            $table->timestamps();
        });
        Schema::table('students',function(Blueprint $table){
        	$table->unsignedBigInteger('classroom_id')->nullable();
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
        Schema::dropIfExists('students');
    }
};
