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
        Schema::create('homework__questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->timestamps();
        });

        Schema::table('homework__questions',function(Blueprint $table){
        	$table->unsignedBigInteger('homework_id');
        	$table->foreign('homework_id')->references('id')
     			->on('homework')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homework__questions');
    }
};
