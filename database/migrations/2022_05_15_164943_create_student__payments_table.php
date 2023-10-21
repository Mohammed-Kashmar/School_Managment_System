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
        Schema::create('student__payments', function (Blueprint $table) {
            $table->id();
            $table->integer('total_payments');
            $table->integer('current_payments');
            $table->date('date');
            $table->timestamps();
        });
        Schema::table('student__payments',function(Blueprint $table){
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
        Schema::dropIfExists('student__payments');
    }
};
