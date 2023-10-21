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
        Schema::create('exam__answers', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->timestamps();
        });
        Schema::table('exam__answers',function(Blueprint $table){
        	$table->unsignedBigInteger('exam_id')->nullable();
        	$table->foreign('exam_id')->references('id')
     			->on('exams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam__answers');
    }
};
