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
        Schema::create('student__notes', function (Blueprint $table) {
            $table->id();
            $table->text('notes');
            $table->timestamps();
        });
        Schema::table('student__notes',function(Blueprint $table){
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
        Schema::dropIfExists('student__notes');
    }
};
