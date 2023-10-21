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
        Schema::create('question__banks', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->timestamps();
        });
        Schema::table('question__banks',function(Blueprint $table){
        	$table->unsignedBigInteger('exam_question_id');
        	$table->foreign('exam_question_id')->references('id')
     			->on('exam__questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question__banks');
    }
};
